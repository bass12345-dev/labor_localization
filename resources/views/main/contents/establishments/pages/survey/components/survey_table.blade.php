
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="border-bottom title-part-padding">
            <div class="col-sm-3 float-start">
               <h3>1st Valley Bank Inc.</h3>
            </div>
              
               
               <div class="col-sm-3 float-end">
               <form>
                    <div class="input-group">
                     
                    <select class="form-select">
                     <option>2023</option>
                     <option>2024</option>
                     <option>2025</option>
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
                  <div class="col-9">
                     @include('main.contents.establishments.pages.survey.components.local')
                  </div>
                  <div class="col-3">  
                     
                     <div id="campaign" class="mt-2"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-9">
                  @include('main.contents.establishments.pages.survey.components.outside')
                  </div>
                  <div class="col-3">
                     <div id="campaign1" ></div>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
   </div>
</div>
</div>