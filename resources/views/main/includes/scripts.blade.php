    <script>
        var base_url = '{{ url('') }}';
        var asset_url = '{{ asset('') }}';

  
        
    </script>
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=" {{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }} "></script>
    <!-- apps -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src=" {{ asset('assets/js/app.init.js') }} "></script>
    <script src=" {{ asset('assets/js/app-style-switcher.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=" {{ asset('assets/vendor/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-sparkline/jquery.sparkline.min.js') }} "></script>
    <!--Wave Effects -->
    <script src=" {{ asset('assets/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/js/sidebarmenu.js') }} "></script>
    <!--Custom JavaScript -->
    <script src=" {{ asset('assets/js/feather.min.js') }} "></script>
    <script src=" {{ asset('assets/js/custom.min.js') }} "></script>
    <!--This page JavaScript -->
    <script src=" {{ asset('assets/vendor/extra-libs/jvectormap/jquery-jvectormap-2.0.2.min.js') }} "></script>
    <script src=" {{ asset('assets/vendor/extra-libs/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src=" {{ asset('assets/vendor/apexcharts/dist/apexcharts.min.js') }} "></script>
    <script src="{{ asset('assets/js/pages/dashboards/dashboard1.js') }} "></script>

    <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/datatables/js/custom-datatable.js') }} "></script>

    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

    <script src="{{ asset('assets/vendor/toastr/toastr-init.js') }} "></script>
    <script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.min.js') }} "></script>
    
    <script src="{{ asset('assets/js/overly.js') }} "></script>
    <!-- <script src="{{ asset('assets/vendor/datatables/js/datatable-advanced.init.js') }}"></script> -->

    <script src="{{ asset('assets/js/validation.js') }}"></script>

    <script type="text/javascript">
        function _before(){

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
        }

        let csrf = {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')};


        function toast_error_alert(message){

            toastr.error("",
                        message,
                        { showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 });
        }
     

        function toast_success_alert(message){

             toastr.success("",
                        message,
                        { showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 });

        }

        



        function _ajax_post(url,form,e,type){
                    e.preventDefault();

                    $.ajax({ 
                        type: "POST",
                        url: base_url + url,
                        data: $(form).serialize(),
                        dataType: 'json',
                        headers: csrf,
                        beforeSend : function() {
                            
                            _before(); 
                             $('button[type=submit]').prop('disabled', true);                                 
                          
                        },
                        success: function(data)
                        {         
                           
                           if(data.response){

                                toast_success_alert(data.message);
                              
                           }else {
                            
                                toast_error_alert(data.message);
                               
                           }
                           $('button[type=submit]').prop('disabled', false);
                           JsLoadingOverlay.hide();
                        },
                        error: function(xhr) 
                        { // if error occured

                          alert('error');
                          JsLoadingOverlay.hide();                 
                        },


                     });
        }
    </script>


    


       