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
            <h1 class="m-0"> Create New Employee </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('employee.index') }}">List</a></li>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-body p-4" >
                <form action="" method="post">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="false">Official Information</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Additional Information</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Contact Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1 text-danger fw-bold">Employee Category</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-control border-success mt-1" name="employeeCategory" id="religionInputField">
                                                        <option selected>Management</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Department/Function</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-control border-success mt-1" name="departmentFunction" id="departmentFunctionInputField">
                                                        <option selected>Software Development</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Shift</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-control border-success mt-1" name="shift" id="shiftInputField">
                                                        <option selected>Day</option>
                                                        <option selected>Night</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Proximity Card Number</label>
                                                <div class="col-md-7 col-sm-7 mt-1">
                                                    <input type="date" class="form-control border-success" name="proximityCardNumber" value="" id="proximityCardNumberInputField" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Project</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="project" id="projectInputField">
                                                        <option selected>Project-1</option>
                                                        <option selected>Project-2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Division</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="division" id="divisionInputField">
                                                        <option selected>Blank :- No Division Applicable</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Sectin/Profit Center</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="sectinProfitCenter" id="sectinProfitCenterInputField">
                                                        <option selected>Blank :- No Division Applicable</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Location</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="location" id="locationInputField">
                                                        <option selected>Khawja Tower</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Joinning Designation</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="joinningDesignation" id="joinningDesignationInputField">
                                                        <option selected>Trainee Programmer</option>
                                                        <option selected>Programmer</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Cost Center</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="costCenter" id="costCenterInputField">
                                                        <option selected>costCenter</option>
                                                        <option selected>costCenter</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Last Company Name</label>
                                                <div class="col-md-7 col-sm-7">
                                                    <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="lastCompanyName" id="lastCompanyNameInputField">
                                                        <option selected>No Name</option>
                                                        <option selected>No Name</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Investment</label>
                                                <div class="col-md-4 col-sm-7 mt-1">
                                                    <input type="number" class="form-control form-control-sm border-success" name="investment" value="" id="investmentInputField" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Mobile Bill</label>
                                                <div class="col-md-4 col-sm-7 mt-1">
                                                    <input type="number" class="form-control form-control-sm border-success" name="mobileBill" value="" id="mobileBillInputField" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Other Conveyance</label>
                                                <div class="col-md-4 col-sm-7 mt-1">
                                                    <input type="number" class="form-control form-control-sm border-success" name="otherConveyance" value="" id="otherConveyanceInputField" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Avail Car</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="availCar" id="availCarInputField">
                                                        <option selected>Cash</option>
                                                        <option selected>Car</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Tin No</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="tinNo" value="" id="tinNoInputField" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Work Permit Date</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="workPermitDate" value="" id="workPermitDateInputField" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Resident Status</label>
                                                <div class="col-md-4 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="residentStatus" id="residentStatusInputField">
                                                        <option selected>Resident</option>
                                                        <option >Resident</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">New/PF ID</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="NewPFID" value="" id="NewPFIDInputField" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">ORSO Status</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="ORSOStatus" id="ORSOStatusInputField">
                                                        <option selected>Yes</option>
                                                        <option >No</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">TAX Inverstment Status</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="TAXInverstmentStatus" id="TAXInverstmentStatusInputField">
                                                        <option selected>Yes</option>
                                                        <option >No</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-sm-12">
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Pay Scale</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="payScale" id="payScaleInputField">
                                                        <option selected>PS01 :- Default Pay Scale</option>
                                                        <option>PS01 :- Default Pay Scale</option>
                                                    </select>                            
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Gross Salary</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="grossSalary" value="" id="grossSalaryInputField" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Payment Type</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="paymentType" id="paymentTypeInputField">
                                                        <option selected>Bank</option>
                                                        <option>Cash</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-1">Bank Name</label>
                                                <div class="col-md-7 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="bankName" id="bankNameInputField">
                                                        <option selected>NCC Bank :- Gulshan</option>
                                                        <option>Dhaka Bank :- Gulshan</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Account Number</label>
                                                <div class="col-md-7 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="accountNumber" value="" id="accountNumberInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Branch</label>
                                                <div class="col-md-7 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="branch" value="" id="branchInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Resign Date</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="date" class="form-control form-control-sm border-success" name="resignDate" value="" id="resignDateInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Date Inactive</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="dateInactive" value="" id="dateInactiveInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Starting Contract</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="date" class="form-control form-control-sm border-success" name="startingContractProbationDate" value="" id="startingContractProbationDateInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Contract/Probation Month</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="contractProbationMonth" value="" id="contractProbationMonthInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Ending Cont./Probation Date</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="date" class="form-control form-control-sm border-success" name="endingContractProbationDate" value="" id="endingContractProbationDateInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Confirm Date</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="date" class="form-control form-control-sm border-success" name="confirmDate" value="" id="confirmDateInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Retirement Date</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="date" class="form-control form-control-sm border-success" name="retirementDate" value="" id="retirementDateInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Card ID Number</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="cardIDNumber" value="" id="cardIDNumberInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Current Salary</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="currentSalary" value="" id="currentSalaryInputField" placeholder="">                           
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Report To</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="currentSalary" value="" id="currentSalaryInputField" placeholder="">                           
                                                </div>
                                                {{-- <a href="#" class="col-md-1">Find</a> --}}
                                                <div class="col-md-3 col-sm-3 mt-2">
                                                    <small class="text-success">Md Jobaer Kabir</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Recommended By 1</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="recommendedBy1" value="" id="recommendedBy1InputField" placeholder="">                           
                                                </div>
                                                {{-- <a href="#" class="col-md-1">Find</a> --}}
                                                <div class="col-md-3 col-sm-3 mt-2">
                                                    <small class="text-success">Tariq Ahmed Khan</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Recommended By 2</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="recommendedBy2" value="" id="recommendedBy2InputField" placeholder="">                           
                                                </div>
                                                {{-- <a href="#" class="col-md-1">Find</a> --}}
                                                <div class="col-md-3 col-sm-3 mt-2">
                                                    <small class="text-success">Naznin Nahar</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Recommended By 3</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="recommendedBy3" value="" id="recommendedBy3InputField" placeholder="">                           
                                                </div>
                                                {{-- <a href="#" class="col-md-1">Find</a> --}}
                                                <div class="col-md-3 col-sm-3 mt-2">
                                                    <small class="text-success">Polash</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Approved By 1</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="approvedBy1" value="" id="approvedBy1InputField" placeholder="">                           
                                                </div>
                                                {{-- <a href="#" class="col-md-1">Find</a> --}}
                                                <div class="col-md-3 col-sm-3 mt-2">
                                                    <small class="text-success">Tariq Ahmed Khan</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Approved By 2</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="approvedBy2" value="" id="approvedBy2InputField" placeholder="">                           
                                                </div>
                                                {{-- <a href="#" class="col-md-1">Find</a> --}}
                                                <div class="col-md-3 col-sm-3 mt-2">
                                                    <small class="text-success">Naznin Nahar</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Approved By 3</label>
                                                <div class="col-md-3 col-sm-7 mt-1">
                                                    <input type="text" class="form-control form-control-sm border-success" name="approvededBy3" value="" id="approvedBy3InputField" placeholder="">                           
                                                </div>
                                                {{-- <a href="#" class="col-md-1">Find</a> --}}
                                                <div class="col-md-3 col-sm-3 mt-2">
                                                    <small class="text-success">Polash</small>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">OT Flag</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="OTFlag" id="OTFlagInputField">
                                                        <option selected>No</option>
                                                        <option>Yes</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Machine Name</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="machineName" id="machineNameInputField">
                                                        <option selected>No</option>
                                                        <option>Yes</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Employee Grade</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="employeeGrade" id="employeeGradeInputField">
                                                        <option selected>Grade-05</option>
                                                        <option>Grade-06</option>
                                                        <option>Grade-07</option>
                                                        <option>Grade-08</option>
                                                        <option>Grade-09</option>
                                                        <option>Grade-10</option>
                                                        <option>Grade-11</option>
                                                        <option>Grade-12</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Full Free Accomodation</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="fullFreeAccomodation" id="fullFreeAccomodationInputField">
                                                        <option selected>No</option>
                                                        <option>Yes</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Tax Payment Status</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="taxPaymentStatus" id="taxPaymentStatusInputField">
                                                        <option selected>No</option>
                                                        <option>Yes</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Employee Holiday</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <select class="form-control border-success" aria-label=".form-select-sm example" name="employeeHoliday" id="employeeHolidayInputField">
                                                        <option selected>Friday</option>
                                                        <option>Saturday</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Job Type</label>
                                                <div class="col-md-5 col-sm-7 mt-1">
                                                    <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="jobType" id="jobTypeInputField">
                                                        <option selected>Full Time</option>
                                                        <option>Part Time</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">Bonus Activation</label>
                                                <div class="col-md-7 col-sm-7 mt-1">
                                                    <select class="form-control border-success" name="bonusActivation" id="">
                                                        <option selected>Active</option>
                                                        <option>Not Active</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-5 col-sm-5 mt-2">PF Status</label>
                                                <div class="col-md-7 col-sm-7 mt-1">
                                                    <select class="form-control border-success" name="bonusActivation" id="">
                                                        <option selected>No</option>
                                                        <option>Yes</option>
                                                    </select>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                <div class="row border-success border-bottom mb-5">
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">National ID Card Number</label>
                                            <div class="col-md-7 col-sm-7">
                                                <input type="text" class="form-control form-control-sm border-success" name="nationalIDCardNumber" value="" id="nationalIDCardNumberInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Religion</label>
                                            <div class="col-md-3 col-sm-7">
                                                <select class="form-select form-select-sm border-success mt-1" aria-label=".form-select-sm example" name="religion" id="religionInputField">
                                                    <option selected>Select</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Hindi">Hindi</option>
                                                    <option value="Christian">Christian</option>
                                                    <option value="bodis">bodis</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Number Of Dependent</label>
                                            <div class="col-md-3 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="numberOfDependent" value="" id="numberOfDependentInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Date Of Birth(Actual)</label>
                                            <div class="col-md-3 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="dateOfBirth" value="" id="dateOfBirthInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Height</label>
                                            <div class="col-md-3 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="height" value="" id="heightInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Gender/Sex</label>
                                            <div class="col-md-3 col-sm-7 mt-1">
                                                <select class="form-select form-select-sm border-success" aria-label=".form-select-sm example" name="gender" id="genderInputField">
                                                    <option selected>Select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>                            
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Nominee Name</label>
                                            <div class="col-md-7 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="nomineeName" value="" id="nomineeNameInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Nominee Contact Number</label>
                                            <div class="col-md-7 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="nomineeContactNumber" value="" id="nomineeContactNumberInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-2">Passport No.</label>
                                            <div class="col-md-7 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="passportNo" value="" id="passportNoInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row border-success border-bottom pb-2">
                                            <label for="" class="col-md-5 col-sm-5 mt-2">Passport Issue Date</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="date" class="form-control form-control-sm border-success" name="passportIssueDate" value="" id="passportIssueDateInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row mt-1">
                                            <label for="" class="col-md-5 col-sm-5 mt-2">Name of Principal</label>
                                            <div class="col-md-3 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="nameOfPrincipal" value="" id="nameOfPrincipalInputField" placeholder="">
                                            </div>
                                            <div class="col-md-1 col-sm-7 mt-1">
                                                <button type="submit" class="btn btn-success btn-sm">...</button>
                                            </div>
                                            <div class="col-md-3 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="nameOfPrincipal2" value="" id="nameOfPrincipalInputField2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">ICAB Reg. No.</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="ICABRegNo" value="" id="ICABRegNoInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">ICAB Reg. Date</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="date" class="form-control form-control-sm border-success" name="ICABRegDate" value="" id="ICABRegDateInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">CC Date</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="date" class="form-control form-control-sm border-success" name="ccDate" value="" id="ccDateInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">University</label>
                                            <div class="col-md-7 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="university" value="" id="universityInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Academin Qualification</label>
                                            <div class="col-md-7 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="academinQualification" value="" id="academinQualificationInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Others Profession Reg. No.</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="othersProfessional" value="" id="othersProfessionalInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Cemmencement Month</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="cemmencementMonth" value="" id="cemmencementMonthInputField" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5">Spouse Name</label>
                                            <div class="col-md-7 col-sm-7">
                                                <input type="text" class="form-control form-control-sm border-success" name="spouseName" value="" id="spouseNameInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Nationality</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <select class="form-select form-select-sm border-success" aria-label="form-select-sm example" name="nationality" id="nationalityInputField">
                                                    <option selected>Select</option>
                                                    <option value="Bangladeshi">Bangladeshi</option>
                                                    <option value="Sudi arab">Sudi arab</option>
                                                    <option value="Qatar">Qatar</option>
                                                </select>                          
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Marital Status</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <select class="form-select form-select-sm border-success" aria-label="form-select-sm example" name="maritalStatus" id="maritalStatusInputField">
                                                    <option selected>Select</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                </select>                         
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Date Of Birth(Certificate)</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="date" class="form-control form-control-sm border-success" name="dateOfBirth" value="" id="dateOfBirthInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Weight</label>
                                            <div class="col-md-3 col-sm-7 mt-1">
                                                <input type="number" class="form-control form-control-sm border-success" name="weight" value="" id="weightInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Blood Group</label>
                                            <div class="col-md-3 col-sm-7 mt-1">
                                                <select class="form-select form-select-sm border-success" aria-label="form-select-sm example" name="bloodGroup" id="bloodGroupInputField">
                                                    <option selected>Select</option>
                                                    <option value="Single">A(+ve)</option>
                                                    <option value="Married">B(+ve)</option>
                                                    <option value="Married">AB(+ve)</option>
                                                    <option value="Married">O(+ve)</option>
                                                </select>                         
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Relation With Nominee</label>
                                            <div class="col-md-7 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="relationWithNominee" value="" id="relationWithNomineeInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Wedding Date</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="date" class="form-control form-control-sm border-success" name="weddingDate" value="" id="weddingDateInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Passport Expiry Date</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="date" class="form-control form-control-sm border-success" name="passportExpiryDate" value="" id="passportExpiryDateInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row border-success border-bottom pb-2">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Place Of Birth</label>
                                            <div class="col-md-5 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="placeOfBirth" value="" id="placeOfBirthInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row mt-1">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Level</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <select class="form-select form-select-sm border-success" aria-label="form-select-sm example" name="bloodGroup" id="bloodGroupInputField">
                                                    <option selected>Level</option>
                                                    <option value="Level-1">Level-1</option>
                                                    <option value="Level-2">Level-2</option>
                                                    <option value="Level-3">Level-3</option>
                                                </select>                         
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Paper</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <select class="form-select form-select-sm border-success" aria-label="form-select-sm example" name="bloodGroup" id="bloodGroupInputField">
                                                    <option selected>Paper-1</option>
                                                    <option value="Paper-1">Paper-1</option>
                                                    <option value="Paper-2">Paper-2</option>
                                                    <option value="Paper-3">Paper-3</option>
                                                </select>                         
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Session</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <select class="form-select form-select-sm border-success" aria-label="form-select-sm example" name="bloodGroup" id="bloodGroupInputField">
                                                    <option selected>Session-1</option>
                                                    <option value="Session-1">Session-1</option>
                                                    <option value="Session-2">Session-2</option>
                                                    <option value="Session-3">Session-3</option>
                                                </select>                         
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Year</label>
                                            <div class="col-md-4 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="year" value="" id="yearInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Achievement</label>
                                            <div class="col-md-7 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="achievement" value="" id="achievementInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">ICAB Affiliation No.</label>
                                            <div class="col-md-5 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="ICABAffiliationNo" value="" id="ICABAffiliationNoInputField" placeholder="">
                                            </div>
                                        </div>
                                        <div class="ml-2 col-md-12 row">
                                            <label for="" class="col-md-5 col-sm-5 mt-1">Alternate ID.</label>
                                            <div class="col-md-5 col-sm-7 mt-1">
                                                <input type="text" class="form-control form-control-sm border-success" name="alternateID" value="" id="alternateIDInputField" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-2 text-danger fw-bold">Official Email</label>
                                        <div class="col-md-7 col-sm-8">
                                            <input type="text" class="form-control form-control-sm border-success mt-1" name="officialEmail" value="" id="officialEmailInputField" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-2 text-danger fw-bold">Personal Mobile Number</label>
                                        <div class="col-md-7 col-sm-8">
                                            <input type="text" class="form-control form-control-sm border-success mt-1" name="personalMobileNumber" value="" id="personalMobileNumberInputField" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-2 text-danger fw-bold">Official Mobile Number</label>
                                        <div class="col-md-7 col-sm-8">
                                            <input type="text" class="form-control form-control-sm border-success mt-1" name="officialMobileNumber" value="" id="officialMobileNumberInputField" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-2">Personal Email</label>
                                        <div class="col-md-7 col-sm-8">
                                            <input type="text" class="form-control form-control-sm border-success mt-1" name="personalEmail" value="" id="personalEmailInputField" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-2">Phone Number</label>
                                        <div class="col-md-7 col-sm-8">
                                            <input type="text" class="form-control form-control-sm border-success mt-1" name="phoneNumber" value="" id="phoneNumberInputField" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-2">Fax Number</label>
                                        <div class="col-md-7 col-sm-8">
                                            <input type="text" class="form-control form-control-sm border-success mt-1" name="faxNumber" value="" id="faxNumberInputField" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-2">Emergency Contact Person</label>
                                        <div class="col-md-7 col-sm-8">
                                            <input type="text" class="form-control form-control-sm border-success mt-1" name="emergencyContactPerson" value="" id="faxNumberInputField" placeholder="">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-2">Contact Person Mobile No</label>
                                        <div class="col-md-7 col-sm-8">
                                            <input type="text" class="form-control form-control-sm border-success mt-1" name="contactPersonMobileNo" value="" id="contactPersonMobileNoInputField" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-4">Present Address</label>
                                        <div class="col-md-7 col-sm-8">
                                            <textarea class="form-control border-success mt-1" id="presentAddressTextarea1" rows="3"></textarea>                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-4 col-sm-4 mt-4">Permanent Address</label>
                                        <div class="col-md-7 col-sm-8">
                                            <textarea class="form-control border-success mt-1" id="permanentAddressTextarea1" rows="3"></textarea>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="d-flex justify-content-center mb-5">
                    <button type="submit" class="btn btn-success col-2 mt-2 mr-2">Update</button>
                    <button type="submit" class="btn btn-success col-2 mt-2 ml-2">Back</button>
                </div>
            </form>
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection





