@extends('main.master')
@section('title',  $title)
@section('content')

<div class="page-breadcrumb">
   <div class="row">
      <div class="col-5 align-self-center">
         <h4 class="page-title">{{ $title }}</h4>
      </div>
      <div class="col-7 align-self-center">
         <div class="d-flex align-items-center justify-content-end">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                     <a href="{{ url('/establishments')}}">Establishments</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                     add
                  </li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            
            <form class="form-horizontal" id="add_establishment_form">
               <div class="card-body">
                  <h4 class="card-title">Establishment Information</h4>
                  <div
                      class="
                        alert alert-primary
                        alert-dismissible
                        fade
                        show
                      "
                      role="alert"
                    >
                      <div
                        class="
                          d-flex
                          align-items-center
                        "
                      >
                        <i
                          data-feather="check"
                          class="fill-white feather-sm me-2"
                        ></i>
                        Added Succesfully
                      </div>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="mb-3 row">
                     <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Establishment Code</label
                        >
                        <div class="col-sm-9">
                            <input
                            type="text"
                            class="form-control"
                            name="es_code"
                            id="es_code"
                            placeholder="Establishment Code Here"
                            required=""
                            />
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
                        <button
                           type="submit"
                           class="
                           btn btn-dark
                           rounded-pill
                           px-4
                           waves-effect waves-light
                           "
                           >
                        Cancel
                        </button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
                
@endsection

@section('script')
<script>

$('#add_establishment_form').on('submit', function(e){
    e.preventDefault();


    $.ajax({
            type: "POST",
            url: base_url + 'api/register',
            data:  $("#add_establishment_form").serialize(),
            cache: false,
            dataType: 'json',
            success: function(data)
            {            
                             
            },
            error: function(xhr) 
            { // if error occured
               alert("Error occured.please try again");
                                   
            },


         });
   

});
</script>
@endsection