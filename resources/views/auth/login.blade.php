<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Labor Localization" />
    <meta name="description" content="..." />
    <meta name="robots" content="noindex,nofollow" />
    <title>{{ $title }}</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin/" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png" />
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" />
    
</head>

<body>
    <div class="main-wrapper">

        @include('main.contents.pre_loader')
        
        <div class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        " style="
          background: url({{asset('assets/images/peso_w.jpg')}})
            no-repeat center center;
          background-size: cover;
         
        ">
            <div class="auth-box p-4  bg-white rounded"  style="height: 350px;width: 600px;" >
                <div id="loginform">
                    <div class="logo">
                        <h3 class="box-title mb-3 text-center">Sign In</h3>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3 form-material" id="loginform" action="index.html">
                                <div class="form-group mb-3">
                                    <div class="">
                                        <input class="form-control" type="text" required="" placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="">
                                        <input class="form-control" type="password" required="" placeholder="Password" />
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
   
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }} "></script>
    <script>
      $(".preloader").fadeOut();
     
      $("#to-recover").on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
      });



    </script>
  </body>
</html>