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






  function generate_survey_report(){

    $.ajax({
      url: base_url  + '/get-survey-data',
      type: "POST",
      data : { es_id : $('#update_local_survey').find('input[name=es_id]').val(), type : $('#update_local_survey').find('input[name=type]').val(), year : $('#update_local_survey').find('input[name=year]').val() },

      headers: csrf,
      dataType: "json",
      beforeSend: function () {
        
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
      success: function (data) {

        let total_local_workers  = 0; 
        let total_outside_workers = 0;


          for (var i = 0; i < data.length; i++) {

            total_local_workers = total_local_workers + data[i].local_permanent + data[i].local_probationary + data[i].local_contractual + data[i].local_project_based + data[i].local_seasonal + data[i].local_jo + data[i].local_mgt;


         }

          for (var i = 0; i < data.length; i++) {

            total_outside_workers = total_outside_workers + data[i].outside_permanent + data[i].outside_probationary + data[i].outside_contractual + data[i].outside_project_based + data[i].outside_seasonal + data[i].outside_jo + data[i].outside_mgt;


         }

       
         JsLoadingOverlay.hide();
        $("#local_table").DataTable({


      fixedColumns: true,
      fixedHeader: true,
      scrollX: true,
      "searching": false,
      "lengthChange": false,
      "info": false,
      "bPaginate": false, 
      "bFilter": false,

     

      dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                className: 'btn btn-primary',
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


    
    'data':data,
    'columns': [
    { data: 'local_permanent' },
    { data: 'local_probationary' },
    { data: 'local_contractual' },
    { data: 'local_project_based' },
    { data: 'local_seasonal' },
    { data: 'local_jo' },
    { data: 'local_mgt' },
      { 
        data: null, 
        render: function (data, type, row) 
        { 
          return total_local_workers; 
        } 
      }, 

    ]



        });




  $("#outside_table").DataTable({


      fixedColumns: true,
      fixedHeader: true,
      scrollX: true,
      "searching": false,
      "lengthChange": false,
      "info": false,
      "bPaginate": false, 
      "bFilter": false,

     

      dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                className: 'btn btn-primary',
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


    
    'data':data,
    'columns': [
    { data: 'outside_permanent' },
    { data: 'outside_probationary' },
    { data: 'outside_contractual' },
    { data: 'outside_project_based' },
    { data: 'outside_seasonal' },
    { data: 'outside_jo' },
    { data: 'outside_mgt' },
    { 
        data: null, 
        render: function (data, type, row) 
        { 
          return total_outside_workers; 
        } 
      }, 

    ]



        });





      }

    });

  }







  $('#update_local_survey').on('submit', function(e) {

    var form  = $(this);
    var type = form.find('input[name=type]').val();
    var url   = form.attr("action");
    
    _ajax_post(url,form,e,type);
    $('#outside_table').DataTable().destroy();
    $('#local_table').DataTable().destroy();
    generate_survey_report();
    // load_survey_data(form,form.find('input[name=type]').val(),form.find('input[name=es_id]').val().form.find('input[name=year]').val());
  });

  $('#update_outside_survey').on('submit', function(e) {

    var form  = $(this);
    var type = form.find('input[name=type]').val();
    var url   = '/store-survey';  
    
    _ajax_post(url,form,e,type);
    $('#local_table').DataTable().destroy();
    $('#outside_table').DataTable().destroy();
    generate_survey_report();

    // load_survey_data(form,form.find('input[name=type]').val(),form.find('input[name=es_id]').val().form.find('input[name=year]').val());
  });



    $(document).ready(function(){
    generate_survey_report();
  })
</script>
@endsection

