
    
                <form class="row mt-3 border p-2 m-0" id="update_outside_survey" method="post" >
                  <input type="hidden" name="es_id" value="{{ $_GET['es_id'] }}">
                  <input type="hidden" name="year" value="{{ $_GET['year'] }}">
                  <input type="hidden" name="type" value="outside">
                  <div class="col">
                    <input type="number" class="form-control" name="permanent" value="{{ $survey_data->outside_permanent}}" placeholder="Permanent" >
                    <small><span class="text-danger">*</span>Permanent</small>
                  </div>
                  <div class="col">
                    <input type="number" class="form-control" name="probationary" value="{{ $survey_data->outside_probationary}}" placeholder="Probationary" >
                     <small><span class="text-danger">*</span>Probationary</small>
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="contractual" value="{{ $survey_data->outside_contractual}}" placeholder="Contractuals" >
                     <small><span class="text-danger">*</span>Contractual</small>
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="project_based" value="{{ $survey_data->outside_project_based}}" placeholder="Project Based" >
                     <small><span class="text-danger">*</span>Project Based</small>
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="seasonal" value="{{ $survey_data->outside_seasonal}}" placeholder="Seasonal" >
                     <small><span class="text-danger">*</span>Seasonal</small>
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="jo" value="{{ $survey_data->outside_jo}}" placeholder="Job Order" >
                     <small><span class="text-danger">*</span>Job Order</small>
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="mgt" value="{{ $survey_data->outside_mgt}}" placeholder="Mgt" >
                     <small><span class="text-danger">*</span>Mgt</small>
                  </div>
                     <div class="col">
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <button type="button" class="btn btn-danger" id="close_outside_update">Close</button>
                  </div>     
                  </form> 
  