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
            <h1 class="m-0"> Daily Attendance Modify By Admin </h1>
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
        <div class="row">
          <div class="col-md-12">
            <div class="card shadow">
              <div class="card-body ">
                <div class="row justify-content-end p-2">
                  <div class="form-check md-2">
                      <input class="form-check-input  " type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label text-danger m-2s" for="flexCheckDefault">
                        Date Wise Attendance Update
                      </label>
                    </div>
                </div>
              	 
                <table class="table table-border table-sm">
                    <tr class="bg-info  form-contrl ">
                        <td class=" w-5 justify-content-center">Select Date</td>
                        <td><input class="form-control" type="date" placeholder="" name="adminAttenModDate" id="adminAttenModDate"></td>
                        <td><input class="form-control" type="text" placeholder="" name="adminAttenModDate" id="adminAttenModDate"></td>
                        <td><button src="#" class="bg-warning btn btn-sm form-control">Load</button></td>
                        <td><button src="#" class="bg-light btn btn-sm form-control">Update</button></td>
                    </tr>
                </table>
                <div class="card col-12">
                    <div class="card-body d-flex justify-content-center">
                     
                      <table class="   table-sm table-bordered">
                          <thead>
                          <tr class="bg-dark">
                              <th width="">Employee ID </th>
                              <th width="">Employee Name</th>
                              <th width="">In Time</th>
                              <th width="">Out Time</th>
                              <th width="">Shift</th>
                              <th width="">Status</th>
                              <th width="5%">Select Status</th>
                              <th width="5%">Remarks</th>
                              <th width="">Changed By</th>
                              <th width="">View From Log</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr class="">
                            <td class="from-contrl" scope="col">IEL-000000</td>
                            <td class="from-contrl" scope="col">John Smith</td>
                            <td > <input class="form control" name="inTime" id="inTime"> </td>
                            <td  scope="col"> <input class="form control" name="outTime" id="outTime"></td>
                            <td class="from-contrl" scope="col">G</td>
                            <td class="from-contrl" scope="col">P</td>
                            
                            <td><select class="form-select form-control" aria-label="Default select example" name="selectStatus" id="selectStatus">
                                <option selected>Select Status</option>
                                <option value="1"> A </option>
                                <option value="2"> CML</option>
                                <option value="3"> P </option>
                                <option value="3"> L </option>
                                <option value="3"> EO </option>
                                <option value="3"> LE </option>
                                <option value="3"> PM </option>
                                <option value="3"> WO </option>
                                <option value="3"> GH </option>
                              </select>
                            </td>
                            <td scope="col"><input class="form control" name="outTime" id="outTime"></td>
                            <td class="from-contrl" scope="col">David</td>
                            <td scope="col"> <button class="from-contrl btn btn-sml btn-info">View</td>
                          </tr>
                          <tr class="">
                            <td class="from-contrl" scope="col">IEL-000000</td>
                            <td class="from-contrl" scope="col">John Smith</td>
                            <td > <input class="form control" name="inTime" id="inTime"> </td>
                            <td  scope="col"> <input class="form control" name="outTime" id="outTime"></td>
                            <td class="from-contrl" scope="col">G</td>
                            <td class="from-contrl" scope="col">P</td>
                            
                            <td><select class="form-select form-control width_150_px" aria-label="Default select example" name="selectStatus" id="selectStatus">
                                <option selected>Select Status</option>
                                <option value="1"> A </option>
                                <option value="2"> CML</option>
                                <option value="3"> P </option>
                                <option value="3"> L </option>
                                <option value="3"> EO </option>
                                <option value="3"> LE </option>
                                <option value="3"> PM </option>
                                <option value="3"> WO </option>
                                <option value="3"> GH </option>
                              </select>
                            </td>
                            <td scope="col"><input class="form control" name="outTime" id="outTime"></td>
                            <td class="from-contrl" scope="col">David</td>
                            <td scope="col"> <button class="from-contrl btn btn-sml btn-info">View</td>
                          </tr>
                          <tr class="">
                            <td class="from-contrl" scope="col">IEL-000000</td>
                            <td class="from-contrl" scope="col">John Smith</td>
                            <td > <input class="form control" name="inTime" id="inTime"> </td>
                            <td  scope="col"> <input class="form control" name="outTime" id="outTime"></td>
                            <td class="from-contrl" scope="col">G</td>
                            <td class="from-contrl" scope="col">P</td>
                            
                            <td><select class="form-select form-control" aria-label="Default select example" name="selectStatus" id="selectStatus">
                                <option selected>Select Status</option>
                                <option value="1"> A </option>
                                <option value="2"> CML</option>
                                <option value="3"> P </option>
                                <option value="3"> L </option>
                                <option value="3"> EO </option>
                                <option value="3"> LE </option>
                                <option value="3"> PM </option>
                                <option value="3"> WO </option>
                                <option value="3"> GH </option>
                              </select>
                            </td>
                            <td scope="col"><input class="form control" name="outTime" id="outTime"></td>
                            <td class="from-contrl" scope="col">David</td>
                            <td scope="col"> <button class="from-contrl btn btn-sml btn-info">View</td>
                          </tr>
                        </tbody>
                      </table>
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