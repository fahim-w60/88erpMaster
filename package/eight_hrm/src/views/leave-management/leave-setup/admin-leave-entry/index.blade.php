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
            <h1 class="m-0"> HRM DASHBOARD </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
            <h5 class="text-center p-2 bg-success bg-gradient col-md-12 text-light">Admin Leave Entry</h5>

            <div class="form-check d-flex justify-content-end">
                <input class="form-check-input border-danger" type="checkbox" value="" id="flexCheckDefaultInputField" name="flexCheckDefault" placeholder="">
                <label class="form-check-label ml-1 text-danger fw-bolder fs-5" for="flexCheckDefault">
                  Administrator Leave Entry
                </label>
            </div>
            <div class="col-12 border border-2 mb-1">
                <table class="table table-borderless table-sm text-center mb-0">
                    <tbody>
                        <tr>
                            <td>
                                <div class="row">
                                    <label for="" class="col-md-7">Leave Type</label>
                                    <div class="col-md-5">
                                        <input type="text" class="col-md-5 form-control form-control-sm border-success" value="" placeholder="" name="leaveType" id="leaveTypeInputField">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <label for="" class="col-md-7">Allocated</label>
                                    <div class="col-md-5">
                                        <input type="text" class="col-md-5 form-control form-control-sm border-success" value="" placeholder="" name="allocated" id="allocatedInputField">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <label for="" class="col-md-7">Consumed</label>
                                    <div class="col-md-5">
                                        <input type="text" class="col-md-5 form-control form-control-sm border-success" value="" placeholder="" name="consumed" id="consumedInputField">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <label for="" class="col-md-7">Pending</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control form-control-sm border-success" value="" placeholder="" name="pending" id="pendingInputField">
                                    </div>
                                </div>
                                
                            </td>
                            <td>
                                <div class="row">
                                    <label for="" class="col-md-7">Available</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control form-control-sm border-success" value="" placeholder="" name="available" id="availableInputField">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            
            <div class="row mb-1">
                <div class="col-md-6 col-sm-12">
                    <form action="" method="post">
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-1 text-danger">Employee ID</label>
                            <div class="col-md-4 col-sm-7">
                                <input type="text" class="form-control form-control-sm border-success" name="employeeId" value="" id="employeeIdInputField" placeholder="">
                            </div>
                            <div class="col-md-1 col-sm-1 pl-0">
                                <button type="submit" class="btn btn-success btn-sm">...</button>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Employee Name</label>
                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="form-control form-control-sm border-success mt-1" name="employeeName" value="" id="employeeNameInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2 text-danger">Application Date</label>
                            <div class="col-md-4 col-sm-8">
                                <input type="date" class="form-control form-control-sm border-success mt-1" name="applicationDate" value="" id="applicationDateInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2 text-danger">Leave Start Date</label>
                            <div class="col-md-4 col-sm-8">
                                <input type="date" class="form-control form-control-sm border-success mt-1" name="leaveStartDate" value="" id="leaveStartDateInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2 text-danger">Leave End Date</label>
                            <div class="col-md-4 col-sm-8">
                                <input type="date" class="form-control form-control-sm border-success mt-1" name="leaveEndDate" value="" id="leaveEndDateInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2 text-danger">Leave Type</label>
                            <div class="col-md-4 col-sm-5">
                                <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="leaveType" id="leaveTypeInputField">
                                    <option selected>Leave Type</option>
                                    <option value="CL">CL</option>
                                    <option value="SL">SL</option>
                                    <option value="EL">EL</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <button type="submit" class="btn btn-success btn-sm mt-1">Leave Chart</button>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2 text-danger">Day Type</label>
                            <div class="col-md-4 col-sm-8">
                                <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="dayType" id="dayTypeInputField">
                                    <option selected>Day Type</option>
                                    <option value="Day1">Day1</option>
                                    <option value="Day2">Day2</option>
                                    <option value="Day3">Day3</option>
                                </select>                            
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Days Request</label>
                            <div class="col-md-4 col-sm-8">
                                <input type="number" class="form-control form-control-sm border-success mt-1" name="dayRequest" value="" id="dayRequestInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Days Approved</label>
                            <div class="col-md-4 col-sm-8">
                                <input type="number" class="form-control form-control-sm border-success mt-1" name="dayApproved" value="" id="dayApprovedInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Pay Type</label>
                            <div class="col-md-4 col-sm-8">
                                <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="payType" id="payTypeInputField">
                                    <option selected>Pay Type</option>
                                    <option value="Full Pay">Full Pay</option>
                                    <option value="Half Pay">Half Pay</option>
                                    <option value="Nothing">Nothing</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Resp. Handover To</label>
                            <div class="col-md-4 col-sm-6">
                                <input type="text" class="form-control form-control-sm border-success mt-1" name="respHandoverTo" value="" id="respHandoverToInputField" placeholder="">
                            </div>
                            <div class="col-md-1 col-sm-1 pl-0">
                                <button type="submit" class="btn btn-success btn-sm mt-1">...</button>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Name</label>
                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="form-control form-control-sm border-success mt-1" name="name" value="" id="nameInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                                <label for="" class="col-md-4 col-sm-4 mt-2">Year</label><br>
                            <div class="col-md-4 col-sm-8">
                                <input type="text" class="form-control form-control-sm border-success mt-1" name="year" value="" id="yearInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Period</label><br>
                            <div class="col-md-4 col-sm-8">
                                <input type="text" class="form-control form-control-sm border-success mt-1" name="period" value="" id="periodInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Phone</label><br>
                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="form-control form-control-sm border-success mt-1" name="phone" value="" id="phoneInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Address On Leave</label><br>
                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="form-control border-success mt-1" name="addressOnLeave" value="" id="addressOnLeaveInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Remarks</label><br>
                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="form-control border-success mt-1" name="remarks" value="" id="remarksInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2 text-danger">Purpose</label><br>
                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="form-control border-success mt-1" name="purpose" value="" id="purposeInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Status</label><br>
                            <div class="col-md-4 col-sm-8">
                                <input type="text" class="form-control form-control-sm border-success mt-1" name="status" value="" id="statusInputField" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-4 col-sm-4 mt-2">Entered By</label><br>
                            <div class="col-md-4 col-sm-8">
                                <input type="text" class="form-control form-control-sm border-success mt-1" name="enteredBy" value="" id="enteredByInputField" placeholder="">
                            </div>
                        </div>
    
                        <div class="d-flex justify-content-evenly mt-4 mb-1 border-success border-top">
                            <button type="submit" class="btn btn-outline-success btn-sm col-2 mt-2">Apply</button>
                            <button type="submit" class="btn btn-outline-danger btn-sm col-2 mt-2">Delete</button>
                            <button type="submit" class="btn btn-outline-success btn-sm col-2 mt-2">Clear</button>
                            <div class="form-check d-flex justify-content-end mt-2">
                                <input class="form-check-input border-success" type="checkbox" value="" id="flexCheckDefaultInputField" name="flexCheckDefault" placeholder="">
                                <label class="form-check-label text-success ml-1" for="flexCheckDefault">
                                    Send mail
                                </label>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-md-6 col-sm-12">
                    <input type="text" class="form-control border-success col-md-12 col-sm-12 mb-1" value="" name="searchEmpolyeeLeave" id="searchEmpolyeeLeaveInputField" placeholder="Search By Employee ID...">
                    <form action="" method="post">
                        <table class="col-12 text-center table table-sm table-hover table-success table-striped table-bordered mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Leave Type</th>
                                    <th>App Date</th>
                                    <th>Start Date</th>
                                    <th>Days App.</th>
                                    <th>Status</th>
                                    <th>Select</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SPL-000027</td>
                                    <td>CL</td>
                                    <td>21/01/2024</td>
                                    <td>14/01/2024</td>
                                    <td>1</td>
                                    <td>3-Sanctioned</td>
                                    <td><button type="submit" class="btn btn-outline-success btn-sm">Select</button></td>
                                </tr>
                                <tr>
                                    <td>SPL-000028</td>
                                    <td>CL</td>
                                    <td>11/07/2024</td>
                                    <td>14/01/2024</td>
                                    <td>3</td>
                                    <td>2-Sanctioned</td>
                                    <td><button type="submit" class="btn btn-outline-success btn-sm">Select</button></td>
                                </tr>
                                <tr>
                                    <td>SPL-000027</td>
                                    <td>CL</td>
                                    <td>21/01/2024</td>
                                    <td>14/01/2024</td>
                                    <td>1</td>
                                    <td>3-Sanctioned</td>
                                    <td><button type="submit" class="btn btn-outline-success btn-sm">Select</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <div class="input-group mb-3 border border-success rounded ">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <h5 class="mt-5 mb-0 p-1 bg-success bg-gradient fw-bold text-light text-center col-12">New Leave List</h5>
                    <form action="" method="post">
                        <table class="col-12 text-center table table-sm table-hover table-success table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Leave Type</th>
                                    <th>App Date</th>
                                    <th>Start Date</th>
                                    <th>Approved Day(s)</th>
                                    <th>Status</th>
                                    <th>Select</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ENG-000153</td>
                                    <td>CL</td>
                                    <td>30/01/2024</td>
                                    <td>30/01/2024</td>
                                    <td>2</td>
                                    <td>1-open</td>
                                    <td><button type="submit" class="btn btn-outline-success btn-sm">Select</button></td>
                                </tr>
                                <tr>
                                    <td>ENG-000015</td>
                                    <td>EL</td>
                                    <td>11/07/2024</td>
                                    <td>14/01/2024</td>
                                    <td>7</td>
                                    <td>1-open</td>
                                    <td><button type="submit" class="btn btn-outline-success btn-sm">Select</button></td>
                                </tr>
                                <tr>
                                    <td>eng-000527</td>
                                    <td>sL</td>
                                    <td>21/01/2024</td>
                                    <td>14/01/2024</td>
                                    <td>4</td>
                                    <td>1-open</td>
                                    <td><button type="submit" class="btn btn-outline-success btn-sm">Select</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <h5 class="mt-2 mb-0 p-1 bg-success bg-gradient fw-bold text-light text-center col-12">Checked Leave List</h5>
                    <form action="" method="post">
                        <table class="col-12 text-center table table-sm table-hover table-success table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Leave Type</th>
                                    <th>App Date</th>
                                    <th>Start Date</th>
                                    <th>Days App</th>
                                    <th>Status</th>
                                    <th>Select</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ENG-000153</td>
                                    <td>CL</td>
                                    <td>30/01/2024</td>
                                    <td>30/01/2024</td>
                                    <td>2</td>
                                    <td>1-open</td>
                                    <td><button type="submit" class="btn btn-outline-success btn-sm">Select</button></td>
                                </tr>
                                <tr>
                                    <td>ENG-000015</td>
                                    <td>EL</td>
                                    <td>11/07/2024</td>
                                    <td>14/01/2024</td>
                                    <td>7</td>
                                    <td>1-open</td>
                                    <td><button type="submit" class="btn btn-outline-success btn-sm">Select</button></td>
                                </tr>
                                <tr>
                                    <td>eng-000527</td>
                                    <td>sL</td>
                                    <td>21/01/2024</td>
                                    <td>14/01/2024</td>
                                    <td>4</td>
                                    <td>1-open</td>
                                    <td><button type="submit" class="btn btn-outline-success btn-sm">Select</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
       

