@extends('main.no_sidebar_master')
@section('title',  $title)
@section('content')
@include('main.contents.establishments.pages.survey.components.breadcrumb')
@include('main.contents.establishments.pages.survey.components.survey_table')
@endsection

@section('script')
<script>
 $("#local_table").DataTable({
    fixedColumns: true,
  fixedHeader: true,
  scrollX: true,
  "searching": false,
  "lengthChange": false,
  "info": false,
  "bPaginate": false, 
  "bFilter": false 
  
 });
 $("#outside_table").DataTable({
    fixedColumns: true,
  fixedHeader: true,
  scrollX: true,
  "searching": false,
  "lengthChange": false,
  "info": false,
  "bPaginate": false, 
  "bFilter": false 
 });




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



  $('#update_local_survey').on('submit', function(e) {
    e.preventDefault();

        $.ajax({
            type: "POST",
            url: base_url + '/store-survey-local',
            data: $(this).serialize(),
            dataType: 'json',
            headers: csrf,
            beforeSend : function() {
                
                _before(); 
                 $('button[type=submit]').prop('disabled', true);                                 
              
            },
            success: function(data)
            {         
               
               if(data.response){
                   toastr.success("",
                                  data.message,
                                { showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 });
                  $('#update_local_survey')[0].reset();
               }else {
                
                  toastr.error("",
                                  data.message,
                                { showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 });
               }
               $('button[type=submit]').prop('disabled', false);
               JsLoadingOverlay.hide();

               const Survey = new SurveyData($('input[name=es_id]').val(),$('input[name=type]').val(),$('input[name=year]').val());
               Survey.local_data();
             
            },
            error: function(xhr) 
            { // if error occured

              alert('error');
              JsLoadingOverlay.hide();                 
            },


         });
  });


class SurveyData{

  constructor(es_id,type,year){
    this.es_id = es_id;
    this.type = type;
    this.year = year;
  }


  local_data(){

    $.ajax({

            type : 'POST',
            url   : base_url + '/get-survey-data',
            data : { es_id : this.es_id, type : this.type, year : this.year},
            dataType : 'json',
            headers: csrf,
            success: function(response){
               $('input[name=permanent]').val(response.local_permanent);
               $('input[name=probationary]').val(response.local_probationary);
               $('input[name=contractual]').val(response.local_contractual);
               $('input[name=project_based]').val(response.local_project_based);
               $('input[name=seasonal]').val(response.local_seasonal);
               $('input[name=jo]').val(response.local_jo);
               $('input[name=mgt]').val(response.local_mgt);

            },
            error: function(xhr) 
            { // if error occured

              alert('error');
             
            },

    })

  }

}



</script>
@endsection

