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
            <h1 class="m-0">Code Type setup</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User settings</a></li>
              <li class="breadcrumb-item active">Code Type Setup</li>
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                       
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="text-right"><label for="">Code Type</label></td>
                                    <td>
                                        <input type="text" name="code_type" id="code_type" value="{{old('code_type')}}">
                                    </td>
                                </tr>
                              
                                <tr>
                                    <td class="text-center" colspan="3">
                                        <button class="btn btn-sm btn-primary">Save</button>
                                        <button class="btn btn-sm btn-primary">Delete</button>
                                        <button class="btn btn-sm btn-primary">Clear</button>
                                        <button class="btn btn-sm btn-primary">Add Code</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
  
              
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header text-center bg-primary">
                    
                </div>
                <div class="card-body">
                   
                   
                    <div class="d-flex justify-content-center">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-center"><button class="btn btn-sm btn-primary">Account Number</button></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><button class="btn btn-sm btn-primary">Attendance Status</button></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><button class="btn btn-sm btn-primary">Bank</button></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><button class="btn btn-sm btn-primary">Bank Advice Letter</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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