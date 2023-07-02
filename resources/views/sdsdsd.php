<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body border-bottom">
                  <h4 class="card-title">Project Assigning</h4>
                  <h6 class="card-subtitle mb-0">
                    This is the basic horizontal form with labels on left and
                    form controls on right in one line. To use add class
                    <mark><code>form-horizontal</code></mark> to the form tag
                    and give class <mark><code>row</code></mark> with mb-3.
                  </h6>
                </div>
                <form class="form-horizontal">
                  <div class="card-body">
                    <h4 class="card-title">Personal Info</h4>
                    <div class="mb-3 row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >First Name</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          placeholder="First Name Here"
                        />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Last Name</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="lname"
                          placeholder="Last Name Here"
                        />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label
                        for="email1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Email</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="email"
                          class="form-control"
                          id="email1"
                          placeholder="Email Here"
                        />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Contact No</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="cono1"
                          placeholder="Contact No Here"
                        />
                      </div>
                    </div>
                  </div>
                  <hr />
                  <div class="card-body">
                    <h4 class="card-title">Requirements</h4>
                    <div class="mb-3 row">
                      <label
                        for="com1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Company</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="com1"
                          placeholder="Company Name Here"
                        />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label
                        class="col-sm-3 text-end control-label col-form-label"
                        >Interested In</label
                      >
                      <div class="col-sm-9">
                        <select class="form-select">
                          <option>Choose Your Option</option>
                          <option>Desiging</option>
                          <option>Development</option>
                          <option>Videography</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label
                        class="col-sm-3 text-end control-label col-form-label"
                        >Budget</label
                      >
                      <div class="col-sm-9">
                        <select class="form-select">
                          <option>Choose Your Option</option>
                          <option>Less then $5000</option>
                          <option>$5000 - $10000</option>
                          <option>$10000 - $20000</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label
                        class="col-sm-3 text-end control-label col-form-label"
                        >Select File</label
                      >
                      <div class="col-sm-9">
                        <div class="input-group mb-3">
                          <span class="input-group-text">Upload</span>

                          <div class="custom-file">
                            <input
                              type="file"
                              class="form-control"
                              id="inputGroupFile01"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label
                        for="abpro"
                        class="col-sm-3 text-end control-label col-form-label"
                        >About Project</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="abpro"
                          placeholder="About Project Here"
                        />
                      </div>
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
                </form>
              </div>
            </div>
          </div>
          <!-- End Row -->