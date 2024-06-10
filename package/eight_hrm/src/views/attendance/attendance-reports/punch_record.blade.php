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
            <h1 class="m-0">Employee Punch Record</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Attendance</a></li>
              <li class="breadcrumb-item active">Employee Punch Record</li>
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
                Employee Punch Record
            </div>
            <div class="card-body d-flex justify-content-center">
                <div class="w-50">
                    <table>
                        <tr>
                            <td class="text-right"> <label>Select Report</label></td>
                            <td><select class="form-control" name="attendance_type" id="attendance_type">
                                <option value="option1">Movement Register</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>From Date</label></td>
                            <td><input class="form-control" type="text" value="{{ old('start_date') }}" name="start_date" id="start_date"></td>
                        </tr>
                        
                        <tr>
                           <td class="text-right"><label>To Date</label> </td>
                            <td><input class="form-control" type="date" name="end_date" value="{{ old('end_date')}} " id="end_date"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Employee Category</label></td>
                            <td><input class="form-control" type="text" name="employee_category" value="{{old('employee_category')}}" id="employee_category"></td>
                            <td class="text-left"><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                       
                        <tr>
                            <td class="text-right"><label>Department</label></td>
                            <td><input class="form-control" type="text" name="department" value="{{old('department')}}" id="department"></td>
                            <td class="text-left"><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Designation</label></td>
                            <td><input class="form-control" type="text" name="designation" value="{{old('designation')}}" id="designation"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Employee Grade</label></td>
                            <td><input class="form-control" type="text" name="employee_grade" value="{{old('employee_grade')}}" id="employee_grade"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Company</label></td>
                            <td><input class="form-control" type="text" name="company" value="{{old('company')}}" id="company"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Branch</label></td>
                            <td><input class="form-control" type="text" name="branch" value="{{old('branch')}}" id="branch"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Division</label></td>
                            <td><input class="form-control" type="text" name="division" value="{{old('division')}}" id="division"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Project</label></td>
                            <td><input class="form-control" type="text" name="project" value="{{old('project')}}" id="project"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Section</label></td>
                            <td><input class="form-control" type="text" name="section" value="{{old('section')}}" id="section"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Sub Section</label></td>
                            <td><input class="form-control" type="text" name="sub_section" value="{{old('sub_section')}}" id="sub_section"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Location</label></td>
                            <td><input class="form-control" type="text" name="location" value="{{old('location')}}" id="location"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label for="">Floor</label></td>
                            <td><input class="form-control" type="text" name="floor" value="{{old('floor')}}" id="floor"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label for="">Employee Name</label></td>
                            <td><input class="form-control" type="text" name="employee_name" value="{{old('employee_name')}}" id="employee_name"></td>
                            <td><button class="btn btn-sm btn-primary">help</button></td>
                            <td><input class="form-control" type="text" name="employee_name" value="{{old('employee_name')}}" id="employee_name"></td>
                        </tr>
                        {{-- <tr>
                            <td class="text-right"><label>Shift</label></td>
                            <td><select class="form-control" name="shift" id="shift">
                                <option class="form-control" value="option1">option1</option>
                                <option class="form-control" value="option2">Option 2</option>
                                <option class="form-control" value="option3">Option 3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Employee Status</label></td>
                            <td><select class="form-control" name="employee_status" id="employee_status">
                                <option class="form-control" value="option1">option1</option>
                                <option class="form-control" value="option2">Option 2</option>
                                <option class="form-control" value="option3">Option 3</option>
                                </select>
                            </td>
                            
                        </tr> --}}
                        <tr>
                            <td class="text-right"><label>Attendance Status</label></td>
                            <td><select class="form-control" name="attendance_status" id="attendance_status">
                                <option class="form-control" value="option1">option1</option>
                                <option class="form-control" value="option2">Option 2</option>
                                <option class="form-control" value="option3">Option 3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12">
                                <hr class="col-md-12" style="border-top: 2px solid #007bff;">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="3">
                                <button class="btn btn-sm btn-primary">Show Report</button>
                            </td>
                        </tr>
                    </table>
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

document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#start_date", {
            enableTime: true,
            dateFormat: "Y-m-d",
            defaultDate: "{{ old('start_date') }}"
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#end_date", {
            enableTime: true,
            dateFormat: "Y-m-d",
            defaultDate: "{{ old('end_date') }}"
        });
    });
  
</script>
@endsection