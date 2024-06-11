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
            <h1 class="m-0"> Roster Group Update </h1>
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
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                
                    <table>
                        <tr>
                            <td><button type="button" class="btn btn-success">Add</button></td> 
                            <td><button type="button" class="btn btn-primary">Updae</button></td> 
                            <td><button type="button" class="btn btn-Danger">Delete</button></td> 
                            <td><button type="button" class="btn btn-Warning">Clear</button></td> 
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>Employee ID </td>
                            <td><input type="text" value="{{old('employeeID')}}" class="form-control" placeholder="Employee ID" name="employeeID"></td>
                            <td><button type="sml-button" class="btn btn-primary">Search</button></td>
                        </tr>
                        <tr>
                            <td>Employee Name </td>
                            <td><input type="text" value="{{old('employeeName')}}" class="form-control" placeholder="Employee Name" name="employeeName"></td>
                        </tr>
                        <tr>
                            <td>Company</td>
                            <td><select class="form-select form-control" value="{{old('companyName')}}"  aria-label="Default select example" name="companyName" id="comapnyname">
                                <option selected>Please Select Company</option>
                                <option value="1">Saif Powertec Ltd</option>
                                <option value="2">88Innovations Engineering Ltd.</option>
                                <option value="3">Maxon Power Ltd.</option>
                              </select>
                             
                        </tr>
                        <tr>
                            <td>Branch</td>
                            <td><select class="form-select form-control" value="{{old('branchName')}}"  aria-label="Default select example" name="branchName" id="branchName">
                                <option selected>Please Select Branch</option>
                                <option value="1">Banch 1</option>
                                <option value="2">Banch 2</option>
                                <option value="3">Banch 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td><select class="form-select form-control" value="{{old('deptName')}}"  aria-label="Default select example" name="deptName" id="deptname">
                                <option selected>Please Select Department</option>
                                <option value="1">Department 1</option>
                                <option value="2">Department 2</option>
                                <option value="3">Department 3</option>
                              </select>
                             
                        </tr>
                        <tr>
                            <td>Section</td>
                            <td><select class="form-select form-control" value="{{old('secName')}}"  aria-label="Default select example" name="secName" id="secname">
                                <option selected>Please Select Section</option>
                                <option value="1">Section 1</option>
                                <option value="2">Section 2</option>
                                <option value="3">Section 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td>Sub-Section</td>
                            <td><select class="form-select form-control" value="{{old('subSecName')}}"  aria-label="Default select example" name="subSecName" id="subSecname">
                                <option selected>Please Select Sub-Section</option>
                                <option value="1">Sub-Section 1</option>
                                <option value="2">Sub-Section 2</option>
                                <option value="3">Sub-Section 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td>Floor</td>
                            <td><select class="form-select form-control" value="{{old('floorName')}}"  aria-label="Default select example" name="floorName" id="floorname">
                                <option selected>Please Select Floor</option>
                                <option value="1">Floor 1</option>
                                <option value="2">Floor 2</option>
                                <option value="3">Floor 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td>Employee Category</td>
                            <td><select class="form-select form-control" value="{{old('employeeCategoryName')}}"  aria-label="Default select example" name="employeeCategoryName" id="employeeCategoryname">
                                <option selected>Please Select Employee Category</option>
                                <option value="1">Employee Category 1</option>
                                <option value="2">Employee Category 2</option>
                                <option value="3">Employee Category 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td>Grade</td>
                            <td><select class="form-select form-control" value="{{old('grade')}}"  aria-label="Default select example" name="grade" id="grade">
                                <option selected>Please Select Grade</option>
                                <option value="1">Grade 1</option>
                                <option value="2">Grade 2</option>
                                <option value="3">Grade 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td>Designation</td>
                            <td><select class="form-select form-control" value="{{old('designation')}}"  aria-label="Default select example" name="designation" id="designation">
                                <option selected>Please Select Designation</option>
                                <option value="1">Designation 1</option>
                                <option value="2">Designation 2</option>
                                <option value="3">Designation 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td class="text-danger">Shift</td>
                            <td><select class="form-select form-control" value="{{old('shiftName')}}"  aria-label="Default select example" name="shiftName" id="shiftname">
                                <option selected>Please Select Shift</option>
                                <option value="1">Shift 1</option>
                                <option value="2">Shift 2</option>
                                <option value="3">Shift 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td class="text-danger">Roster Group</td>
                            <td><select class="form-select form-control" value="{{old('rosterGroupName')}}"  aria-label="Default select example" name="rosterGroupName" id="rosterGroupname">
                                <option selected>Please Select Roster Group</option>
                                <option value="1">Roster Group 1</option>
                                <option value="2">Roster Group 2</option>
                                <option value="3">Roster Group 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td class="text-danger">Holiday (1st)</td>
                            <td><select class="form-select form-control" value="{{old('holiday1')}}"  aria-label="Default select example" name="holiday1" id="holiday1">
                                <option selected>Please Select Holiday</option>
                                <option value="1">Holiday 1</option>
                                <option value="2">Holiday 2</option>
                                <option value="3">Holiday 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td class="text-danger">Holiday (2nd)</td>
                            <td><select class="form-select form-control" value="{{old('holiday2')}}"  aria-label="Default select example" name="holiday2" id="holiday2">
                                <option selected>Please Select Holiday</option>
                                <option value="1">Holiday 1</option>
                                <option value="2">Holiday 2</option>
                                <option value="3">Holiday 3</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><select class="form-select form-control" value="{{old('gender')}}"  aria-label="Default select example" name="gender" id="gender">
                                <option selected>Please Select Gender</option>
                                <option value="1"> Male</option>
                                <option value="2"> Female</option>
                                <option value="3"> Others</option>
                              </select>
                              
                        </tr>
                        <tr>
                        <td>OT Status</td>
                        <td><select class="form-select form-control" value="{{old('otStatus')}}"  aria-label="Default select example" name="otStatus" id="otStatus">
                            <option selected>Please Select OT Staus</option>
                            <option value="1"> Status 1</option>
                            <option value="2"> Status 2</option>
                            <option value="3"> Status 3</option>
                          </select>
                          
                        </tr>
                        <tr>   
                        <td>Job Type</td>
                        <td><select class="form-select form-control" value="{{old('jobTye')}}"  aria-label="Default select example" name="jobTye" id="jobType">
                            <option selected>Please Select Job Type</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                          </select>
                        </td> 
                        </tr>
                        <tr>
                        <td>Joining Date </td>
                        <td><input type="date" value="{{old('joiningDate')}}"  class="form-control" placeholder="Joining Date" name="joiningDate" id="joiningDate"></td>
                        </tr>
                        <tr>
                        <td>Short Name</td>
                        <td><input type="text" value="{{old('shortName')}}"  class="form-control" placeholder="Short Name" name="shortName" id="shortName"></td>
                        </tr>
                        <tr>
                        <td>Father's Name </td>
                        <td><input type="text" value="{{old('fatherName')}}"  class="form-control" placeholder="Father's Name" name="fatherName" id="fatherName"></td>
                        </tr>
                        <tr>
                        <td>Mother's Name</td>
                        <td><input type="text" value="{{old('motherName')}}"  class="form-control" placeholder="Mother's Name" name="motherName" id="motherName"></td>
                        </tr>
                        <tr>   
                            <td>Current Status</td>
                            <td><select class="form-select form-control" value="{{old('currentStatus')}}"  aria-label="Default select example" name="currentStatus" id="currentStatus">
                                <option selected>Please Select Current Status</option>
                                <option value="1"> Active</option>
                                <option value="2"> Inactive</option>
                                <option value="3"> Hold</option>
                              </select>
                            </td> 
                            </tr>
                            <tr>
                                <td>Entered By</td>
                                <td><input type="text" value="{{old('enteredBy')}}"  class="form-control" placeholder="Mother's Name" name="enteredBy" id="enteredBy"></td>
                            </tr>
                            <tr>
                                <td>Mother's Name</td>
                                <td><input type="text" value="{{old('updatedBy')}}"  class="form-control primary" placeholder="Mother's Name" name="updatedBy" id="updatedBy"></td>
                            </tr>
                     
                    </table>
              </div>
            </div>
          </div>
    </div>
                
                
                
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