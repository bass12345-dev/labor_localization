
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="border-bottom title-part-padding">
              
               <a href="{{ url('/establishments/add')}}" class="btn btn-primary float-end"  >Add</a>
               <div class="col-sm-3 float-start">
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
               <div class="table-responsive">
                  <h3>Total Number of Workers From Oroquieta City</h3>
                  <table
                     id="file_export"
                     class="
                     table table-striped table-bordered
                     display
                     
                     "
                     style="width: 100%;"
                     >
                     <thead class="text-nowrap bg-info text-white">
                        <tr>
                           <th></th>
                           <th>Permanent</th>
                           <th>Probationary</th>
                           <th>Contractuals</th>
                           <th>Project-Based</th>
                           <th>Seasonal</th>
                           <th>Job Order</th>
                           <th>Mgt</th>
                           <th>Total</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                  </table>
               </div>
               <div class="table-responsive">
                  <h3>Total Number of Workers Outside Oroquieta City</h3>
                  <table
                     id="file_export"
                     class="
                     table table-striped table-bordered
                     display
                     
                     "
                     style="width: 100%;"
                     >
                     <thead class="text-nowrap bg-info text-white">
                        <tr>
                           <th></th>
                           <th>Permanent</th>
                           <th>Probationary</th>
                           <th>Contractuals</th>
                           <th>Project-Based</th>
                           <th>Seasonal</th>
                           <th>Job Order</th>
                           <th>Mgt</th>
                           <th>Total</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>