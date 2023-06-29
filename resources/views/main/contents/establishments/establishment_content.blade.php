@extends('main.master')
@section('title',  $title)
@section('content')

<div class="container-fluid">
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->
          <!-- -------------------------------------------------------------- -->
          <!-- File export -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start File export
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">{{$title}}</h4>
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
                        <!-- start row -->
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                        </tr>
                        <!-- end row -->
                    
                      </tbody>
                     
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end File export
                        ---------------- -->
            </div>
          </div>
        </div>
    </div>
@endsection