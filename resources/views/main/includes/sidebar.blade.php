<aside class="left-sidebar" >
   <div class="scroll-sidebar">
      <nav class="sidebar-nav">
         <ul id="sidebarnav">
            <!-- <li class="nav-small-cap">
               <i class="mdi mdi-dots-horizontal"></i>
               <span class="hide-menu">Menu</span>
            </li> -->
            <li class="sidebar-item">
               <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ url('/dashboard')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-text"></i
                  ><span class="hide-menu">Dashboard</span></a
                  >
            </li>
            <li class="sidebar-item">
               <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ url('/establishments')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-text"></i
                  ><span class="hide-menu">Establishments</span></a
                  >
            </li>
            <li class="sidebar-item">
               <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ url('/users')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-text"></i
                  ><span class="hide-menu">Users</span></a
                  >
            </li>
            <li class="sidebar-item">
               <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ url('/back-up-database')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-text"></i
                  ><span class="hide-menu">Back Up Database</span></a
                  >
            </li>
            <li class="sidebar-item">
               <a
                  class="sidebar-link waves-effect waves-dark sidebar-link text-danger"
                  href="{{ url('/out')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-logout text-danger"></i
                  ><span class="hide-menu">Logout</span></a
                  >
            </li>
         </ul>
      </nav>
   </div>
</aside>