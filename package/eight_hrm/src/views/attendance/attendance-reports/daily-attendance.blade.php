@extends('eight_hrm::layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daily Attendance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Attendance</a></li>
              <li class="breadcrumb-item active">Daily Attendance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="card">
            <div class="card-header text-center bg-primary text-white">
              Daily Attendance Report
            </div>
            <div class="card-body d-flex justify-content-center">
                <div class="w-80">
                    <div class="mb-3">
                        <label>Select Report</label>
                        <select class="form-select" name="attendance_type" id="attendance_type">
                            <option value="option1">Daily Attendance (Include OT)</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">From Date</label>
                        <input type="date" name="attendance_start_date" id="attendance_start_date">
                    </div>
                    <div class="mb-3">
                        <label for="">To Date</label>
                        <input type="date" name="attendance_end_date" id="attendance_end_date">
                    </div>
                    <div class="mb-3">
                        <label for="">Employee Category</label>
                        <input type="text" name="employee_category" id="employee_category">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Department</label>
                        <input type="text" name="department" id="department">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Designation</label>
                        <input type="text" name="designation" id="designation">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Employee Grade</label>
                        <input type="text" name="employee_grade" id="employee_grade">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Company</label>
                        <input type="text" name="company" id="company">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Branch</label>
                        <input type="text" name="branch" id="branch">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Division</label>
                        <input type="text" name="division" id="division">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Project</label>
                        <input type="text" name="project" id="project">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Section</label>
                        <input type="text" name="section" id="section">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Sub Section</label>
                        <input type="text" name="sub_section" id="sub_section">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Location</label>
                        <input type="text" name="location" id="location">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Floor</label>
                        <input type="text" name="floor" id="floor">
                        <button class="btn btn-sm btn-primary">help</button>
                    </div>
                    <div class="mb-3">
                        <label for="">Employee Name</label>
                        <input type="text" name="employee_name" id="employee_name">
                        <button class="btn btn-sm btn-primary">help</button>
                        <input type="text" name="employee_name" id="employee_name">

                    </div>
                    <div class="mb-3">
                        <label>Select Shift</label>
                        <select class="form-select" name="shift" id="shift">
                            <option class="form-control" value="option1">option1</option>
                            <option class="form-control" value="option2">Option 2</option>
                            <option class="form-control" value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Select Shift</label>
                        <select class="form-select" name="shift" id="shift">
                            <option class="form-control" value="option1">option1</option>
                            <option class="form-control" value="option2">Option 2</option>
                            <option class="form-control" value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Select Roaster Group</label>
                        <select class="form-select" name="roaster_group" id="roaster_group">
                            <option class="form-control" value="option1">option1</option>
                            <option class="form-control" value="option2">Option 2</option>
                            <option class="form-control" value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Select Employee Status</label>
                        <select class="form-select" name="employee_status" id="employee_status">
                            <option class="form-control" value="option1">option1</option>
                            <option class="form-control" value="option2">Option 2</option>
                            <option class="form-control" value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Select Attendance Status</label>
                        <select class="form-select" name="attendance_status" id="attendance_status">
                            <option class="form-control" value="option1">option1</option>
                            <option class="form-control" value="option2">Option 2</option>
                            <option class="form-control" value="option3">Option 3</option>
                        </select>
                    </div>
                    <hr style="border-top: 2px solid #007bff;">
                    <div class="mb-3 text-center">
                        <button class="btn btn-sm btn-primary">Show Report</button>
                    </div>
                </div>
            </div>
          </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('script')
<script type="text/javascript">

 

  
</script>
@endsection