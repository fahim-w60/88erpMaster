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
            <h1 class="m-0"> Employee Wise Attendance Modify By Admin </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Attendance Management</a></li>
              <li class="breadcrumb-item active"><a href="#">Attendance Entry</li>
              
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
            <div class="card">
              <div class="card-body">
              	  <div class="row justify-content-end p-2">
                    <div class="form-check md-2">
                        <input class="form-check-input  " type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-danger m-2s" for="flexCheckDefault">
                          Attendance Update Sheet
                        </label>
                      </div>
                  </div>
                <table class="table table-border table-sm">
                    <tr class="bg-info  form-contrl ">
                        <td class=" w-5 justify-content-center ">Employee ID</td>
                        <td><input class="form-control" type="text" placeholder="" name="employeeId" id="employeeID"></td>
                        <td><button class="btn btn-sm bg-warning form-control">Find</button>
                        <td><input class="form-control bg-success" type="text" placeholder="" name="adminAttenModDate" id="adminAttenModDate"></td>
                        <td>Year</td>
                        <td><input type="Text"  class="form-control" placeholder="2024" name="employeeName"></td>
                        <td>Month</td>
                        <td><select class="form-select form-control" aria-label="Default select example" name="month" id="month">
                            <option selected>Select Month</option>
                            <option value="1"> January </option>
                            <option value="2"> February</option>
                            <option value="3"> March </option>
                            <option value="3"> April </option>
                            <option value="3"> May </option>
                            <option value="3"> June </option>
                            <option value="3"> July </option>
                            <option value="3"> August </option>
                            <option value="3"> September </option>
                            <option value="3"> October </option>
                            <option value="3"> November </option>
                            <option value="3"> December </option>
                          </select>
                        </td>
                        <td><button src="#" class="bg-warning btn btn-sm form-control">Load</button></td>
                        <td><button src="#" class="bg-light btn btn-sm form-control">Update</button></td>
                    </tr>
                </table>
                
                
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