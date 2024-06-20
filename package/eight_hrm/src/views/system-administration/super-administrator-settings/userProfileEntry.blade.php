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
              <li class="breadcrumb-item"><a href="#">Attendance Manager</a></li>
              <li class="breadcrumb-item"><a href="#">Attendance Entry</a></li>
              <li class="breadcrumb-item"><a href="#">Roster Group Update</a></li>
              
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
          {{-- <div class=" col-md-12"> --}}
            <div class="card col-5">
              <div class="card-body">
                
                    <table >
                        <tr>
                            <td><button type="button" class="btn btn-success mb-2">Add</button></td> 
                            <td><button type="button" class="btn btn-primary mb-2">Updae</button></td>  
                            <td><button type="button" class="btn btn-warning mb-2">Clear</button></td> 
                        </tr>
                    </table>

                    <div class="container-fluid justify-content-start">
                    <div class="card bg-light ">
                    <table class="m-2 text-danger">
                        <tr class=" m-2 success ">
                            
                            <td><p class="">Add Photo</p></td>
                            <td><input type="file" class="btn btn-info form-control"></td>
                            <td><button type="button" class="btn btn-success  form-control">Upload</button></td> 
                        </tr>
                    </table>
                </div>
                </div>

                    <table>
                        <tr>
                            <td>Login ID </td>
                            <td><input type="text" value="{{old('loginId')}}" class="form-control" placeholder="Login ID" id="loginId" name="loginId"></td>
                            <td>
                        </tr>
                        <tr>
                            <td>Full Name </td>
                            <td><input type="text" value="{{old('fullName')}}" class="form-control" placeholder="Full Name" name="fullName" id="fullName"></td>
                        </tr>
                        <tr>
                             <td>Email</td>
                            <td><input type="text" value="{{old('email')}}" class="form-control" placeholder="someone@xyz.com" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td>Mobile No</td>
                            <td><input type="text" value="{{old('mobile')}}" class="form-control" placeholder="017..." name="mobile" id="mobile"></td>
                              
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" class="form-control" placeholder="*********" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td>Confirm Pass</td>
                            <td><input type="password-confirm"  class="form-control" placeholder="*********" name="confirmpass" id="confirmpass"></td>
                        </tr>
                        <tr>
                            <td>Permission Rule</td>
                            <td><select class="form-select form-control" value="{{old('permissionrule')}}"  aria-label="Default select example" name="permissionrule" id="permissionrule">
                                <option selected>Select</option>
                                <option value="1">Admin</option>
                                <option value="2">Battery</option>
                                <option value="3">HRM</option>
                              </select>
                              
                        </tr>
                        <tr>
                            <td>Nick Name </td>
                            <td><input type="text" value="{{old('nickName')}}" class="form-control" placeholder="Nick Name" name="nickName" id="nickName"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" value="{{old('address')}}" class="form-control" placeholder="Address" name="address" id="address"></td>
                        </tr>
                        <tr>
                            <td>Phone No</td>
                            <td><input type="text" value="{{old('phone')}}" class="form-control"  name="phone" id="phone"></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><select class="form-select form-control" value="{{old('status')}}"  aria-label="Default select example" name="status" id="status">
                                <option selected>Active</option>
                                <option value="1">Inactive</option>
                                <option value="2">Hold</option>
                                
                              
                        </tr>
                        <tr>
                            <td>Employee ID </td>
                            <td><input type="text" value="{{old('employeeID')}}" class="form-control" placeholder="Employee ID" name="employeeID" id="employeeID"></td>
                            <td><button type="sml-button" class="btn btn-primary">Search</button></td>
                              
                        </tr>
                        <tr>
                            <td>Employee Name </td>
                            <td><input type="text" value="{{old('employeeName')}}" class="form-control" placeholder="Employee Name" name="employeeName"></td>
                              
                        </tr>
                        <tr>
                            <td>Supervisor ID </td>
                            <td><input type="text" value="{{old('supID')}}" class="form-control" placeholder="Supervisor ID" name="supID" id="supID"></td>
                            <td><button type="sml-button" class="btn btn-primary">Search</button></td>
                        </tr>
                        <tr>
                            <td>User's Type</td>
                            <td><select class="form-select form-control" value="{{old('userType')}}"  aria-label="Default select example" name="userType" id="userType">
                                <option selected>Admin User</option>
                                <option value="1">Normal User</option>
                                <option value="2">Password Restricted</option>
                                
                        </tr>
                        <tr>
                            <td>Previous Days Allow</td>
                            <td><input type="number" value="{{old('preDA')}}" class="form-control"  name="preDA" id="preDA"></td>
                        </tr>
                        <tr>
                            <td>Show Voucher</td>
                            <td class="form-control"><input class="form-check-input  form-control" type="checkbox" value="" id="flexCheckDefault">
                            <p>Only User's<p></td>
                          
                        </tr>
                        <tr>   
                            <td>P.O With Workorder</td>
                            <td><input class="form-check-input form-control " type="checkbox" value="" id="flexCheckDefault">
                            </td> 
                        </tr>
                        <tr>
                        <table class="m-2 text-danger">
                        <tr class=" m-2 success ">
                            
                            <td><p class="">Add Signature</p></td>
                            <td><input type="file" class="btn btn-info form-control"></td>
                            <td><button type="button" class="btn btn-success  form-control">Upload</button></td> 
                        </tr>
                        </table>
                        <table class="m-2 text-danger">
                        <tr class=" m-2 success ">
                            
                            <td><p class="">Add Initial</p></td>
                            <td><input type="file" class="btn btn-info form-control"></td>
                            <td><button type="button" class="btn btn-success  form-control">Upload</button></td> 
                        </tr>
                        </table>
                        <table>
                        
                        <tr >
                            <td>Entered By</td>
                            <td><input type="text" class="form-control" value="{{old('enteredBy')}}"   placeholder="" name="enteredBy" id="enteredBy"></td>
                        </tr>
                        <tr >
                            <td>Added Time</td>
                            <td><input type="text"  class="form-control" value="{{old('addedTime')}}" placeholder="" name="addedTime" id="addedTime"></td>
                        </tr>
                        
                        <tr >
                            <td>Updated By</td>
                            <td><input type="text"  class="form-control" value="{{old('updatedBy')}}"  class="primary" placeholder="" name="updatedBy" id="updatedBy"></td>
                        </tr>
                        <tr >
                            <td>Updated Time</td>
                            <td><input type="text" class="form-control" value="{{old('upTime')}}"   placeholder="" name="upTime" id="upTime"></td>
                        </tr>
                        </table>
                     
                    </table>
                    
              </div>
                    
            </div>
            
                <div class="card col-7">
                  <div class="card-body">
                    <div class="row justify-content-end p-2">
                      <div class="form-check md-2">
                          <input class="form-check-input  " type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label text-danger m-2s" for="flexCheckDefault">
                            Create Roster Group
                          </label>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                      
                        <input class="form-control col-md-10 m-2" placeholder="Search for Employee">
                        <button class="btn btn-sm w-2 bg-info">Search</button>
                      
                    </div>
                    <table class=" justify-content-center  table-sm table-bordered">
                        <thead>
                        <tr class="bg-dark">
                            <th  scope="col">Select</th>
                            <th scope="col">User ID </th>
                            <th scope="col">User Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Rule</th>
                        </tr>
                        <tr class="">
                            <td><button class="btn btn-info btn-sm">Select</button></td>
                            <td scope="col">Abdullah Al </td>
                            <td scope="col">Abudullah Al Mamun</td>
                            <td scope="col">000000000</td>
                            <td scope="col">Admin</td>
                        </tr>
                        <tr class="">
                            <td><button class="btn btn-info btn-sm">Select</button></td> 
                            <td scope="col">Abdullah Al </td>
                            <td scope="col">Abudullah Al Mamun</td>
                            <td scope="col">000000000</td>
                            <td scope="col">Admin</td>
                        </tr>
                        <tr class="">
                            <td><button class="btn btn-info btn-sm">Select</button></td>
                            <td scope="col">Abdullah Al </td>
                            <td scope="col">Abudullah Al Mamun</td>
                            <td scope="col">000000000</td>
                            <td scope="col">Admin</td>
                        </tr>

                        
                        </thead>
                    </table>
                  </div>
                </div>
              
        {{-- </div> --}}
            
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