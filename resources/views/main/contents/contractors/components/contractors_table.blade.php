
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="border-bottom title-part-padding">
               <!-- <button class="btn btn-primary float-end "  data-bs-toggle="modal"
                  data-bs-target="#samedata-modal"
                  data-bs-whatever="@mdo">Add</button> -->
               <a href="{{ url('/contractors/add')}}" class="btn btn-primary float-end"  >Add</a>
               <button class="btn btn-danger float-end delete-multi-items" style="margin-right: 5px;"  >Delete</button>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table
                     id="contractors_table"
                     class="
                     table table-striped table-bordered
                     display
                     
                     "
                     style="width: 100%;"
                     >
                     <thead class="text-nowrap bg-info text-white">
                        <tr>
                           <th></th>
                           <th>Contractor Name</th>
                           <th>Proprietor</th>
                           <th>Address</th>
                           <th>Number</th>
                           <th>Number Owner</th>
                           <th>Telephone Number</th>
                           <th>Email</th>
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