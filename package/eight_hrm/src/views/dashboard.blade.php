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
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
              	<ul>
              		<li><a href="{{route('payment_slip_report')}}" class="card-link">Payment Slip Report</a></li>
              		<li><a href="#" class="card-link">Monthly Income TAX Report</a></li>
              		<li><a href="#" class="card-link">Payment Slip Cumulative Report</a></li>
              		<li><a href="#" class="card-link">Leave Details Report</a></li>
              		<li><a href="#" class="card-link">Appraisal Details Report</a></li>
              		<li><a href="#" class="card-link">Loan / Advance Details Report</a></li>
              		<li><a href="#" class="card-link">Jobcard / Movement Report</a></li>
              		<li><a href="#" class="card-link">Monthwise Payment Report</a></li>
              		<li><a href="#" class="card-link">Event Calendar</a></li>
              	</ul>
                
                
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
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