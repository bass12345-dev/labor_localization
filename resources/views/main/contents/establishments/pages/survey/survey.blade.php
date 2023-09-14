@extends('main.no_sidebar_master')
@section('title',  $title)
@section('content')
@include('main.contents.establishments.pages.survey.components.breadcrumb')
@include('main.contents.establishments.pages.survey.components.survey_table')
@endsection

@section('script')
<script>


// console.log(arr);
 // $("#local_table").DataTable({
 //    fixedColumns: true,
 //  fixedHeader: true,
 //  scrollX: true,
 //  "searching": false,
 //  "lengthChange": false,
 //  "info": false,
 //  "bPaginate": false, 
 //  "bFilter": false 
  
// });




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

  var outside_table = $("#outside_table").DataTable({
      fixedColumns: true,
      fixedHeader: true,
      scrollX: true,
      "searching": false,
      "lengthChange": false,
      "info": false,
      "bPaginate": false, 
      "bFilter": false 
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
                            '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:25%;" />'
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


  // function load_survey_data(form,type,es_id,year){

  //    $.ajax({

  //           type : 'POST',
  //           url   : base_url + '/get-survey-data',
  //           data : { es_id : es_id, type : type, year : year},
  //           dataType : 'json',
  //           headers: csrf,
  //           success: function(response){
  //              form.find('input[name=permanent]').val(response.local_permanent);
  //              form.find('input[name=probationary]').val(response.local_probationary);
  //              form.find('input[name=contractual]').val(response.local_contractual);
  //              form.find('input[name=project_based]').val(response.local_project_based);
  //              form.find('input[name=seasonal]').val(response.local_seasonal);
  //              form.find('input[name=jo]').val(response.local_jo);
  //              form.find('input[name=mgt]').val(response.local_mgt);

  //           },
  //           error: function(xhr) 
  //           { // if error occured

  //             alert('error');
             
  //           },

  //   })

  // }

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

