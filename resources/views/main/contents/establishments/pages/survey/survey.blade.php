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
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend : function() {
                
                _before();                                  
              
            },
            success: function(data)
            {         
               // var message_alert = '<div class="alert '+data.c+' alert-dismissible fade show " role="alert" ><div class="d-flex align-items-center"><i data-feather="check" class="fill-white feather-sm me-2"></i>'+data.message+'</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
               if(data.response){
                alert('success');
                  // $('.alert-message').html(message_alert);
                  // $('#add_establishment_form')[0].reset();
               }else {
                alert('error');
                  // $('.alert-message').html(message_alert);
               }
               $('button[type=submit]').prop('disabled', false);
               JsLoadingOverlay.hide();
             
            },
            error: function(xhr) 
            { // if error occured

              alert('error');
               // $('.alert-message').html('<div class="alert alert-danger alert-dismissible fade show " role="alert" ><div class="d-flex align-items-center"><i data-feather="check" class="fill-white feather-sm me-2"></i>Something Wrong</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
               JsLoadingOverlay.hide();                 
            },


         });

  })
</script>
@endsection

