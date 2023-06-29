<div class="col-md-6 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Varying Modal content</h4>
                </div>
                <div class="card-body">
                  <!-- sample modal content -->
                  <div class="button-group">
                    <button
                      type="button"
                      class="
                        btn btn-lg
                        px-4
                        fs-4
                        font-weight-medium
                        btn-light-primary
                        text-primary
                      "
                      data-bs-toggle="modal"
                      data-bs-target="#samedata-modal"
                      data-bs-whatever="@mdo"
                    >
                      Open modal for @mdo
                    </button>

                    <button
                      type="button"
                      class="
                        btn btn-lg
                        px-4
                        fs-4
                        font-weight-medium
                        btn-light-success
                        text-success
                      "
                      data-bs-toggle="modal"
                      data-bs-target="#samedata-modal"
                      data-bs-whatever="@fat"
                    >
                      Open modal for @fat
                    </button>

                    <button
                      type="button"
                      class="
                        btn btn-lg
                        px-4
                        fs-4
                        font-weight-medium
                        btn-light-warning
                        text-warning
                      "
                      data-bs-toggle="modal"
                      data-bs-target="#samedata-modal"
                      data-bs-whatever="@getbootstrap"
                    >
                      Open modal for @getbootstrap
                    </button>
                  </div>
                  <div
                    class="modal fade"
                    id="samedata-modal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel1"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="exampleModalLabel1">
                            New message
                          </h4>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="mb-3">
                              <label for="recipient-name" class="control-label"
                                >Recipient:</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="recipient-name1"
                              />
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="control-label"
                                >Message:</label
                              >
                              <textarea
                                class="form-control"
                                id="message-text1"
                              ></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="
                              btn btn-light-danger
                              text-danger
                              font-weight-medium
                            "
                            data-bs-dismiss="modal"
                          >
                            Close
                          </button>
                          <button type="button" class="btn btn-success">
                            Send message
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.modal -->
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Custom Modal</h4>
                </div>
                <div class="card-body">
                  <div class="button-group">
                    <!-- Signup modal content -->
                    <div
                      id="signup-modal"
                      class="modal fade"
                      tabindex="-1"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="text-center mt-2 mb-4">
                              <a href="index.html" class="text-success">
                                <span
                                  ><img
                                    class="me-2"
                                    src="../../assets/images/logo-icon.png"
                                    alt="" /><img
                                    src="../../assets/images/logo-text.png"
                                    alt=""
                                    height="18"
                                /></span>
                              </a>
                            </div>

                            <form class="ps-3 pe-3" action="#">
                              <div class="mb-3">
                                <label for="username">Name</label>
                                <input
                                  class="form-control"
                                  type="email"
                                  id="username"
                                  required=""
                                  placeholder="Michael Zenaty"
                                />
                              </div>

                              <div class="mb-3">
                                <label for="emailaddress">Email address</label>
                                <input
                                  class="form-control"
                                  type="email"
                                  id="emailaddress"
                                  required=""
                                  placeholder="john@deo.com"
                                />
                              </div>

                              <div class="mb-3">
                                <label for="password">Password</label>
                                <input
                                  class="form-control"
                                  type="password"
                                  required=""
                                  id="password"
                                  placeholder="Enter your password"
                                />
                              </div>

                              <div class="mb-3">
                                <div class="form-check">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="customCheck1"
                                  />
                                  <label
                                    class="form-check-label"
                                    for="customCheck1"
                                    >I accept
                                    <a href="#">Terms and Conditions</a></label
                                  >
                                </div>
                              </div>

                              <div class="mb-3 text-center">
                                <button
                                  class="
                                    btn btn-light-info
                                    text-info
                                    font-weight-medium
                                  "
                                  type="submit"
                                >
                                  Sign Up Free
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- Custom width modal -->
                    <button
                      type="button"
                      class="
                        btn btn-light-primary
                        text-primary
                        btn-lg
                        px-4
                        fs-4
                        font-weight-medium
                      "
                      data-bs-toggle="modal"
                      data-bs-target="#signup-modal"
                    >
                      <i
                        data-feather="lock"
                        class="
                          fill-white
                          m-auto
                          feather-sm
                          text-center
                          d-block
                          text-center
                        "
                      ></i>
                      Sign Up Modal
                    </button>
                    <!-- SignIn modal content -->
                    <div
                      id="login-modal"
                      class="modal fade"
                      tabindex="-1"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="text-center mt-2 mb-4">
                              <a href="index.html" class="text-success">
                                <span
                                  ><img
                                    class="me-2"
                                    src="../../assets/images/logo-icon.png"
                                    alt="" /><img
                                    src="../../assets/images/logo-text.png"
                                    alt=""
                                    height="18"
                                /></span>
                              </a>
                            </div>

                            <form action="#" class="ps-3 pe-3">
                              <div class="mb-3">
                                <label for="emailaddress1">Email address</label>
                                <input
                                  class="form-control"
                                  type="email"
                                  id="emailaddress1"
                                  required=""
                                  placeholder="john@deo.com"
                                />
                              </div>

                              <div class="mb-3">
                                <label for="password1">Password</label>
                                <input
                                  class="form-control"
                                  type="password"
                                  required=""
                                  id="password1"
                                  placeholder="Enter your password"
                                />
                              </div>

                              <div class="mb-3">
                                <div class="form-check">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="customCheck2"
                                  />
                                  <label
                                    class="form-check-label"
                                    for="customCheck2"
                                    >Remember me</label
                                  >
                                </div>
                              </div>

                              <div class="mb-3 text-center">
                                <button
                                  class="
                                    btn btn-rounded btn-light-info
                                    text-info
                                    font-weight-medium
                                  "
                                  type="submit"
                                >
                                  Sign In
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- Full width modal -->
                    <button
                      type="button"
                      class="
                        btn btn-light-warning
                        text-warning
                        btn-lg
                        px-4
                        fs-4
                        font-weight-medium
                      "
                      data-bs-toggle="modal"
                      data-bs-target="#login-modal"
                    >
                      <i
                        data-feather="log-in"
                        class="
                          fill-white
                          m-auto
                          feather-sm
                          text-center
                          d-block
                          text-center
                        "
                      ></i>
                      Log in Modal
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Fullscreen Modal</h4>
                </div>
                <div class="card-body">
                  <div class="button-group">
                    <!-- ------------------------------------------ -->
                    <!-- Fullscreen -->
                    <!-- ------------------------------------------ -->
                    <button
                      class="
                        btn btn-light-primary
                        text-primary
                        btn-lg
                        px-4
                        fs-4
                        font-weight-medium
                      "
                      data-bs-toggle="modal"
                      data-bs-target="#bs-fullscreen"
                    >
                      Fullscreen Modal
                    </button>
                    <div
                      class="modal fade"
                      id="bs-fullscreen"
                      tabindex="-1"
                      aria-labelledby="bs-example-modal-lg"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5
                              class="modal-title h4"
                              id="exampleModalFullscreenLabel"
                            >
                              Full screen modal
                            </h5>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <p>
                              Cras mattis consectetur purus sit amet fermentum.
                              Cras justo odio, dapibus ac facilisis in, egestas
                              eget quam. Morbi leo risus, porta ac consectetur
                              ac, vestibulum at eros.
                            </p>
                            <p>
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Vivamus sagittis lacus vel
                              augue laoreet rutrum faucibus dolor auctor.
                            </p>
                            <p>
                              Aenean lacinia bibendum nulla sed consectetur.
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Donec sed odio dui. Donec
                              ullamcorper nulla non metus auctor fringilla.
                            </p>
                            <p>
                              Cras mattis consectetur purus sit amet fermentum.
                              Cras justo odio, dapibus ac facilisis in, egestas
                              eget quam. Morbi leo risus, porta ac consectetur
                              ac, vestibulum at eros.
                            </p>
                            <p>
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Vivamus sagittis lacus vel
                              augue laoreet rutrum faucibus dolor auctor.
                            </p>
                            <p>
                              Aenean lacinia bibendum nulla sed consectetur.
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Donec sed odio dui. Donec
                              ullamcorper nulla non metus auctor fringilla.
                            </p>
                            <p>
                              Cras mattis consectetur purus sit amet fermentum.
                              Cras justo odio, dapibus ac facilisis in, egestas
                              eget quam. Morbi leo risus, porta ac consectetur
                              ac, vestibulum at eros.
                            </p>
                            <p>
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Vivamus sagittis lacus vel
                              augue laoreet rutrum faucibus dolor auctor.
                            </p>
                            <p>
                              Aenean lacinia bibendum nulla sed consectetur.
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Donec sed odio dui. Donec
                              ullamcorper nulla non metus auctor fringilla.
                            </p>
                            <p>
                              Cras mattis consectetur purus sit amet fermentum.
                              Cras justo odio, dapibus ac facilisis in, egestas
                              eget quam. Morbi leo risus, porta ac consectetur
                              ac, vestibulum at eros.
                            </p>
                            <p>
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Vivamus sagittis lacus vel
                              augue laoreet rutrum faucibus dolor auctor.
                            </p>
                            <p>
                              Aenean lacinia bibendum nulla sed consectetur.
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Donec sed odio dui. Donec
                              ullamcorper nulla non metus auctor fringilla.
                            </p>
                            <p>
                              Cras mattis consectetur purus sit amet fermentum.
                              Cras justo odio, dapibus ac facilisis in, egestas
                              eget quam. Morbi leo risus, porta ac consectetur
                              ac, vestibulum at eros.
                            </p>
                            <p>
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Vivamus sagittis lacus vel
                              augue laoreet rutrum faucibus dolor auctor.
                            </p>
                            <p>
                              Aenean lacinia bibendum nulla sed consectetur.
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Donec sed odio dui. Donec
                              ullamcorper nulla non metus auctor fringilla.
                            </p>
                            <p>
                              Cras mattis consectetur purus sit amet fermentum.
                              Cras justo odio, dapibus ac facilisis in, egestas
                              eget quam. Morbi leo risus, porta ac consectetur
                              ac, vestibulum at eros.
                            </p>
                            <p>
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Vivamus sagittis lacus vel
                              augue laoreet rutrum faucibus dolor auctor.
                            </p>
                            <p>
                              Aenean lacinia bibendum nulla sed consectetur.
                              Praesent commodo cursus magna, vel scelerisque
                              nisl consectetur et. Donec sed odio dui. Donec
                              ullamcorper nulla non metus auctor fringilla.
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button
                              type="button"
                              class="
                                btn btn-light-danger
                                text-danger
                                font-weight-medium
                              "
                              data-bs-dismiss="modal"
                            >
                              Close
                            </button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>