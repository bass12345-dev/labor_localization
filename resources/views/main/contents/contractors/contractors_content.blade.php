@extends('main.master')
@section('title',  $title)
@section('content')
@include('main.contents.contractors.components.contractors_breadcrumb')
@include('main.contents.contractors.components.contractors_table')
@endsection
@section('script')
<script type="text/javascript">
	var contractors_table = $("#contractors_table").DataTable({

	dom: "Bfrtip",
    fixedColumns: true,
  	fixedHeader: true,
  	scrollX: true,
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    "ajax" : {
      "url": base_url + '/get-contractors', type : "POST", headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, "dataSrc": "",
    },

    'columns': [ 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<input type="checkbox" name="multi-establishment" value="'+row['id']+'" >  '; 
        } 
      }, 
     

      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['contractor_name']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['proprietor']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['address']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['phone_number']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['number_owner_name']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['telephone_number']+'</span>'; 
        } 
      },
      { 
        data: null, render: function (data, type, row) 
        { 
          return '<span href="javascript:;"style="color: #000;" class="table-font-size" >'+row['email_address']+'</span>'; 
        } 
      },
      {
        
        data: null,
        render: function (data, type, row) {
            return    '<a href="javascript:;" class="text-secondary update-establishment" \
                        data-es-code="'+row['es_code']+'"\
                        data-es-name="'+row['es_name']+'"\
                        data-es-id="'+row['es_id']+'"\
                        data-es-address="'+row['es_address']+'"\
                        data-es-email="'+row['es_email']+'"\
                        data-es-personnel="'+row['es_personnel']+'"\
                        data-es-position="'+row['es_position']+'"\
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
</script>
@endsection
