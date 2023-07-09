<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Labor Localization" />
    <meta name="description" content="..." />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title }}</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin/" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png" />
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" />
    
</head>

<body>
    <div class="main-wrapper">

        @include('main.includes.components.pre_loader')
        
        <div class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        " style="
          background: url({{asset('assets/images/back.svg')}})
            no-repeat center center;
          background-size: cover;
         
        ">
            <div class="auth-box p-4  bg-white rounded"  style="height: 350px;width: 600px; " >
                <div id="loginform">
                    <div class="logo">
                        <h3 class="box-title mb-3 text-center">Sign In</h3>
                    </div>
                    <div class="alert-message"></div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3 form-material" id="loginform" >
                                <div class="form-group mb-3">
                                    <div class="">
                                        <input class="form-control" type="text" name="username"  placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="">
                                        <input class="form-control" type="password" name="password"  placeholder="Password" />
                                    </div>
                                </div>
                                
                  <div class="form-group text-center mt-4 mb-3">
                    <div class="col-xs-12">
                      <button
                        class="
                          btn btn-info
                          d-block
                          w-100
                          waves-effect waves-light
                        "
                        type="submit"
                      >
                        Log In
                      </button>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-flex">
                      <div class="checkbox checkbox-info pt-0">
                        <input
                          id="checkbox-signup"
                          type="checkbox"
                          class="material-inputs chk-col-indigo"
                        />
                        <label for="checkbox-signup"> Remember me </label>
                      </div>
                     
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <script>
        var base_url = '{{ url('') }}';
        
    </script>
    
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/js/overly.js') }} "></script>
    <script>
      $(".preloader").fadeOut();
     
    $('#loginform').on('submit', function (e){
      e.preventDefault();

      var username = $('input[name=username]').val();
      var password = $('input[name=password]').val();

      console.log(password)


      $.ajax({
            type: "POST",
            url: base_url + '/verify-user',
            data: {
              username : username,
              password : password
            },
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend : function() {
                                                
               $('button[type=submit]').prop('disabled', true);
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
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(data)
            {         
               var message_alert = '<div class="alert '+data.c+' alert-dismissible fade show " role="alert" ><div class="d-flex align-items-center"><i data-feather="check" class="fill-white feather-sm me-2"></i>'+data.message+'</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
               if(data.response){
                  $('.alert-message').html(message_alert);
                  // window.location.href = '{{url("/dashboard")}}';
               }else {
                  $('.alert-message').html(message_alert);
               }
               $('button[type=submit]').prop('disabled', false);
               JsLoadingOverlay.hide();
             
            },
            error: function(xhr) 
            { // if error occured
               $('.alert-message').html('<div class="alert alert-danger alert-dismissible fade show " role="alert" ><div class="d-flex align-items-center"><i data-feather="check" class="fill-white feather-sm me-2"></i>Something Wrong</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
               JsLoadingOverlay.hide();                 
            },

            
         });


      // 
    });



    </script>
  </body>
</html>