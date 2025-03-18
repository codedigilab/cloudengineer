  <!-- ========== Left Sidebar Start ========== -->
  <div class="vertical-menu">

      <div data-simplebar class="h-100">

          <!--- Sidemenu -->
          <div id="sidebar-menu">
              <!-- Left Menu Start -->
              <ul class="metismenu list-unstyled" id="side-menu">
                  <li class="menu-title" key="t-menu">Menu</li>

                  <li>
                      <a href="admin" class="waves-effect">
                          <i class="bx bx-home-circle"></i>
                          <span key="t-dashboards">Dashboards</span>
                      </a>
                  </li>



                  <li class="menu-title" key="t-apps">Company Samosa Party</li>
                  <li>
                      <a href="{{ route('storeproblem.index') }}" class="waves-effect">
                          <i class="bx bx-task"></i>
                          <span key="t-tasks">Store Problem</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('stock.index') }}" class=" waves-effect">
                          <i class="bx bx-briefcase-alt-2"></i>
                          <span key="t-projects">All Stock</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('stock.transfer') }}" class=" waves-effect">
                          <i class="bx bx-briefcase-alt-2"></i>
                          <span key="t-projects">Transfer Stock</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('laptopdetails.index') }}" class="waves-effect">

                          <i class="bx bx-layout"></i>
                          <span key="t-layouts">All Laptop</span>
                      </a>

                  </li>
                  <li>
                      <a href="{{ route('internet.index') }}" class=" waves-effect">
                          <i class="bx bx-envelope"></i>
                          <span key="t-email">Internet Data</span>
                      </a>

                  </li>
                   <li>
                      <a href="{{ route('wifipassword.index') }}" class="waves-effect">
                          <i class="bx bx-calendar"></i>
                          <span key="t-dashboards">Wifi Password</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('storenumber.index') }}" class="waves-effect">
                          <i class="bx bx-chat"></i>
                          <span key="t-chat">Store Number</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('prime.index') }}" class="waves-effect">

                          <i class="bx bx-layout"></i>
                          <span key="t-layouts">Prime Details</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('solution.index') }}" class=" waves-effect">
                          <i class="bx bx-receipt"></i>
                          <span key="t-invoices">Solution</span>
                      </a>

                  </li>
                  <li>
                      <a href="{{ route('biometric.index') }}" class="waves-effect">

                          <i class="bx bx-layout"></i>
                          <span key="t-layouts">NCR Biometric Details</span>
                      </a>

                  </li>

                  <li>
                      <a href="{{ route('camera.index') }}" class="waves-effect">
                          <i class="bx bx-file"></i>
                          <span key="t-file-manager">NCR Camera</span>
                      </a>
                  </li>
                 

                  <li>
                      <a href="{{ route('pos.index') }}" class="waves-effect">
                          <i class="bx bx-task"></i>
                          <span key="t-tasks">POS Version</span>
                      </a>
                  </li>
                 

              </ul>
          </div>
          <!-- Sidebar -->
      </div>
  </div>
  <!-- Left Sidebar End -->
