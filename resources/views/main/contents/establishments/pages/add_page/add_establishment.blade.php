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
            <form class="form-horizontal">
               <div class="card-body">
                  <h4 class="card-title">Establishment Information</h4>
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
                            id="cono1"
                            placeholder="Establishment Code Here"
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
                            id="cono1"
                            placeholder="Establishment Name Here"
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
                            id="cono1"
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
                            type="text"
                            class="form-control"
                            id="cono1"
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
                            id="cono1"
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
                            id="cono1"
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
                            id="cono1"
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