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
            <h1 class="m-0">Shift Time Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Attendance</a></li>
              <li class="breadcrumb-item active">Shift Time Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        Attendance Unlock(Monthly)
                    </div>
                    <div class="card-body justify-content-center">
                        <table>
                            <tbody>
                                <tr>
                                   
                                        <td class="text-center" colspan="3">
                                            <button class="btn btn-sm btn-primary">Add</button>
                                            <button class="btn btn-sm btn-primary">Update</button>
                                            <button class="btn btn-sm btn-primary">Delete</button>
                                            <button class="btn btn-sm btn-primary">Clear</button>
                                        </td>
                                    
                                </tr>
                                <tr>
                                    
                                            <td class="text-right"><label for="month">Shift Code</label></td>
                                        <td>
                                            <input type="text" name="shift_code" id="shift_code" class="form-control" value="{{old('shift_code')}}">
                                        </td>
                                        <td>
                                            <button  class="btn btn-sm btn-primary">...</button>
                                        </td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="month">Shift Details</label></td>
                                    <td>
                                        <input type="text" name="shift_details" id="shift_details" class="form-control" value="{{old('shift_details')}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td  class="text-right"><label for="month">Day Start<small>(HH::MM:SS AM/PM)</small></label></td>
                                    <td>
                                        <input type="time" name="day_start" id="day_start" class="form-control" value="{{old('day_start')}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td  class="text-right"><label for="month">Day End<small>(HH::MM:SS AM/PM)</small></label></td>
                                    <td>
                                        <input type="time" name="day_end" id="day_end" class="form-control" value="{{old('day_end')}}">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="nextDayCheckbox" id="nextDayCheckbox">
                                        <small>next day</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td  class="text-right"><label for="month">Time In<small>(HH::MM:SS AM/PM)</small></label></td>
                                    <td>
                                        <input type="time" name="time_in" id="time_in" class="form-control" value="{{old('time_in')}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td  class="text-right"><label for="month">Penalty Time<small>(HH::MM:SS AM/PM)</small></label></td>
                                    <td>
                                        <input type="time" name="penalty_time" id="penalty_time" class="form-control" value="{{old('penalty_time')}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td  class="text-right"><label for="month">Time Out<small>(HH::MM:SS AM/PM)</small></label></td>
                                    <td>
                                        <input type="time" name="time_out" id="time_out" class="form-control" value="{{old('time_out')}}">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="nextDayCheckbox" id="nextDayCheckbox">
                                        <small>next day</small>
                                    </td>
                                        
                                </tr>
                                <tr>
                                    <td  class="text-right"><label for="month"><small>Ot Count After Duty Hour</small></label></td>
                                    <td>
                                        <input type="number" name="time_out" id="time_out" class="form-control" value="{{old('time_out')}}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
  
              
            </div>
            <div class="col-md-7">
              <div class="card">
                <div class="card-header text-center bg-primary">
                    Attendance Unlock(Daily)
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Shift</th>
                            <th>Day Start</th>
                            <th>Day End</th>
                            <th>Time In</th>
                            <th>Time Penalty</th>
                            <th>Time Out</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">CTS</button></td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">D</button></td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">D1</button></td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
  
              
            </div>
            <!-- /.col-md-6 -->
            
            <!-- /.col-md-6 -->
          </div>
  
          <div class="row" id="report_display_area">
            
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