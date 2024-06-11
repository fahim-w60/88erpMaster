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
            <h1 class="m-0">Roaster Sheet Generate Process</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Attendance</a></li>
              <li class="breadcrumb-item active">Roaster Sheet Generate Process</li>
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
           
                <div class="col-md-12 mt-2">
                    <div class="row">
                    <div class="col-md-3">
                        <label for="">Company</label>
                        <select class="form-control" name="company" id="company">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            </select>
                    </div>
                    <div class="col-md-3">
                        <label for="">Division</label>
                        <select class="form-control" name="division" id="division">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            </select>
                    </div>
                    <div class="col-md-3">
                        <label for="">Branch</label>
                        <select class="form-control" name="branch" id="branch">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            </select>
                    </div>
                    <div class="col-md-3">
                        <label for="">Department</label>
                        <select class="form-control" name="department" id="department">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            </select>
                    </div>
                    <div class="col-md-3">
                        <label for="">Group & Year</label>
                        <div class="d-flex">
                            <select class="form-control" name="group" id="group">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                            <input type="number" name="year" id="year" value="{{old('year')}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="">Start Date</label>
                        <input class="form-control" name="start_date" id="start_date" value="{{old('start_date')}}">
                    </div>
                    <div class="col-md-3">
                        <label for="">Limit Days</label>
                        <input type="number" class="form-control" name="limit_days" id="limit_days" value="{{old('limit_days')}}">
                    </div>
                    <div class="col-md-3">
                        <div style="margin-top: 34px;">
                            <button class="btn btn-sm btn-primary">Process</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </div>
                    </div>
                    </div>
                </div>
            
            

              <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header text-center bg-primary">
                            All Shift List
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>#</th>
                                    <th>Shift Name</th>
                                    <th>Shift Description</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><button class="btn btn-sm btn-primary">ADD</button></td>
                                        <td>CFS</td>
                                        <td>CFS</td>
                                    </tr>
                                    <tr>
                                        <td><button class="btn btn-sm btn-primary">ADD</button></td>
                                        <td>D</td>
                                        <td>(9am - 6pm)</td>
                                    </tr>
                                    <tr>
                                        <td><button class="btn btn-sm btn-primary">ADD</button></td>
                                        <td>D1</td>
                                        <td>(9:15 - 20:30)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  <div class="col-md-6">
                    <div class="card-header text-center bg-primary">
                        Selected Shift List
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Shift Name</th>
                                <th>Shift Description</th>
                                <th>Serial</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><button class="btn btn-sm btn-primary">Delete</button></td>
                                    <td>CFS</td>
                                    <td>CFS</td>
                                    <td>1</td>
                                </tr>
                             
                            </tbody>
                        </table>
                    </div>
                  </div>
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

// document.addEventListener('DOMContentLoaded', function() {
//         flatpickr("#year", {
//             enableTime: true,
//             dateFormat: "Y-m-d",
//             defaultDate: "{{ old('year') }}"
//         });
//     });

    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#start_date", {
            enableTime: true,
            dateFormat: "Y-m-d",
            defaultDate: "{{ old('start_date') }}"
        });
    });
  
</script>
@endsection