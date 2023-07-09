@extends('main.master')
@section('title',  $title)
@section('content')
@include('main.contents.users.components.user_breadcrumb')
@include('main.contents.users.components.users_table')
@endsection
@section('script')
<script>

var user_table = $("#user_table").DataTable({
    dom: "Bfrtip",
    scrollCollapse: true, scrollY: '200px',
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    "ajax" : {
      "url": base_url + '/get-users', type : "POST", headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, "dataSrc": "",
    },
    'columns': [ 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<input type="checkbox" name="multi-items" value="'+row['user_id']+'" >  '; 
        } 
      }, 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['first_name']+'</span>'; 
        } 
      }, 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['username']+'</span>'; 
        } 
      }, 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['contact_number']+'</span>'; 
        } 
      }, 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['email']+'</span>'; 
        } 
      }, 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['address']+'</span>'; 
        } 
      }, 
      {
        
        data: null,
        render: function (data, type, row) {
            return    '<a href="javascript:;" class="text-secondary update-establishment" \
                        data-es-code="'+row['es_code']+'"\
                        data-es-code="'+row['es_name']+'"\
                        data-es-code="'+row['es_address']+'"\
                        data-es-code="'+row['es_id']+'"\
                        data-es-code="'+row['es_email']+'"\
                        data-es-code="'+row['es_personnel']+'"\
                        data-es-code="'+row['es_position']+'"\
                        data-bs-toggle="modal" data-bs-target="#update_establishment_modal" >\
                                <i class="mdi mdi-pencil" style="font-size: 25px;"></i>\
                            </a> \
                           ';
        }

    },
      

    ]
});

$(
    ".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel"
  ).addClass("btn btn-primary mr-1");



  $(document).on('click','.delete-multi-items',function (e) {

var selectedValues = [];
    $('input[name=multi-items]:checked').map(function() {
                selectedValues.push($(this).val());
    });
if (selectedValues.length < 1) {
  toastr.error(
    "",
    "Please Select at least one!",
    { showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 }
  );
}else {

  delete_users(selectedValues);
    }

});

function delete_users(id){

    Swal.fire({
        title: "Are you sure?",
        text: "You wont be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            
                    $.ajax({
                            type: "POST",
                            url: base_url + '/delete-user',
                            data: {id:id},
                            cache: false,
                            dataType: 'json', 
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            beforeSend : function(){

                              JsLoadingOverlay.show({
                                  'overlayBackgroundColor': '#666666',
                                  'overlayOpacity': 0.6,
                                  'spinnerIcon': 'pacman',
                                  'spinnerColor': '#000',
                                  'spinnerSize': '2x',
                                  'overlayIDName': 'overlay',
                                  'spinnerIDName': 'spinner',
                                });

                            },
                            success: function(data){
                          
                                if(data.response){

                                  toastr.success(
                                            "",
                                            data.message,
                                            { showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 }
                                          );
                                user_table.ajax.reload();
                                
                                }else {

                                  toastr.error(
                                            "",
                                            data.message,
                                            { showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 }
                                          );
                                }

                            JsLoadingOverlay.hide(); 

                            },  error: function(xhr) 
                            { // if error occured
                             alert('error')
                                 
                            },
                    })



            // result.dismiss can be "cancel", "overlay",
            // "close", and "timer"
        } else if (result.dismiss === "cancel") {
           swal.close()

        }
    });
}
</script>

@endsection