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
            <h1 class="m-0">Movement Approve By Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Attendance</a></li>
              <li class="breadcrumb-item active">Movement Approve By Admin</li>
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        Attendance Unlock(Monthly)
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="text-right"><label for="">From Date</label></td>
                                    <td><input class="form-control" type="date" name="start_date" id="start_date" value="{{old('start_date')}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">To Date</label></td>
                                    <td><input class="form-control" type="date" name="end_date" id="end_date" value="{{old('end_date')}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Employee Id</label></td>
                                    <td><input class="form-control" type="text" name="employee_id" id="employee_id" value="{{old('employee_id')}}"></td>
                                    <td><button class="btn btn-sm btn-primary">help</button></td>
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Employee Name</label></td>
                                    <td><input class="form-control" type="text" name="employee_name" id="employee_name" value="{{old('employee_name')}}"></td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Designation</label></td>
                                    <td><input class="form-control" type="text" name="designation" id="designation" value="{{old('designation')}}"></td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Proximity Card No</label></td>
                                    <td><input class="form-control" type="text" name="card_no" id="card_no" value="{{old('card_no')}}"></td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Start Time</label></td>
                                    <td><input class="form-control" type="text" name="start_time" id="start_time" value="{{old('start_time')}}"></td>
                                    <td>24 Hours</td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">End Time</label></td>
                                    <td><input class="form-control" type="text" name="end_time" id="end_time" value="{{old('end_time')}}"></td>
                                    <td>24 Hours</td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Remarks</label></td>
                                   <td><textarea name="remarks" id="remarks" cols="30" rows="2" value="{{old('remarks')}}" ></textarea></td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Entered By</label></td>
                                    <td><input class="form-control" type="text" name="enter_by" id="enter_by" value="{{old('enter_by')}}"></td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="3">
                                        <button class="btn btn-sm btn-primary">Approve</button>
                                        <button class="btn btn-sm btn-primary">Update</button>
                                        <button class="btn btn-sm btn-primary">clear</button>
                                        <button class="btn btn-sm btn-danger">Reject</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
  
              
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header text-center bg-primary">
                    Attendance Unlock(Daily)
                </div>
                <div class="card-body">
                    <div class="col-md-12"> 
                        <div class="row">
                            <div class="col-md-10">
                                <input class="form-control" type="search" id="query" name="q" placeholder="Search...">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-md btn-primary">Search</button>
                            </div>
                          
                        </div>
                    </div>
                   
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Proximity Id</th>
                            <th>From Date</th>
                            <th>To Date</th>
                            <th>In Time</th>
                            <th>Out Time</th>
                            <th>Remarks</th>
                            <th>Entered By</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">SELECT</button></td>
                                <td>BLC-00000015</td>
                                <td>31/12/97</td>
                                <td>31/12/97</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>Office Event</td>
                                <td>BLC-00000015</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">SELECT</button></td>
                                <td>BLC-00000015</td>
                                <td>31/12/97</td>
                                <td>31/12/97</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>Office Event</td>
                                <td>BLC-00000015</td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">SELECT</button></td>
                                <td>BLC-00000015</td>
                                <td>31/12/97</td>
                                <td>31/12/97</td>
                                <td>11:50:00 AM</td>
                                <td>11:50:00 AM</td>
                                <td>Office Event</td>
                                <td>BLC-00000015</td>
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