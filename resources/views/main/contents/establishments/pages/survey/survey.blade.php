@extends('main.no_sidebar_master')
@section('title',  $title)
@section('content')
@include('main.contents.establishments.pages.survey.components.breadcrumb')
@include('main.contents.establishments.pages.survey.components.survey_table')
@endsection

@section('script')
<script>

  $("#local_update").click(function(e) {
    $('#update_local_data').removeAttr('hidden');
    $(this).attr('hidden','hidden');
  });
  $("#close_local_update").click(function(e) {
    $('#update_local_data').attr('hidden','hidden');
    $("#local_update").removeAttr("hidden");
  });

  $("#outside_update").click(function(e) {  
    $('#update_outside_data').removeAttr('hidden');
    $(this).attr('hidden','hidden');
  });
  $("#close_outside_update").click(function(e) {
    $('#update_outside_data').attr('hidden','hidden');
     $("#outside_update").removeAttr("hidden");
  });


  var local_table = $("#local_table").DataTable({

      fixedColumns: true,
      fixedHeader: true,
      scrollX: true,
      "searching": false,
      "lengthChange": false,
      "info": false,
      "bPaginate": false, 
      "bFilter": false,

      processing: true,
      serverSide: true,

      dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<img src="'+asset_url+'assets/images/peso_logo.png" style="position:absolute; top:20%; left:20%;height:400px;width:400px;opacity:0.2;" />'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            }
        ],


    
      "ajax": {
        url: base_url  + '/get-survey-data',
        type: 'POST',
        data : { es_id : $('#update_local_survey').find('input[name=es_id]').val(), type : $('#update_local_survey').find('input[name=type]').val(), year : $('#update_local_survey').find('input[name=year]').val() },
         "dataSrc": "",
        headers: csrf,
        
      },
    'columns': [ 
     
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['local_permanent']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['local_probationary']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['local_contractual']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['local_project_based']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['local_seasonal']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['local_jo']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['local_mgt']+'</span>'; 
        } 
      }, 
       { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['local_permanent']+'</span>'; 
        } 
      }, 

     
      
    ]


  });



  var outside_table = $("#outside_table").DataTable({

      fixedColumns: true,
      fixedHeader: true,
      scrollX: true,
      "searching": false,
      "lengthChange": false,
      "info": false,
      "bPaginate": false, 
      "bFilter": false,

      processing: true,
      serverSide: true,

      dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<img src="'+asset_url+'assets/images/peso_logo.png" style="position:absolute; top:20%; left:20%;height:400px;width:400px;opacity:0.2;" />'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            }
        ],


    
      "ajax": {
        url: base_url  + '/get-survey-data',
        type: 'POST',
        data : { es_id : $('#update_outside_survey').find('input[name=es_id]').val(), type : $('#update_outside_survey').find('input[name=type]').val(), year : $('#update_outside_survey').find('input[name=year]').val() },
         "dataSrc": "",
        headers: csrf,
        
      },
    'columns': [ 
     
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['outside_permanent']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['outside_probationary']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['outside_contractual']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['outside_project_based']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['outside_seasonal']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['outside_jo']+'</span>'; 
        } 
      }, 
        { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['outside_mgt']+'</span>'; 
        } 
      }, 
       { 
        data: null, 
        render: function (data, type, row) 
        { 
          return '<span  style="color: #000;" class="table-font-size" >'+row['outside_permanent']+'</span>'; 
        } 
      }, 

     
      
    ]


  });




  $('#update_local_survey').on('submit', function(e) {

    var form  = $(this);
    var type = form.find('input[name=type]').val();
    var url   = form.attr("action");
    var table = local_table;
    _ajax_post(url,form,table,e,type);
    // load_survey_data(form,form.find('input[name=type]').val(),form.find('input[name=es_id]').val().form.find('input[name=year]').val());
  });

  $('#update_outside_survey').on('submit', function(e) {

    var form  = $(this);
    var type = form.find('input[name=type]').val();
    var url   = '/store-survey';  
    var table = outside_table;
    _ajax_post(url,form,table,e,type);
    // load_survey_data(form,form.find('input[name=type]').val(),form.find('input[name=es_id]').val().form.find('input[name=year]').val());
  });
</script>
@endsection

