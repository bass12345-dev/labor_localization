@extends('main.master')
@section('title',  $title)
@section('content')
@include('main.contents.establishments.components.breadcrumb')
@include('main.contents.establishments.components.establishment_table')
@include('main.contents.establishments.modals.update_establishment_modal')

@endsection
@section('script')
<script>

var establishment_table = $("#file_export").DataTable({
    dom: "Bfrtip",
    fixedColumns: true,
  fixedHeader: true,
  scrollX: true,
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    "ajax" : {
      "url": base_url + '/get-establishment', type : "POST", headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, "dataSrc": "",
    },
    'columns': [ 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<input type="checkbox" name="multi-establishment" value="'+row['es_id']+'" >  '; 
        } 
      }, 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['es_code']+'</span>'; 
        } 
      }, 
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['es_name']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['es_address']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['es_contact']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['es_email']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['es_personnel']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['es_position']+'</span>'; 
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



  $(document).on('click','a.update-establishment',function (e) {


    

  });

  $(document).on('click','.delete-multi-establishment',function (e) {

    var selectedValues = [];
        $('input[name=multi-establishment]:checked').map(function() {
                    selectedValues.push($(this).val());
        });
    if (selectedValues.length < 1) {
      toastr.error(
        "",
        "Please Select at least one!",
        { showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 }
      );
    }else {

      delete_establishment(selectedValues);
        }
    
  });

  function delete_establishment(id){


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
                            url: base_url + '/delete-establishment',
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
                                establishment_table.ajax.reload();
                                
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
