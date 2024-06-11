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
            <h1 class="m-0">Employee Wise Time Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Attendance</a></li>
              <li class="breadcrumb-item active">Employee Wise Time Setting</li>
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
            
              <div class="card-body d-flex justify-content-center">
                  <div>
                      <table>    
                              <tr>
                                  <td class="text-right"><label>Employee Code</label></td>
                                  <td><input class="form-control" type="text" name="employee_code" value="{{old('employee_code')}}" id="employee_code"></td>
                                  <td class="text-left"><button class="btn btn-sm btn-primary">help</button></td>
                              </tr>
                              <tr>
                                <td class="text-right"><label>Employee Name</label></td>
                                <td><input class="form-control" type="text" name="employee_name" value="{{old('employee_name')}}" id="employee_name"></td>
                               
                            </tr>
                            <tr>
                                <td class="text-right"><label>Shift Code</label></td>
                                <td><input class="form-control" type="text" name="shift_code" value="{{old('shift_code')}}" id="shift_code"></td>
                                <td class="text-left"><button class="btn btn-sm btn-primary">help</button></td>
                            </tr>
                            <tr>
                                <td  class="text-right"><label for="month">Time In<small>(HH::MM:SS AM/PM)</small></label></td>
                                <td>
                                    <input type="time" name="time_in" id="time_in" class="form-control" value="{{old('time_in')}}">
                                </td>
                            </tr>
                            <tr>
                                <td  class="text-right"><label for="month">Time Out<small>(HH::MM:SS AM/PM)</small></label></td>
                                <td>
                                    <input type="time" name="time_out" id="time_out" class="form-control" value="{{old('time_out')}}">
                                </td>
                               
                                    
                            </tr>
                            <tr>
                                <td  class="text-right"><label for="month">Penalty Time<small>(HH::MM:SS AM/PM)</small></label></td>
                                <td>
                                    <input type="time" name="penalty_time" id="penalty_time" class="form-control" value="{{old('penalty_time')}}">
                                </td>
                            </tr>
                            <tr>
                                   
                                <td class="text-center" colspan="3">
                                    <button class="btn btn-sm btn-primary">Add</button>
                                    <button class="btn btn-sm btn-primary">Update</button>
                                    <button class="btn btn-sm btn-primary">Delete</button>
                                    <button class="btn btn-sm btn-primary">Clear</button>
                                </td>
                            
                        </tr>
                      </table>
                  </div>
              </div>
            </div>
          
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('script')
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#year", {
            enableTime: true,
            dateFormat: "Y-m-d",
            defaultDate: "{{ old('year') }}"
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