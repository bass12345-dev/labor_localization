    
                <form class="row mt-3 border p-2 m-0" id="update_local_survey" method="post">
                  <input type="text" name="es_id" value="{{ $_GET['es_id'] }}">
                  <div class="col">
                    <input type="number" class="form-control" name="permanent" value="{{ $survey_data->local_permanent}}" placeholder="Permanent" >
                  </div>
                  <div class="col">
                    <input type="number" class="form-control" name="probationary" value="{{ $survey_data->local_probationary}}" placeholder="Probationary" >
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="contractual" value="{{ $survey_data->local_contractual}}" placeholder="Contractuals" >
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="project_based" value="{{ $survey_data->local_project_based}}" placeholder="Project Based" >
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="seasonal" value="{{ $survey_data->local_seasonal}}" placeholder="Seasonal" >
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="jo" value="{{ $survey_data->local_jo}}" placeholder="Job Order" >
                  </div>
                   <div class="col">
                    <input type="number" class="form-control" name="mgt" value="{{ $survey_data->local_mgt}}" placeholder="Mgt" >
                  </div>
                     <div class="col">
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <button type="button" class="btn btn-danger" id="close_local_update">Close</button>
                  </div>     
                  </form> 
  