
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="border-bottom title-part-padding">
            <div class="col-sm-3 float-start">
               <h3>{{ $es_name }}</h3>
            </div>
              
               
               <div class="col-sm-3 float-end">
               <form>
                    <div class="input-group">
                     
                    <select class="form-select">

                     <?php

                        

                        for ($i= $latest_year; $i <= 2040; $i++) { 

                           if ($i == $latest_year) {

                              $selected = 'selected';
                              // code...
                           }else {
                               $selected = '';
                           }

                           echo '<option '.$selected.' id="survey_year_opt"> '.$i.'</option>';
                              

                        }

                      ?>
                    <!--  <option>2023</option>
                     <option>2024</option>
                     <option>2025</option> -->
                  </select>
                      <button
                        class="btn btn-light-info text-info font-weight-medium"
                        type="button"
                      >
                        Go!
                      </button>
                    </div>
                  </form>
               </div>
              
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12">
                     @include('main.contents.establishments.pages.survey.components.local')

                  </div>
               </div>
               <div id="update_local_data" hidden="true" >
                  @include('main.contents.establishments.pages.survey.components.local_update_form')
                </div>
               <div class="row">
                  <div class="col-12">
                  @include('main.contents.establishments.pages.survey.components.outside')
                  </div>
                 <!--  <div class="col-3">
                     <div id="campaign1" ></div>
                  </div> -->
               </div>
               <div id="update_outside_data" hidden="true">
                  @include('main.contents.establishments.pages.survey.components.outside_update_form')
                </div>
              
            </div>
         </div>
      </div>
   </div>
</div>
</div>