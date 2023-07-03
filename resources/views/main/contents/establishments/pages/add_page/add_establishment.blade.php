@extends('main.master')
@section('title',  $title)
@section('content')
@include('main.contents.establishments.pages.add_page.components.breadcrumb')
@include('main.contents.establishments.pages.add_page.components.form')  
@endsection

@section('script')
<script>


$('#add_establishment_form').on('submit', function(e){
    e.preventDefault();

   
    $.ajax({
            type: "POST",
            url: base_url + '/store-establishment',
            data: $(this).serialize(),
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(data)
            {         
               var message_alert = '<div class="alert '+data.c+' alert-dismissible fade show " role="alert" ><div class="d-flex align-items-center"><i data-feather="check" class="fill-white feather-sm me-2"></i>'+data.message+'</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
               if(data.response){
                  $('.alert-message').html(message_alert);
                  $('#add_establishment_form')[0].reset();
               }else {
                  $('.alert-message').html(message_alert);
               }
             
            },
            error: function(xhr) 
            { // if error occured
               $('.alert-message').html('<div class="alert alert-danger alert-dismissible fade show " role="alert" ><div class="d-flex align-items-center"><i data-feather="check" class="fill-white feather-sm me-2"></i>Something Wrong</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                                   
            },


         });
   

});
</script>
@endsection