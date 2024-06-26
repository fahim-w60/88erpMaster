 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">

      <img src="{{ asset('logo/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold">Saif Erp</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('vendor/eight_hrm/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              
            </ul> --}}
          </li>
          
{{--           
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li> --}}
          
         

          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Attendance Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Attendance Reports
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('attendance.daily_attendance') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daily Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.monthly_attendance')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Monthly Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.summary_attendance')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Summary Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.job_card')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Job Card</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.punch_record')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Employee punch record and movement Reg</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Attendance Setup
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('attendance.attendance_lock')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Monthly Attendance Lock</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.attendance_unlock')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Monthly Attendance Unlock</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.shift_time_setting')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Shift Time Setting</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.employee_wise_time_setting')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Employee Wise Time Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.roaster_sheet_generate')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roaster Sheet Generate Process</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.group_roaster_sheet_modify')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roster Sheet Modify By Group</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.employee_roaster_sheet_modify')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roster Sheet Modify By Employee</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.roster_excel_upload')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roster Upload From Excel</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.movement_approve_byAdmin')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Movement Approve By Admin</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Attendance Entry
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roster Group Update</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance-modify-admin.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daily Attendance Modify By Admin</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('empl-atten-mod-admin.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Employee Wise Attendance Modify By Admin</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Attendance Process</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Over Time Recommend</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Over Time Approve</p>
                    </a>
                  </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Attendance Entry
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roster Group Update</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance-modify-admin.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daily Attendance Modify By Admin</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('empl-atten-mod-admin.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Employee Wise Attendance Modify By Admin</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Attendance Process</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Over Time Recommend</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Over Time Approve</p>
                    </a>
                  </li><li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Attendance Entry
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roster Group Update</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance-modify-admin.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daily Attendance Modify By Admin</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('empl-atten-mod-admin.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Employee Wise Attendance Modify By Admin</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Attendance Process</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Over Time Recommend</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roster-group-update.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Over Time Approve</p>
                    </a>
                  </li>



                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Syestem 
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('roster-group-update.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Roster Group Update</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('attendance-modify-admin.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Daily Attendance Modify By Admin</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('empl-atten-mod-admin.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Employee Wise Attendance Modify By Admin</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('roster-group-update.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Attendance Process</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('roster-group-update.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Over Time Recommend</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('roster-group-update.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Over Time Approve</p>
                        </a>
                      </li>
                  
                      <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Attendance Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Attendance Reports
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('attendance.daily_attendance') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daily Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.monthly_attendance')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Monthly Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.summary_attendance')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Summary Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.job_card')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Job Card</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.punch_record')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Employee punch record and movement Reg</p>
                    </a>
                  </li>
                </ul>
              </li>

              {{-- <li class="nav-item">
                <a href="../examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li> --}}
            </ul>
          </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                System Administration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Attendance Reports
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('attendance.daily_attendance') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daily Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.monthly_attendance')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Monthly Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.summary_attendance')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Summary Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.job_card')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Job Card</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('attendance.punch_record')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Employee punch record and movement Reg</p>
                    </a>
                  </li>
                </ul>
              </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>