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
            <h1 class="m-0">Monthly Attendance Lock</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Attendance</a></li>
              <li class="breadcrumb-item active">Monthly Attendance Lock</li>
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
                        Attendance Lock(Monthly)
                    </div>
                    <div class="card-body justify-content-center">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-right"><label for="year">Year</label></td>
                                    <td>
                                        <input type="date" name="year" id="year" class="form-control" value="{{ old('year') }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="month">Month</label></td>
                                    <td>
                                        <select class="form-control" name="month" id="month">
                                            <option value="january">January</option>
                                            <option value="february">February</option>
                                            <option value="march">March</option>
                                            <option value="april">April</option>
                                            <option value="may">May</option>
                                            <option value="june">June</option>
                                            <option value="july">July</option>
                                            <option value="august">August</option>
                                            <option value="september">September</option>
                                            <option value="october">October</option>
                                            <option value="november">November</option>
                                            <option value="december">December</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="3">
                                        <button class="btn btn-sm btn-primary">Process</button>
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
                    Attendance Lock(Daily)
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th></th>
                            <th>2024-06-06</th>
                            <th>Lock Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">lock</button></td>
                                <td>2024-06-06</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">lock</button></td>
                                <td>2024-06-06</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">lock</button></td>
                                <td>2024-06-06</td>
                                <td></td>
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