<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="alert-message mt-2">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
               <button type="button" class="close" data-dismiss="alert">×</button>
               {{ session('status') }}
            </div>
            @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
               <button type="button" class="close" data-dismiss="alert">×</button>
               {{ session('failed') }}
            </div>
            @endif
            </div>
            <form class="form-horizontal" method="post" action="{{ url('/store-contractor')}}" id="add_contractor_form">
               <div class="card-body">
                  <h4 class="card-title">Establishment Information</h4>
                  
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Contractor Name</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="text"
                           class="form-control"
                           name="c_name"
                           id="c_name"
                           placeholder="Contractor Name Here"
                           
                           />
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Proprietor</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="text"
                           class="form-control"
                           name="c_proprietor"
                           id="c_proprietor"
                           placeholder="Proprietor Here"
                           />
                     </div>
                  </div>
                   <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Address</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="text"
                           class="form-control"
                           name="c_address"
                           id="c_address"
                           placeholder="Address Here"
                           />
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Phone Number</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="number"
                           class="form-control"
                           name="c_contact_number"
                           id="c_contact_number"
                           placeholder="Contact Number Here"
                           />
                     </div>
                  </div>s
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Phone Number Owner</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="number"
                           class="form-control"
                           name="c_phone_owner"
                           id="c_phone_owner"
                           placeholder="Contact Number Here"
                           />
                     </div>
                  </div>
                   <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Telephone Number</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="number"
                           class="form-control"
                           name="c_telephone_number"
                           id="c_telephone_number"
                           placeholder="Contact Number Here"
                           />
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Email</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="text"
                           class="form-control"
                           name="c_email"
                           id="c_email"
                           placeholder="Email Here"
                           />
                     </div>
                  </div>
                  
                  <div class="p-3 border-top">
                     <div class="text-end">
                        <button
                           type="submit"
                           class="
                           btn btn-info
                           rounded-pill
                           px-4
                           waves-effect waves-light
                           "
                           >
                        Save
                        </button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>