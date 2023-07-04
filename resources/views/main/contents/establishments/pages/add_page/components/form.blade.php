<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <form class="form-horizontal" id="add_establishment_form">
               <div class="card-body">
                  <h4 class="card-title">Establishment Information</h4>
                  <div class="alert-message"></div>
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Establishment Code</label
                        >
                     <div class="col-sm-9">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">ES - </span>
                        </div>
                        <input type="number" class="form-control"  name="es_code"
                           id="es_code"
                           placeholder="Establishment Code Here"
                           required="">
                     </div>
                        <!-- <input
                           type="text"
                           class="form-control"
                           name="es_code"
                           id="es_code"
                           placeholder="Establishment Code Here"
                           value="ES-"
                           required=""
                           /> -->
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Establishment Name</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="text"
                           class="form-control"
                           name="es_name"
                           id="es_name"
                           placeholder="Establishment Name Here"
                           required=""
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
                           name="es_address"
                           id="es_address"
                           placeholder="Address Here"
                           />
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Contact Number</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="number"
                           class="form-control"
                           name="es_contact"
                           id="es_contact"
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
                           name="es_email"
                           id="es_email"
                           placeholder="Email Here"
                           />
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Authorized Personnel</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="text"
                           class="form-control"
                           name="es_authorized_personnel"
                           id="es_authorized_personnel"
                           placeholder="Authorized Personnel Here"
                           />
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Position</label
                        >
                     <div class="col-sm-9">
                        <input
                           type="text"
                           class="form-control"
                           name="es_position"
                           id="es_position"
                           placeholder="Position Here"
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