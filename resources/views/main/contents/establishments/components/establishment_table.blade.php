
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="border-bottom title-part-padding">
               <!-- <button class="btn btn-primary float-end "  data-bs-toggle="modal"
                  data-bs-target="#samedata-modal"
                  data-bs-whatever="@mdo">Add</button> -->
               <a href="{{ url('/establishments/add')}}" class="btn btn-primary float-end "  >Add</a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table
                     id="file_export"
                     class="
                     table table-striped table-bordered
                     display
                     text-nowrap
                     "
                     >
                     <thead>
                        <tr>
                           <th>Establishment Code</th>
                           <th>Establishment Name</th>
                           
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