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
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Establisments
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
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                       
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                        </tr>
                       
                      </tbody>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

<!-- @include('main.contents.establishments.modals.add_establishment_modal') -->
@endsection