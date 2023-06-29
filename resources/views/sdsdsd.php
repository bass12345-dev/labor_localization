
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, nice admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, "
    />
    <meta
      name="description"
      content="Nice is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Nice Template by WrapPixel</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/niceadmin/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../../assets/images/favicon.png"
    />
    <!-- This page plugin CSS -->
    <link rel="stylesheet" href="../../dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <svg
        class="tea lds-ripple"
        width="37"
        height="48"
        viewbox="0 0 37 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
          stroke="#233242"
          stroke-width="2"
        ></path>
        <path
          d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
          stroke="#233242"
          stroke-width="2"
        ></path>
        <path
          id="teabag"
          fill="#233242"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
        ></path>
        <path
          id="steamL"
          d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke="#233242"
        ></path>
        <path
          id="steamR"
          d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
          stroke="#233242"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
            >
              <i class="ri-close-line fs-6 ri-menu-2-line"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
              <a href="index.html" class="logo">
                <!-- Logo icon -->
                <b class="logo-icon">
                  <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                  <!-- Dark Logo icon -->
                  <img
                    src="../../assets/images/logo-icon.png"
                    alt="homepage"
                    class="dark-logo"
                  />
                  <!-- Light Logo icon -->
                  <img
                    src="../../assets/images/logo-light-icon.png"
                    alt="homepage"
                    class="light-logo"
                  />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                  <!-- dark Logo text -->
                  <img
                    src="../../assets/images/logo-text.png"
                    alt="homepage"
                    class="dark-logo"
                  />
                  <!-- Light Logo text -->
                  <img
                    src="../../assets/images/logo-light-text.png"
                    class="light-logo"
                    alt="homepage"
                  />
                </span>
              </a>
              <a
                class="sidebartoggler d-none d-md-block"
                href="javascript:void(0)"
                data-sidebartype="mini-sidebar"
              >
                <i class="mdi mdi-toggle-switch mdi-toggle-switch-off fs-6"></i>
              </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i data-feather="more-horizontal" class="feather-sm"></i>
            </a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
              <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li> -->
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                >
                  <div class="d-flex align-items-center">
                    <i data-feather="search" class="feather-sm me-1"></i>
                    <div class="ms-1 d-none d-sm-block">
                      <span>Search</span>
                    </div>
                  </div>
                </a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn">
                    <i data-feather="x" class="feather-sm"></i>
                  </a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href=""
                  id="2"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="mail"></i>
                </a>
                <div
                  class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    dropdown-menu-animate-up
                  "
                  aria-labelledby="2"
                >
                  <span class="with-arrow">
                    <span class="bg-danger"></span>
                  </span>
                  <ul class="list-style-none">
                    <li>
                      <div class="drop-title text-white bg-danger">
                        <h4 class="mb-0 m-t-5">5 New</h4>
                        <span class="fw-light">Messages</span>
                      </div>
                    </li>
                    <li>
                      <div
                        class="message-center message-body position-relative"
                        style="height: 230px"
                      >
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/1.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle online"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              "
                            >
                              Pavan kumar
                            </h5>
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                              "
                              >Just see the my admin!</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:30 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/2.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle busy"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              "
                            >
                              Sonu Nigam
                            </h5>
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              "
                              >I've sung a song! See you at</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:10 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/3.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle away"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              "
                            >
                              Arijit Sinh
                            </h5>
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              "
                              >I am a singer!</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:08 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/4.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle offline"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              "
                            >
                              Pavan kumar
                            </h5>
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              "
                              >Just see the my admin!</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:02 AM</span
                            >
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a
                        class="nav-link text-center link text-dark"
                        href="javascript:void(0);"
                      >
                        <b>See all e-Mails</b>
                        <i data-feather="chevron-right" class="feather-sm"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown border-end">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    waves-effect waves-dark
                    position-relative
                  "
                  href=""
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="bell"></i>
                  <span class="badge rounded-pill bg-info noti">3</span>
                </a>
                <div
                  class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    dropdown-menu-animate-up
                  "
                >
                  <span class="with-arrow">
                    <span class="bg-primary"></span>
                  </span>
                  <ul class="list-style-none">
                    <li>
                      <div class="drop-title bg-primary text-white">
                        <h4 class="mb-0 m-t-5">4 New</h4>
                        <span class="fw-light">Notifications</span>
                      </div>
                    </li>
                    <li>
                      <div
                        class="message-center notifications position-relative"
                        style="height: 230px"
                      >
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          "
                        >
                          <span
                            class="btn btn-light-danger text-danger btn-circle"
                          >
                            <i
                              data-feather="link"
                              class="feather-sm fill-white"
                            ></i>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              "
                            >
                              Luanch Admin
                            </h5>
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              "
                              >Just see the my new admin!</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:30 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          "
                        >
                          <span
                            class="
                              btn btn-light-success
                              text-success
                              btn-circle
                            "
                          >
                            <i
                              data-feather="calendar"
                              class="feather-sm fill-white"
                            ></i>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              "
                            >
                              Event today
                            </h5>
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              "
                              >Just a reminder that you have event</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:10 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          "
                        >
                          <span class="btn btn-light-info text-info btn-circle">
                            <i
                              data-feather="settings"
                              class="feather-sm fill-white"
                            ></i>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              "
                            >
                              Settings
                            </h5>
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              "
                              >You can customize this</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:08 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          "
                        >
                          <span
                            class="
                              btn btn-light-primary
                              text-primary
                              btn-circle
                            "
                          >
                            <i
                              data-feather="users"
                              class="feather-sm fill-white"
                            ></i>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              "
                            >
                              Pavan kumar
                            </h5>
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              "
                              >Just see the my admin!</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:02 AM</span
                            >
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a
                        class="nav-link text-center mb-1 text-dark"
                        href="javascript:void(0);"
                      >
                        <strong>Check all notifications</strong>
                        <i data-feather="chevron-right" class="feather-sm"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    waves-effect waves-dark
                    pro-pic
                  "
                  href=""
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="../../assets/images/users/2.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="40"
                  />
                  <span class="ms-1 font-weight-medium d-none d-sm-inline-block"
                    >Jonathan Doe
                    <i data-feather="chevron-down" class="feather-sm"></i
                  ></span>
                </a>
                <div
                  class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  "
                >
                  <span class="with-arrow">
                    <span class="bg-primary"></span>
                  </span>
                  <div
                    class="
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-primary
                      text-white
                      mb-2
                    "
                  >
                    <div class="">
                      <img
                        src="../../assets/images/users/5.jpg"
                        alt="user"
                        class="rounded-circle"
                        width="60"
                      />
                    </div>
                    <div class="ms-2">
                      <h4 class="mb-0 text-white">Marken Doe</h4>
                      <p class="mb-0">deo@gmail.com</p>
                    </div>
                  </div>
                  <a class="dropdown-item" href="#"
                    ><i
                      data-feather="user"
                      class="feather-sm text-info me-1 ms-1"
                    ></i>
                    My Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i
                      data-feather="credit-card"
                      class="feather-sm text-info me-1 ms-1"
                    ></i>
                    My Balance</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i
                      data-feather="mail"
                      class="feather-sm text-success me-1 ms-1"
                    ></i>
                    Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"
                    ><i
                      data-feather="settings"
                      class="feather-sm text-warning me-1 ms-1"
                    ></i>
                    Account Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"
                    ><i
                      data-feather="log-out"
                      class="feather-sm text-danger me-1 ms-1"
                    ></i>
                    Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="p-2">
                    <a
                      href="#"
                      class="btn d-block w-100 btn-primary rounded-pill"
                      >View Profile</a
                    >
                  </div>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Personal</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-av-timer"></i>
                  <span class="hide-menu">Dashboard </span>
                  <span class="badge rounded-pill bg-info ms-auto mr-3">3</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="index.html" class="sidebar-link">
                      <i class="mdi mdi-adjust"></i>
                      <span class="hide-menu"> Classic </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="index2.html" class="sidebar-link">
                      <i class="mdi mdi-adjust"></i>
                      <span class="hide-menu"> Analytical </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="index3.html" class="sidebar-link">
                      <i class="mdi mdi-adjust"></i>
                      <span class="hide-menu"> Modern </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-tune"></i>
                  <span class="hide-menu">Sidebar Type </span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      href="sidebar-type-minisidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-view-quilt"></i>
                      <span class="hide-menu"> Minisidebar </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="sidebar-type-iconsidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-view-parallel"></i>
                      <span class="hide-menu"> Icon Sidebar </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="sidebar-type-overlaysidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-view-day"></i>
                      <span class="hide-menu"> Overlay Sidebar </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="sidebar-type-fullsidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-view-array"></i>
                      <span class="hide-menu"> Full Sidebar </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="sidebar-type-horizontalsidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-view-module"></i>
                      <span class="hide-menu"> Horizontal Sidebar </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-crop-square"></i>
                  <span class="hide-menu">Page Layouts </span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      href="layout-inner-fixed-left-sidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-format-align-left"></i>
                      <span class="hide-menu"> Inner Fixed Left Sidebar </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="layout-inner-fixed-right-sidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-format-align-right"></i>
                      <span class="hide-menu"> Inner Fixed Right Sidebar </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="layout-inner-left-sidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-format-float-left"></i>
                      <span class="hide-menu"> Inner Left Sidebar </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="layout-inner-right-sidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-format-float-right"></i>
                      <span class="hide-menu"> Inner Right Sidebar </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="page-layout-fixed-header.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-view-quilt"></i>
                      <span class="hide-menu"> Fixed Header </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="page-layout-fixed-sidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-view-parallel"></i>
                      <span class="hide-menu"> Fixed Sidebar </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="page-layout-fixed-header-sidebar.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-view-column"></i>
                      <span class="hide-menu">
                        Fixed Header &amp; Sidebar
                      </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="page-layout-boxed-layout.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-view-carousel"></i>
                      <span class="hide-menu"> Box Layout </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-chats.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-comment-processing-outline"></i
                  ><span class="hide-menu">Chat Apps</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-todo.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-text"></i
                  ><span class="hide-menu">Todo</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-calendar.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-calendar"></i
                  ><span class="hide-menu">Calendar</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-taskboard.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-bulletin-board"></i
                  ><span class="hide-menu">Taskboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-contacts.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-box"></i
                  ><span class="hide-menu">Contact</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-notes.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-arrange-bring-forward"></i
                  ><span class="hide-menu">Notes</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-invoice.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-book"></i
                  ><span class="hide-menu">Invoice</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-inbox"></i>
                  <span class="hide-menu">Inbox </span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="inbox-email.html" class="sidebar-link">
                      <i class="mdi mdi-email"></i>
                      <span class="hide-menu"> Email </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-detail.html" class="sidebar-link">
                      <i class="mdi mdi-email-alert"></i>
                      <span class="hide-menu"> Email Detail </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-compose.html" class="sidebar-link">
                      <i class="mdi mdi-email-secure"></i>
                      <span class="hide-menu"> Email Compose </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-book-variant"></i>
                  <span class="hide-menu">Ticket </span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ticket-list.html" class="sidebar-link">
                      <i class="mdi mdi-book-multiple"></i>
                      <span class="hide-menu"> Ticket List </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ticket-detail.html" class="sidebar-link">
                      <i class="mdi mdi-book-plus"></i>
                      <span class="hide-menu"> Ticket Detail </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">UI</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="far fa-list-alt"></i>
                  <span class="hide-menu">Ui Elements </span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-accordian.html" class="sidebar-link"
                      ><i class="mdi mdi-box-shadow"></i
                      ><span class="hide-menu"> Accordian</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-badge.html" class="sidebar-link"
                      ><i class="mdi mdi-application"></i
                      ><span class="hide-menu"> Badge</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-buttons.html" class="sidebar-link">
                      <i class="mdi mdi-toggle-switch"></i>
                      <span class="hide-menu"> Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-modals.html" class="sidebar-link">
                      <i class="mdi mdi-tablet"></i>
                      <span class="hide-menu"> Modals</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-tab.html" class="sidebar-link">
                      <i class="mdi mdi-sort-variant"></i>
                      <span class="hide-menu"> Tab</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-tooltip-popover.html" class="sidebar-link">
                      <i class="mdi mdi-image-filter-vintage"></i>
                      <span class="hide-menu"> Tooltip &amp; Popover</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-notification.html" class="sidebar-link">
                      <i class="mdi mdi-message-bulleted"></i>
                      <span class="hide-menu"> Notification</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-progressbar.html" class="sidebar-link">
                      <i class="mdi mdi-poll"></i>
                      <span class="hide-menu"> Progressbar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-typography.html" class="sidebar-link">
                      <i class="mdi mdi-format-line-spacing"></i>
                      <span class="hide-menu"> Typography</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-bootstrap.html" class="sidebar-link">
                      <i class="mdi mdi-bootstrap"></i>
                      <span class="hide-menu"> Bootstrap Ui</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-breadcrumb.html" class="sidebar-link">
                      <i class="mdi mdi-equal"></i>
                      <span class="hide-menu"> Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-offcanvas.html" class="sidebar-link">
                      <i class="mdi mdi-content-copy"></i>
                      <span class="hide-menu"> Offcanvas</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-lists.html" class="sidebar-link">
                      <i class="mdi mdi-file-video"></i>
                      <span class="hide-menu"> Lists</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-grid.html" class="sidebar-link">
                      <i class="mdi mdi-view-module"></i>
                      <span class="hide-menu"> Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-carousel.html" class="sidebar-link">
                      <i class="mdi mdi-view-carousel"></i>
                      <span class="hide-menu"> Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-scrollspy.html" class="sidebar-link">
                      <i class="mdi mdi-crop-free"></i>
                      <span class="hide-menu"> Scrollspy</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-spinner.html" class="sidebar-link">
                      <i class="mdi mdi-application"></i>
                      <span class="hide-menu"> Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-toasts.html" class="sidebar-link">
                      <i class="mdi mdi-apple-safari"></i>
                      <span class="hide-menu"> Toasts</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                  <span class="hide-menu">Cards</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-cards.html" class="sidebar-link">
                      <i class="mdi mdi-layers"></i>
                      <span class="hide-menu"> Basic Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-customs.html" class="sidebar-link">
                      <i class="mdi mdi-credit-card-scan"></i>
                      <span class="hide-menu">Custom Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-weather.html" class="sidebar-link">
                      <i class="mdi mdi-weather-fog"></i>
                      <span class="hide-menu">Weather Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-draggable.html" class="sidebar-link">
                      <i class="mdi mdi-bandcamp"></i>
                      <span class="hide-menu">Draggable Cards</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-image-filter-tilt-shift"></i>
                  <span class="hide-menu">Components</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="component-sweetalert.html" class="sidebar-link">
                      <i class="mdi mdi-layers"></i>
                      <span class="hide-menu"> Sweet Alert</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="component-nestable.html" class="sidebar-link">
                      <i class="mdi mdi-credit-card-scan"></i>
                      <span class="hide-menu">Nestable</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="component-noui-slider.html" class="sidebar-link">
                      <i class="mdi mdi-weather-fog"></i>
                      <span class="hide-menu">Noui slider</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="component-rating.html" class="sidebar-link">
                      <i class="mdi mdi-bandcamp"></i>
                      <span class="hide-menu">Rating</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="component-toastr.html" class="sidebar-link">
                      <i class="mdi mdi-poll"></i>
                      <span class="hide-menu">Toastr</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-widgets"></i>
                  <span class="hide-menu">Widgets </span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="widgets-feeds.html" class="sidebar-link"
                      ><i class="mdi mdi-account-box"></i
                      ><span class="hide-menu"> Feed Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-apps.html" class="sidebar-link">
                      <i class="mdi mdi-comment-processing-outline"></i>
                      <span class="hide-menu"> Apps Widgets </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-data.html" class="sidebar-link">
                      <i class="mdi mdi-calendar"></i>
                      <span class="hide-menu"> Data Widgets </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-charts.html" class="sidebar-link">
                      <i class="mdi mdi-bulletin-board"></i>
                      <span class="hide-menu"> Charts Widgets</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-collage"></i>
                  <span class="hide-menu">Form Elements</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-inputs.html" class="sidebar-link">
                      <i class="mdi mdi-priority-low"></i>
                      <span class="hide-menu"> Forms Input</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-groups.html" class="sidebar-link">
                      <i class="mdi mdi-rounded-corner"></i>
                      <span class="hide-menu"> Input Groups</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-grid.html" class="sidebar-link">
                      <i class="mdi mdi-select-all"></i>
                      <span class="hide-menu"> Input Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-checkbox-radio.html" class="sidebar-link">
                      <i class="mdi mdi-shape-plus"></i>
                      <span class="hide-menu"> Checkboxes &amp; Radios</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-bootstrap-touchspin.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-switch"></i>
                      <span class="hide-menu"> Bootstrap Touchspin</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bootstrap-switch.html" class="sidebar-link">
                      <i class="mdi mdi-toggle-switch-off"></i>
                      <span class="hide-menu"> Bootstrap Switch</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-select2.html" class="sidebar-link">
                      <i class="mdi mdi-relative-scale"></i>
                      <span class="hide-menu"> Select2</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-dual-listbox.html" class="sidebar-link">
                      <i class="mdi mdi-tab-unselected"></i>
                      <span class="hide-menu"> Dual Listbox</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-receipt"></i>
                  <span class="hide-menu">Form Layouts</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-basic.html" class="sidebar-link">
                      <i class="mdi mdi-vector-difference-ba"></i>
                      <span class="hide-menu"> Basic Forms</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-horizontal.html" class="sidebar-link">
                      <i class="mdi mdi-file-document-box"></i>
                      <span class="hide-menu"> Form Horizontal</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-actions.html" class="sidebar-link">
                      <i class="mdi mdi-code-greater-than"></i>
                      <span class="hide-menu"> Form Actions</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-row-separator.html" class="sidebar-link">
                      <i class="mdi mdi-code-equal"></i>
                      <span class="hide-menu"> Row Separator</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bordered.html" class="sidebar-link">
                      <i class="mdi mdi-flip-to-front"></i>
                      <span class="hide-menu"> Form Bordered</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-striped-row.html" class="sidebar-link">
                      <i class="mdi mdi-content-duplicate"></i>
                      <span class="hide-menu"> Striped Rows</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-detail.html" class="sidebar-link">
                      <i class="mdi mdi-cards-outline"></i>
                      <span class="hide-menu"> Form Detail</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-code-equal"></i>
                  <span class="hide-menu">Form Addons</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-paginator.html" class="sidebar-link">
                      <i class="mdi mdi-export"></i>
                      <span class="hide-menu"> Paginator</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-img-cropper.html" class="sidebar-link">
                      <i class="mdi mdi-crop"></i>
                      <span class="hide-menu"> Image Cropper</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-dropzone.html" class="sidebar-link">
                      <i class="mdi mdi-crosshairs-gps"></i>
                      <span class="hide-menu"> Dropzone</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-mask.html" class="sidebar-link">
                      <i class="mdi mdi-box-shadow"></i>
                      <span class="hide-menu"> Form Mask</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-typeahead.html" class="sidebar-link">
                      <i class="mdi mdi-cards-variant"></i>
                      <span class="hide-menu"> Form Typehead</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-custom-switch.html" class="sidebar-link">
                      <i class="mdi mdi-toggle-switch-off"></i>
                      <span class="hide-menu"> Custom Switch</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-alert-box"></i>
                  <span class="hide-menu">Form Validation</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      href="form-bootstrap-validation.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-credit-card-scan"></i>
                      <span class="hide-menu"> Bootstrap Validation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-custom-validation.html" class="sidebar-link">
                      <i class="mdi mdi-credit-card-plus"></i>
                      <span class="hide-menu"> Custom Validation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-pencil-box-outline"></i>
                  <span class="hide-menu">Form Pickers</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-picker-colorpicker.html" class="sidebar-link">
                      <i class="mdi mdi-calendar-plus"></i>
                      <span class="hide-menu"> Form Colorpicker</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-datetimepicker.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-calendar-clock"></i>
                      <span class="hide-menu"> Form Datetimepicker</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-bootstrap-rangepicker.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-calendar-range"></i>
                      <span class="hide-menu"> Form Bootstrap Rangepicker</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-bootstrap-datepicker.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-calendar-check"></i>
                      <span class="hide-menu"> Form Bootstrap Datepicker</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-material-datepicker.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-calendar-text"></i>
                      <span class="hide-menu"> Form Material Datepicker</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-dns"></i>
                  <span class="hide-menu">Form Editor</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-editor-ckeditor.html" class="sidebar-link">
                      <i class="mdi mdi-drawing"></i>
                      <span class="hide-menu">Ck Editor</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-quill.html" class="sidebar-link">
                      <i class="mdi mdi-drupal"></i>
                      <span class="hide-menu">Quill Editor</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-summernote.html" class="sidebar-link">
                      <i class="mdi mdi-brightness-6"></i>
                      <span class="hide-menu">Summernote Editor</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-tinymce.html" class="sidebar-link">
                      <i class="mdi mdi-bowling"></i>
                      <span class="hide-menu">Tinymce Edtor</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="form-wizard.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-cube-send"></i>
                  <span class="hide-menu">Form Wizard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="form-repeater.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-creation"></i>
                  <span class="hide-menu">Form Repeater</span>
                </a>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-border-none"></i>
                  <span class="hide-menu">Bootstrap Tables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-basic.html" class="sidebar-link">
                      <i class="mdi mdi-border-all"></i>
                      <span class="hide-menu">Basic Table </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="table-dark-basic.html" class="sidebar-link">
                      <i class="mdi mdi-arrange-bring-forward"></i>
                      <span class="hide-menu">Dark Basic Table </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="table-sizing.html" class="sidebar-link">
                      <i class="mdi mdi-border-outside"></i>
                      <span class="hide-menu">Sizing Table </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="table-layout-coloured.html" class="sidebar-link">
                      <i class="mdi mdi-border-bottom"></i>
                      <span class="hide-menu">Coloured Table Layout</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-border-inside"></i>
                  <span class="hide-menu">Datatables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-datatable-basic.html" class="sidebar-link">
                      <i class="mdi mdi-border-vertical"></i>
                      <span class="hide-menu"> Basic Initialisation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="table-datatable-api.html" class="sidebar-link">
                      <i class="mdi mdi-blur-linear"></i>
                      <span class="hide-menu"> API</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="table-datatable-advanced.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-border-style"></i>
                      <span class="hide-menu"> Advanced Initialisation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-jsgrid.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-border-top"></i>
                  <span class="hide-menu">Table Jsgrid</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-responsive.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-border-style"></i>
                  <span class="hide-menu">Table Responsive</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-footable.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-tab-unselected"></i>
                  <span class="hide-menu">Table Footable</span>
                </a>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-morris.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-image-filter-tilt-shift"></i>
                  <span class="hide-menu"> Morris Chart</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-chart-js.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-svg"></i>
                  <span class="hide-menu">Chartjs</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-sparkline.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-chart-histogram"></i>
                  <span class="hide-menu">Sparkline Chart</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-chartist.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-blur"></i>
                  <span class="hide-menu">Chartist Chart</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-blur-radial"></i
                  ><span class="hide-menu">Apex Charts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-apex-line.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-line"></i>
                      <span class="hide-menu">Line Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-area.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-areaspline"></i>
                      <span class="hide-menu">Area Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-bar.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-gantt"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-pie.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-pie"></i>
                      <span class="hide-menu">Pie Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-radial.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-arc"></i>
                      <span class="hide-menu">Radial Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-radar.html" class="sidebar-link"
                      ><i class="mdi mdi-hexagon-outline"></i>
                      <span class="hide-menu">Radar Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-chemical-weapon"></i>
                  <span class="hide-menu">C3 Charts</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-c3-axis.html" class="sidebar-link">
                      <i class="mdi mdi-arrange-bring-to-front"></i>
                      <span class="hide-menu">Axis Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-bar.html" class="sidebar-link">
                      <i class="mdi mdi-arrange-send-to-back"></i>
                      <span class="hide-menu">Bar Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-data.html" class="sidebar-link">
                      <i class="mdi mdi-backup-restore"></i>
                      <span class="hide-menu">Data Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-line.html" class="sidebar-link">
                      <i class="mdi mdi-backburger"></i>
                      <span class="hide-menu">Line Chart</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-chart-areaspline"></i>
                  <span class="hide-menu">Echarts</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-echart-basic.html" class="sidebar-link">
                      <i class="mdi mdi-chart-line"></i>
                      <span class="hide-menu">Basic Charts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-echart-bar.html" class="sidebar-link">
                      <i class="mdi mdi-chart-scatterplot-hexbin"></i>
                      <span class="hide-menu">Bar Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="chart-echart-pie-doughnut.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="hide-menu">Pie &amp; Doughnut Chart</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Sample Pages</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-cart-outline"></i>
                  <span class="hide-menu">Ecommerce Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="eco-products.html" class="sidebar-link">
                      <i class="mdi mdi-cards-variant"></i>
                      <span class="hide-menu">Products</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-cart.html" class="sidebar-link">
                      <i class="mdi mdi-cart"></i>
                      <span class="hide-menu">Products Cart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-edit.html" class="sidebar-link">
                      <i class="mdi mdi-cart-plus"></i>
                      <span class="hide-menu">Products Edit</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-detail.html" class="sidebar-link">
                      <i class="mdi mdi-camera-burst"></i>
                      <span class="hide-menu">Product Details</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-orders.html" class="sidebar-link">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="hide-menu">Product Orders</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-checkout.html" class="sidebar-link">
                      <i class="mdi mdi-clipboard-check"></i>
                      <span class="hide-menu">Products Checkout</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-file"></i>
                  <span class="hide-menu">Sample Pages </span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="starter-kit.html" class="sidebar-link">
                      <i class="mdi mdi-crop-free"></i>
                      <span class="hide-menu">Starter Kit</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-animation.html" class="sidebar-link">
                      <i class="mdi mdi-debug-step-over"></i>
                      <span class="hide-menu">Animation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-search-result.html" class="sidebar-link">
                      <i class="mdi mdi-search-web"></i>
                      <span class="hide-menu">Search Result</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-gallery.html" class="sidebar-link">
                      <i class="mdi mdi-camera-iris"></i>
                      <span class="hide-menu">Gallery</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-treeview.html" class="sidebar-link">
                      <i class="mdi mdi-file-tree"></i>
                      <span class="hide-menu">Treeview</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-block-ui.html" class="sidebar-link">
                      <i class="mdi mdi-codepen"></i>
                      <span class="hide-menu">Block UI</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-session-timeout.html" class="sidebar-link">
                      <i class="mdi mdi-timer-off"></i>
                      <span class="hide-menu">Session Timeout</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="pages-session-idle-timeout.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-timer-sand-empty"></i>
                      <span class="hide-menu">Session Idle Timeout</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-utility-classes.html" class="sidebar-link">
                      <i class="mdi mdi-tune"></i>
                      <span class="hide-menu">Helper Classes</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-maintenance.html" class="sidebar-link">
                      <i class="mdi mdi-camera-iris"></i>
                      <span class="hide-menu">Maintenance Page</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-account-circle"></i>
                  <span class="hide-menu">Authentication</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-login1.html" class="sidebar-link">
                      <i class="mdi mdi-account-key"></i>
                      <span class="hide-menu"> Login </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-login2.html" class="sidebar-link">
                      <i class="mdi mdi-account-key"></i>
                      <span class="hide-menu"> Login 2 </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-login3.html" class="sidebar-link">
                      <i class="mdi mdi-account-key"></i>
                      <span class="hide-menu"> Login 3 </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="authentication-register1.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-account-plus"></i>
                      <span class="hide-menu"> Register</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="authentication-register2.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-account-plus"></i>
                      <span class="hide-menu"> Register 2</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="authentication-lockscreen.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-account-off"></i>
                      <span class="hide-menu"> Lockscreen</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="authentication-recover-password.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-account-convert"></i>
                      <span class="hide-menu"> Recover password</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-account-multiple"></i>
                  <span class="hide-menu">Users</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-user-card.html" class="sidebar-link">
                      <i class="mdi mdi-account-box"></i>
                      <span class="hide-menu"> User Card </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-profile.html" class="sidebar-link">
                      <i class="mdi mdi-account-network"></i>
                      <span class="hide-menu"> User Profile</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-user-contacts.html" class="sidebar-link">
                      <i class="mdi mdi-account-star-variant"></i>
                      <span class="hide-menu"> User Contact</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-ungroup"></i>
                  <span class="hide-menu">Invoice</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="pages-invoice.html" class="sidebar-link">
                      <i class="mdi mdi-vector-triangle"></i>
                      <span class="hide-menu"> Invoice Layout </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-invoice-list.html" class="sidebar-link">
                      <i class="mdi mdi-vector-rectangle"></i>
                      <span class="hide-menu"> Invoice List</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-map"></i>
                  <span class="hide-menu">Maps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="map-google.html" class="sidebar-link">
                      <i class="mdi mdi-google-maps"></i>
                      <span class="hide-menu"> Google Map </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="map-vector.html" class="sidebar-link">
                      <i class="mdi mdi-map-marker-radius"></i>
                      <span class="hide-menu"> Vector Map</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-face"></i>
                  <span class="hide-menu">Icons</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="icon-feather.html" class="sidebar-link">
                      <i class="mdi mdi-feather"></i>
                      <span class="hide-menu"> Feather Icons </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-fontawesome.html" class="sidebar-link">
                      <i class="mdi mdi-emoticon-cool"></i>
                      <span class="hide-menu"> Fontawesome Icons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-bootstrap.html" class="sidebar-link">
                      <i class="mdi mdi-emoticon"></i>
                      <span class="hide-menu"> Bootstrap Icons </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-remix.html" class="sidebar-link">
                      <i class="mdi mdi-emoticon-cool"></i>
                      <span class="hide-menu"> Remix Icons</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-apple-safari"></i>
                  <span class="hide-menu">Timeline</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="timeline-center.html" class="sidebar-link">
                      <i class="mdi mdi-clock-fast"></i>
                      <span class="hide-menu"> Center Timeline </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-horizontal.html" class="sidebar-link">
                      <i class="mdi mdi-clock-end"></i>
                      <span class="hide-menu"> Horizontal Timeline</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-left.html" class="sidebar-link">
                      <i class="mdi mdi-clock-in"></i>
                      <span class="hide-menu"> Left Timeline</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-right.html" class="sidebar-link">
                      <i class="mdi mdi-clock-start"></i>
                      <span class="hide-menu"> Right Timeline</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-email-open-outline"></i>
                  <span class="hide-menu">Email Template</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="email-templete-alert.html" class="sidebar-link">
                      <i class="mdi mdi-message-alert"></i>
                      <span class="hide-menu"> Alert </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="email-templete-basic.html" class="sidebar-link">
                      <i class="mdi mdi-message-bulleted"></i>
                      <span class="hide-menu"> Basic</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="email-templete-billing.html" class="sidebar-link">
                      <i class="mdi mdi-message-draw"></i>
                      <span class="hide-menu"> Billing</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="email-templete-password-reset.html"
                      class="sidebar-link"
                    >
                      <i class="mdi mdi-message-bulleted-off"></i>
                      <span class="hide-menu"> Password-Reset</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-alert-box"></i>
                  <span class="hide-menu">Error Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="error-400.html" class="sidebar-link">
                      <i class="mdi mdi-alert-outline"></i>
                      <span class="hide-menu"> Error 400 </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="error-403.html" class="sidebar-link">
                      <i class="mdi mdi-alert-outline"></i>
                      <span class="hide-menu"> Error 403</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="error-404.html" class="sidebar-link">
                      <i class="mdi mdi-alert-outline"></i>
                      <span class="hide-menu"> Error 404</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="error-500.html" class="sidebar-link">
                      <i class="mdi mdi-alert-outline"></i>
                      <span class="hide-menu"> Error 500</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="error-503.html" class="sidebar-link">
                      <i class="mdi mdi-alert-outline"></i>
                      <span class="hide-menu"> Error 503</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-notification-clear-all"></i>
                  <span class="hide-menu">Multi level dd</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="mdi mdi-octagram"></i>
                      <span class="hide-menu"> item 1.1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="mdi mdi-octagram"></i>
                      <span class="hide-menu"> item 1.2</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="has-arrow sidebar-link"
                      href="javascript:void(0)"
                      aria-expanded="false"
                    >
                      <i class="mdi mdi-playlist-plus"></i>
                      <span class="hide-menu">Menu 1.3</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="mdi mdi-octagram"></i>
                          <span class="hide-menu"> item 1.3.1</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="mdi mdi-octagram"></i>
                          <span class="hide-menu"> item 1.3.2</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="mdi mdi-octagram"></i>
                          <span class="hide-menu"> item 1.3.3</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="mdi mdi-octagram"></i>
                          <span class="hide-menu"> item 1.3.4</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="mdi mdi-playlist-check"></i>
                      <span class="hide-menu"> item 1.4</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Extra</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="../../../docs/documentation.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-content-paste"></i>
                  <span class="hide-menu">Documentation</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="authentication-login1.html"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-directions"></i>
                  <span class="hide-menu">Log Out</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-5 align-self-center">
              <h4 class="page-title">Advanced Database</h4>
            </div>
            <div class="col-7 align-self-center">
              <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Advanced Database
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
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
                  <h4 class="card-title mb-0">File export</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    Exporting data from a table can often be a key part of a
                    complex application. The Buttons extension for DataTables
                    provides three plug-ins that provide overlapping
                    functionality for data export. You can refer full
                    documentation from here
                    <a href="https://datatables.net/">Datatables</a>
                  </h6>
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end File export
                        ---------------- -->
            </div>
          </div>
          <!-- Show / hide columns dynamically -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Show / hide columns dynamically
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">
                    Show / hide columns dynamically
                  </h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    Each column has an optional rendering control called
                    <code> columns.render</code> which can be used to process
                    the content of each cell before the data is used.
                    <code> columns.render</code> has a wide array of options
                    available to it for rendering different types of data
                    orthogonally (ordering, searching, display etc), but it can
                    be used very simply to manipulate the content of a cell, as
                    shown here.
                  </h6>
                  <div>
                    Toggle column:
                    <a href="#!" class="toggle-vis" data-column="0">Name</a> -
                    <a href="#!" class="toggle-vis" data-column="1">Position</a>
                    -
                    <a href="#!" class="toggle-vis" data-column="2">Office</a> -
                    <a href="#!" class="toggle-vis" data-column="3">Age</a> -
                    <a href="#!" class="toggle-vis" data-column="4"
                      >Start date</a
                    >
                    -
                    <a href="#!" class="toggle-vis" data-column="5">Salary</a>
                  </div>
                  <div class="table-responsive">
                    <table
                      id="show_hide_col"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Show / hide columns dynamically
                        ---------------- -->
            </div>
          </div>
          <!-- Column rendering -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Column rendering
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Column rendering</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    Each column has an optional rendering control called
                    <code> columns.render</code> which can be used to process
                    the content of each cell before the data is used.
                    <code> columns.render</code> has a wide array of options
                    available to it for rendering different types of data
                    orthogonally (ordering, searching, display etc), but it can
                    be used very simply to manipulate the content of a cell, as
                    shown here.
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="col_render"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Column rendering
                        ---------------- -->
            </div>
          </div>
          <!-- Row grouping -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Row grouping
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Row grouping</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    In the example below the 'group' is the office location,
                    which is based on the information in the third column (which
                    is set to hidden). The grouping indicator is added by the
                    <code> drawCallback</code> function, which will parse
                    through the rows which are displayed, and enter a grouping
                    TR element where a new group is found. A click event handler
                    is added for the grouping rows to allow the grouping order
                    to be restored as well as ordering by any other column.
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="row_group"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Row grouping
                        ---------------- -->
            </div>
          </div>
          <!-- Multiple table control element -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Multiple table control element
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">
                    Multiple table control element
                  </h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    As is described by the basic DOM positioning example you can
                    use the <code> dom</code> initialisation parameter to move
                    DataTables features around the table to where you want them.
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="multi_control"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Multiple table control element
                        ---------------- -->
            </div>
          </div>
          <!-- DOM / jQuery events -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start DOM / jQuery events
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">DOM / jQuery events</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    Events assigned to the table can be exceptionally useful for
                    user interaction, however you must be aware that DataTables
                    will add and remove rows from the DOM as they are needed
                    (i.e. when paging only the visible elements are actually
                    available in the DOM). As such, this can lead to the odd
                    hiccup when working with events.
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="dom_jq_event"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end DOM / jQuery events
                        ---------------- -->
            </div>
          </div>
          <!-- Complex headers with column visibility -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Complex headers with column visibility
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">
                    Complex headers with column visibility
                  </h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    Complex headers (using colspan / rowspan) can be used to
                    group columns of similar information in DataTables, creating
                    a very powerful visual effect.In addition to the basic
                    behaviour, DataTables can also take colspan and rowspan into
                    account when working with hidden columns. The colspan and
                    rowspan attributes for each cell are automatically
                    calculated and rendered on the page for you. This allows the
                    columns.visible option and <code> column().visible()</code>
                    method to take into account rowspan / colspan cells, drawing
                    the header correctly.
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="complex_head_col"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
                    >
                      <thead>
                        <!-- start row -->
                        <tr>
                          <th rowspan="2">Name</th>
                          <th colspan="2">HR Information</th>
                          <th colspan="3">Contact</th>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <th>Position</th>
                          <th>Salary</th>
                          <th>Office</th>
                          <th>Extn.</th>
                          <th>E-mail</th>
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>$320,800</td>
                          <td>Edinburgh</td>
                          <td>5421</td>
                          <td>t.nixon@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>$170,750</td>
                          <td>Tokyo</td>
                          <td>8422</td>
                          <td>g.winters@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>$86,000</td>
                          <td>San Francisco</td>
                          <td>1562</td>
                          <td>a.cox@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>$433,060</td>
                          <td>Edinburgh</td>
                          <td>6224</td>
                          <td>c.kelly@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>$162,700</td>
                          <td>Tokyo</td>
                          <td>5407</td>
                          <td>a.satou@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>$372,000</td>
                          <td>New York</td>
                          <td>4804</td>
                          <td>b.williamson@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>$137,500</td>
                          <td>San Francisco</td>
                          <td>9608</td>
                          <td>h.chandler@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>$327,900</td>
                          <td>Tokyo</td>
                          <td>6200</td>
                          <td>r.davidson@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>$205,500</td>
                          <td>San Francisco</td>
                          <td>2360</td>
                          <td>c.hurst@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>$103,600</td>
                          <td>Edinburgh</td>
                          <td>1667</td>
                          <td>s.frost@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>$90,560</td>
                          <td>London</td>
                          <td>3814</td>
                          <td>j.gaines@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>$342,000</td>
                          <td>Edinburgh</td>
                          <td>9497</td>
                          <td>q.flynn@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>$470,600</td>
                          <td>San Francisco</td>
                          <td>6741</td>
                          <td>c.marshall@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>$313,500</td>
                          <td>London</td>
                          <td>3597</td>
                          <td>h.kennedy@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>$385,750</td>
                          <td>London</td>
                          <td>1965</td>
                          <td>t.fitzpatrick@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>$198,500</td>
                          <td>London</td>
                          <td>1581</td>
                          <td>m.silva@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>$725,000</td>
                          <td>New York</td>
                          <td>3059</td>
                          <td>p.byrd@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>$237,500</td>
                          <td>New York</td>
                          <td>1721</td>
                          <td>g.little@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>$132,000</td>
                          <td>London</td>
                          <td>2558</td>
                          <td>b.greer@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>$217,500</td>
                          <td>Edinburgh</td>
                          <td>2290</td>
                          <td>d.rios@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>$345,000</td>
                          <td>New York</td>
                          <td>1937</td>
                          <td>j.caldwell@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>$675,000</td>
                          <td>New York</td>
                          <td>6154</td>
                          <td>y.berry@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>$106,450</td>
                          <td>New York</td>
                          <td>8330</td>
                          <td>c.vance@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>$85,600</td>
                          <td>Sidney</td>
                          <td>3023</td>
                          <td>d.wilder@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>$1,200,000</td>
                          <td>London</td>
                          <td>5797</td>
                          <td>a.ramos@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>$92,575</td>
                          <td>Edinburgh</td>
                          <td>8822</td>
                          <td>g.joyce@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>$357,650</td>
                          <td>Singapore</td>
                          <td>9239</td>
                          <td>j.chang@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>$206,850</td>
                          <td>San Francisco</td>
                          <td>1314</td>
                          <td>b.wagner@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>$850,000</td>
                          <td>San Francisco</td>
                          <td>2947</td>
                          <td>f.green@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>$163,000</td>
                          <td>Tokyo</td>
                          <td>8899</td>
                          <td>s.itou@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>$95,400</td>
                          <td>Sidney</td>
                          <td>2769</td>
                          <td>m.house@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>$114,500</td>
                          <td>London</td>
                          <td>6832</td>
                          <td>s.burks@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>$145,000</td>
                          <td>London</td>
                          <td>3606</td>
                          <td>p.bartlett@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>$235,500</td>
                          <td>San Francisco</td>
                          <td>2860</td>
                          <td>g.cortez@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>$324,050</td>
                          <td>Edinburgh</td>
                          <td>8240</td>
                          <td>m.mccray@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>$85,675</td>
                          <td>San Francisco</td>
                          <td>5384</td>
                          <td>u.butler@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>$164,500</td>
                          <td>San Francisco</td>
                          <td>7031</td>
                          <td>h.hatfield@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>$109,850</td>
                          <td>San Francisco</td>
                          <td>6318</td>
                          <td>h.fuentes@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>$452,500</td>
                          <td>San Francisco</td>
                          <td>9422</td>
                          <td>v.harrell@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>$136,200</td>
                          <td>London</td>
                          <td>7580</td>
                          <td>t.mooney@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>$645,750</td>
                          <td>New York</td>
                          <td>1042</td>
                          <td>j.bradshaw@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>$234,500</td>
                          <td>Singapore</td>
                          <td>2120</td>
                          <td>o.liang@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>$163,500</td>
                          <td>London</td>
                          <td>6222</td>
                          <td>b.nash@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>$139,575</td>
                          <td>Tokyo</td>
                          <td>9383</td>
                          <td>s.yamamoto@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>$98,540</td>
                          <td>New York</td>
                          <td>8327</td>
                          <td>t.walton@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>$87,500</td>
                          <td>San Francisco</td>
                          <td>2927</td>
                          <td>f.camacho@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>$138,575</td>
                          <td>Singapore</td>
                          <td>8352</td>
                          <td>s.baldwin@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>$125,250</td>
                          <td>New York</td>
                          <td>7439</td>
                          <td>z.frank@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>$115,000</td>
                          <td>San Francisco</td>
                          <td>4389</td>
                          <td>z.serrano@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>$75,650</td>
                          <td>Edinburgh</td>
                          <td>3431</td>
                          <td>j.acosta@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>$145,600</td>
                          <td>New York</td>
                          <td>3990</td>
                          <td>c.stevens@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>$356,250</td>
                          <td>London</td>
                          <td>1016</td>
                          <td>h.butler@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>$103,500</td>
                          <td>London</td>
                          <td>6733</td>
                          <td>l.greer@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>$86,500</td>
                          <td>San Francisco</td>
                          <td>8196</td>
                          <td>j.alexander@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>$183,000</td>
                          <td>Edinburgh</td>
                          <td>6373</td>
                          <td>s.decker@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>$183,000</td>
                          <td>Singapore</td>
                          <td>5384</td>
                          <td>m.bruce@datatables.net</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>$112,000</td>
                          <td>New York</td>
                          <td>4226</td>
                          <td>d.snider@datatables.net</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
                        <!-- start row -->
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Salary</th>
                          <th>Office</th>
                          <th>Extn.</th>
                          <th>E-mail</th>
                        </tr>
                        <!-- end row -->
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Complex headers with column visibility
                        ---------------- -->
            </div>
          </div>
          <!-- language file -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Language file
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Language file</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    As well as being able to pass language information to
                    DataTables through the <code> language</code> initialisation
                    option, you can also store the language information in a
                    file, which DataTables can load by Ajax using the
                    language.url option.
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="lang_file"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Language file
                        ---------------- -->
            </div>
          </div>
          <!-- Setting defaults -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Setting defaults
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Setting defaults</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    When working with DataTables over multiple pages it is often
                    useful to set the initialisation defaults to common values
                    (for example you might want to set dom to a common value so
                    all tables get the same layout). This can be done using the
                    <code> $.fn.dataTable.defaults</code> object. This object
                    will take all of the same parameters as the DataTables
                    initialisation object, but in this case you are setting the
                    default for all future initialisations of DataTables.
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="setting_defaults"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Setting defaults
                        ---------------- -->
            </div>
          </div>
          <!-- Footer callback -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Footer callback
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Footer callback</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    Through the use of the header and footer callback
                    manipulation functions provided by DataTables
                    <code> headerCallback</code> and
                    <code> footerCallback</code>, it is possible to perform some
                    powerful and useful data manipulation functions, such as
                    summarising data in the table.
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="footer_callback"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
                    >
                      <thead>
                        <!-- start row -->
                        <tr>
                          <th>First name</th>
                          <th>Last name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Salary</th>
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                        <tr>
                          <td>Tiger</td>
                          <td>Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>$320,800</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Garrett</td>
                          <td>Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton</td>
                          <td>Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric</td>
                          <td>Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi</td>
                          <td>Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle</td>
                          <td>Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod</td>
                          <td>Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona</td>
                          <td>Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen</td>
                          <td>Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya</td>
                          <td>Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena</td>
                          <td>Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn</td>
                          <td>Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde</td>
                          <td>Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley</td>
                          <td>Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana</td>
                          <td>Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael</td>
                          <td>Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul</td>
                          <td>Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria</td>
                          <td>Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley</td>
                          <td>Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai</td>
                          <td>Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette</td>
                          <td>Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri</td>
                          <td>Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar</td>
                          <td>Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris</td>
                          <td>Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica</td>
                          <td>Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin</td>
                          <td>Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer</td>
                          <td>Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden</td>
                          <td>Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona</td>
                          <td>Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou</td>
                          <td>Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle</td>
                          <td>House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki</td>
                          <td>Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott</td>
                          <td>Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin</td>
                          <td>Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena</td>
                          <td>Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity</td>
                          <td>Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard</td>
                          <td>Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope</td>
                          <td>Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian</td>
                          <td>Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy</td>
                          <td>Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson</td>
                          <td>Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia</td>
                          <td>Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno</td>
                          <td>Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura</td>
                          <td>Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor</td>
                          <td>Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn</td>
                          <td>Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge</td>
                          <td>Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida</td>
                          <td>Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita</td>
                          <td>Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer</td>
                          <td>Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara</td>
                          <td>Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione</td>
                          <td>Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael</td>
                          <td>Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas</td>
                          <td>Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad</td>
                          <td>Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael</td>
                          <td>Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna</td>
                          <td>Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
                        <!-- start row -->
                        <tr>
                          <th colspan="4" style="text-align: right">Total:</th>
                          <th></th>
                        </tr>
                        <!-- end row -->
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Footer callback
                        ---------------- -->
            </div>
          </div>
          <!-- Row created callback -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Row created callback
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Row created callback</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    The following example shows how a callback function can be
                    used to format a particular row at draw time. For each row
                    that is generated for display, the
                    <code> createdRow</code> function is called once and once
                    only. It is passed the create row node which can then be
                    modified.
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="row_create_call"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Row created callback
                        ---------------- -->
            </div>
          </div>
          <!-- Custom toolbar elements -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Custom toolbar elements
                        ---------------- -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Custom toolbar elements</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    DataTables inserts DOM elements around the table to control
                    DataTables features, and you can make use of this mechanism
                    as well to insert your own custom elements. In this example
                    a div with a class of '-string toolbar' is created using
                    <code> dom</code>, and jQuery then used to insert HTML into
                    that element to create the toolbar. You could put whatever
                    HTML you want into the toolbar!
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="custom_tool_ele"
                      class="
                        table table-striped table-bordered
                        display
                        text-nowrap
                      "
                      style="width: 100%"
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
                        <!-- start row -->
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                      <tfoot>
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
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Custom toolbar elements
                        ---------------- -->
            </div>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
          <!-- -------------------------------------------------------------- -->
          <!-- Right sidebar -->
          <!-- -------------------------------------------------------------- -->
          <!-- .right-sidebar -->
          <!-- -------------------------------------------------------------- -->
          <!-- End Right sidebar -->
          <!-- -------------------------------------------------------------- -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">All right reserved by Nice Admin.</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
      <a href="javascript:void(0)" class="service-panel-toggle"
        ><i data-feather="settings" class="feather-sm fa fa-spin"></i
      ></a>
      <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              href="#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
              ><i class="ri-tools-fill fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              href="#chat"
              role="tab"
              aria-controls="chat"
              aria-selected="false"
              ><i class="ri-message-3-line fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-contact-tab"
              data-bs-toggle="pill"
              href="#pills-contact"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
              ><i class="ri-timer-line fs-6"></i
            ></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-3">
                <input
                  type="checkbox"
                  name="theme-view"
                  class="form-check-input"
                  id="theme-view"
                />
                <label class="form-check-label" for="theme-view">
                  <span>Dark Theme</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="sidebartoggler form-check-input"
                  name="collapssidebar"
                  id="collapssidebar"
                />
                <label class="form-check-label" for="collapssidebar">
                  <span>Collapse Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="sidebar-position"
                  class="form-check-input"
                  id="sidebar-position"
                />
                <label class="form-check-label" for="sidebar-position">
                  <span>Fixed Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="header-position"
                  class="form-check-input"
                  id="header-position"
                />
                <label class="form-check-label" for="header-position">
                  <span>Fixed Header</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="boxed-layout"
                  class="form-check-input"
                  id="boxed-layout"
                />
                <label class="form-check-label" for="boxed-layout">
                  <span>Boxed Layout</span>
                </label>
              </div>
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->
          <div
            class="tab-pane fade"
            id="chat"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
            <ul class="mailbox list-style-none mt-3">
              <li>
                <div class="message-center chat-scroll position-relative">
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_1"
                    data-user-id="1"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle online"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:30 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_2"
                    data-user-id="2"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/2.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle busy"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I've sung a song! See you at</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:10 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_3"
                    data-user-id="3"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/3.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle away"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I am a singer!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:08 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_4"
                    data-user-id="4"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/4.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_5"
                    data-user-id="5"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/5.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_6"
                    data-user-id="6"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/6.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_7"
                    data-user-id="7"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/7.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_8"
                    data-user-id="8"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/8.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
          <div
            class="tab-pane fade p-3"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
            <h6 class="mt-3 mb-3">Activity Timeline</h6>
            <div class="steamline">
              <div class="sl-item">
                <div class="sl-left bg-light-success text-success">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="camera" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/2.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/1.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-primary text-primary">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="send" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/4.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/6.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js"></script>
    <script src="../../dist/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/feather.min.js"></script>
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="../../dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../dist/js/pages/datatable/custom-datatable.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="../../dist/js/pages/datatable/datatable-advanced.init.js"></script>
  </body>
</html>
