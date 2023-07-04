@extends('main.master')
@section('title',  $title)
@section('content')
@include('main.contents.establishments.components.breadcrumb')
@include('main.contents.establishments.components.establishment_table')
<!-- @include('main.contents.establishments.modals.add_establishment_modal') -->
@endsection
@section('script')
<script>

$("#file_export").DataTable({
    dom: "Bfrtip",
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    "ajax" : {
      "url": base_url + '/get-establishment', type : "POST", headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, "dataSrc": "",
    },
    'columns': [ 
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<input type="checkbox"> '; 
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
        
        data: null,
        render: function (data, type, row) {
            return    '<a href="javascript:;" class="text-secondary " >\
                                <i class="mdi mdi-pencil" style="font-size: 25px;"></i>\
                            </a> \
                            <a href="javascript:;" class="text-danger " >\
                                <i class="mdi mdi-eye" style="font-size: 25px;"></i>\
                            </a>';
        }

    },
      
    ]
  });
  $(
    ".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel"
  ).addClass("btn btn-primary mr-1");


  
 
</script>
@endsection
