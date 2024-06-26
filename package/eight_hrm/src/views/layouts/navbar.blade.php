<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{url('/home')}}" class="navbar-brand">

        <img src="{{ asset('/logo/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Saif Erp</span>

      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item">
            <a href="{{url('/hrm/dashboard')}}" class="nav-link">Dashboard</a>
          </li>
          
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Attendance Management</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
             

             
              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Attendance Reports</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="{{route('attendance.daily_attendance')}}" class="dropdown-item">Daily Attendance</a>
                  </li>

                  {{-- <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three --> --}}

                  <li><a href="{{route('attendance.monthly_attendance')}}" class="dropdown-item">Monthly Attendance</a></li>
                  <li><a href="{{route('attendance.summary_attendance')}}" class="dropdown-item">Summary Attendance</a></li>
                  <li><a href="{{route('attendance.job_card')}}" class="dropdown-item">Job Card</a></li>
                  <li><a href="{{route('attendance.punch_record')}}" class="dropdown-item">Employee Punch Record And Movement Reg</a></li>
                </ul>
              </li>
              <!-- End Level two -->

              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Attendance Setup</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  

                  {{-- <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three --> --}}

                  <li><a href="{{route('attendance.attendance_lock')}}" class="dropdown-item">Monthly Attendance Lock</a></li>
                  <li><a href="{{route('attendance.attendance_unlock')}}" class="dropdown-item">Monthly Attendance Unlock</a></li>
                  <li><a href="{{route('attendance.shift_time_setting')}}" class="dropdown-item">Shift Time Setting</a></li>
                  <li><a href="{{route('attendance.employee_wise_time_setting')}}" class="dropdown-item">Employee Wise Time Setting</a></li>
                  <li><a href="{{route('attendance.roaster_sheet_generate')}}" class="dropdown-item">Roaster Sheet Generate Process</a></li>
                  <li><a href="{{route('attendance.group_roaster_sheet_modify')}}" class="dropdown-item">Roaster Sheet Modify By Group</a></li>
                  <li><a href="{{route('attendance.employee_roaster_sheet_modify')}}" class="dropdown-item">Roaster Sheet Modify By Employee</a></li>
                  <li><a href="{{route('attendance.roster_excel_upload')}}" class="dropdown-item">Roaster Upload From Excel</a></li>
                  <li><a href="{{route('attendance.movement_approve_byAdmin')}}" class="dropdown-item">Movement Approve By Admin</a></li>
                </ul>
              </li>

               <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Attendance Entry</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="{{route('attendance.daily_attendance')}}" class="dropdown-item">Roster Group Update</a>
                  </li>

                  {{-- <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three --> --}}

                  <li><a href="{{route('attendance.monthly_attendance')}}" class="dropdown-item">Daily Attendance Modify By Admin</a></li>
                  <li><a href="{{route('attendance.summary_attendance')}}" class="dropdown-item">Employee Wise Attendance Modify By Admin</a></li>
                  <li><a href="{{route('attendance.job_card')}}" class="dropdown-item">Attendance Process</a></li>
                  <li><a href="{{route('attendance.punch_record')}}" class="dropdown-item">Over Time Recommend</a></li>
                  <li><a href="{{route('attendance.punch_record')}}" class="dropdown-item">Over Time Approve</a></li>
                </ul>

              </li>
            </ul>
          </li>

          {{-- System Adminstration --}}
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">System Adminstration</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
             

             
              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">User Settings
                </a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="{{route('user_settings.backup_database_url')}}" class="dropdown-item">Backup Database In (URL)</a>
                  </li>

                  {{-- <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three --> --}}

                  <li><a href="{{url('hrm/sys_code')}}" class="dropdown-item">Code Setup</a></li>
                  <li><a href="{{url('hrm/sys_code_type')}}" class="dropdown-item">Code Type Setup</a></li>
                  <li><a href="" class="dropdown-item">Employee Entry</a></li>
                  <li><a href="" class="dropdown-item">Customer Entry</a></li>
                  <li><a href="" class="dropdown-item">Supplier Entry</a></li>
                  <li><a href="" class="dropdown-item">Item Master Entry</a></li>
                  <li><a href="" class="dropdown-item">Calender Process</a></li>
                  <li><a href="" class="dropdown-item">Calender Edit</a></li>
                  <li><a href="" class="dropdown-item">Calender Edit For Event</a></li>
                  <li><a href="" class="dropdown-item">Event Calender Entry</a></li>
                  <li><a href="" class="dropdown-item">Location Wise Holiday Setup</a></li>
                  <li><a href="" class="dropdown-item">Currency Entry</a></li>
                  <li><a href="" class="dropdown-item">Month Wise Holiday Setup</a></li>
                  <li><a href="" class="dropdown-item">Todays Salat Time And Holy Quran Translation</a></li>
                  <li><a href="" class="dropdown-item">Staff Change Password</a></li>
                  <li><a href="" class="dropdown-item">Staff Change Password By Employee Range</a></li>
                </ul>
              </li>
              <!-- End Level two -->

            <!-- Level two dropdown-->
          <li class="dropdown-submenu dropdown-hover">
            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Super Administration Settings
            </a>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              

              {{-- <!-- Level three dropdown-->
              <li class="dropdown-submenu">
                <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">3rd level</a></li>
                  <li><a href="#" class="dropdown-item">3rd level</a></li>
                </ul>
              </li>
              <!-- End Level three --> --}}

              <li><a href="{{url('hrm/inactive-user-process')}}" class="dropdown-item">Inactive User Process</a></li>
              <li><a href="{{url('hrm/user-code-permission')}}" class="dropdown-item">User Wise Code Permission</a></li>
              <li><a href="{{url('hrm/user-code-te')}}" class="dropdown-item">User Wise Code Type Entry</a></li>
              <li><a href="{{url('hrm/user-profile-entry')}}" class="dropdown-item">User Profile Entry</a></li>
            </ul>
          </li>
          <!-- End Level two -->
          <!-- Level two dropdown-->
          <li class="dropdown-submenu dropdown-hover">
            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Administration Settings
            </a>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              

              {{-- <!-- Level three dropdown-->
              <li class="dropdown-submenu">
                <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">3rd level</a></li>
                  <li><a href="#" class="dropdown-item">3rd level</a></li>
                </ul>
              </li>
              <!-- End Level three --> --}}

              <li><a href="{{url('hrm/group-entry')}}" class="dropdown-item">Group Entry</a></li>
            </ul>
          </li>
          <!-- End Level two -->

        
         
        </ul>
      </li>
             
            </ul>
          </li>
          



          <!-----Payroll----->
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Payroll Management</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <!-- Level two dropdown-->
              <li class="">
                <a id="dropdownSubMenu2" href="{{ route('employee.index') }}" class="dropdown-item">Employee Info</a>
              </li>
            </ul>
          </li>
          <!-----E-recruitment----->
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">E-Recruitment</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              
              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Requisition
                </a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="{{ route('recruitment-requisition.index') }}" class="dropdown-item">Request For Requisition</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Approved By Department Head</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Approved By HR Head</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Approved By BOD</a>
                  </li>
                </ul>
              </li>
              <!-- End Level two -->
              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Process
                </a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="{{ route('recruitment-requisition.index') }}" class="dropdown-item">Circulation/Promotion</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Screening</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">CV Short Listing</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="{{ route('candidates.index') }}" class="dropdown-item">Candidates</a>
                  </li>

                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Interview Preparation</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="{{ route('interview.index') }}" class="dropdown-item">Interview</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="{{ route('interview-evaluation.index') }}" class="dropdown-item">Candidate Selection/Evaluation</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Candidate Approved By Head</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Candidate Approved By BOD</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Candidate Appointment</a>
                  </li>
                </ul>
              </li>
              <!-- End Level two -->

              <!-- Level one dropdown-->
              <li class="">
                <a id="dropdownSubMenu2" href="#" class="dropdown-item">Recruitment Reports</a>
              </li>
              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Setup
                </a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">CV Entry</a>
                  </li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        {{-- <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form> --}}
      </div>

      <!-- Right navbar links -->
      {{-- <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul> --}}
    </div>
  </nav>