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
            <h1 class="m-0">Code setup</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User settings</a></li>
              <li class="breadcrumb-item active">Code Setup</li>
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
                                        <select class="form-control" name="code_type" id="code_type">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Code Name</label></td>
                                    <td><input class="form-control" type="text" name="code_name" id="code_name" value="{{old('code_name')}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Description</label></td>
                                    <td><textarea name="description" id="description" cols="30" rows="2"></textarea></td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Transaction Type</label></td>
                                    <td>
                                        <select class="form-control" name="transaction_type" id="transaction_type">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </select>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Status</label></td>
                                    <td>
                                        <select class="form-control" name="status" id="status">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </select>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Entered By</label></td>
                                    <td><input class="form-control" type="text" name="eneterd_by" id="eneterd_by" value="{{old('eneterd_by')}}"></td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-right"><label for="">Updated By</label></td>
                                    <td><input class="form-control" type="text" name="updated_by" id="updated_by" value="{{old('updated_by')}}"></td>
                                    
                                </tr>
                               
                                <tr>
                                    <td class="text-center" colspan="3">
                                        <button class="btn btn-sm btn-primary">Add</button>
                                        <button class="btn btn-sm btn-primary">Update</button>
                                        <button class="btn btn-sm btn-primary">Delete</button>
                                        <button class="btn btn-sm btn-primary">clear</button>
                                        <button class="btn btn-sm btn-primary">clear</button>
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
                    <div class="col-md-12"> 
                        <div class="row">
                            <div class="col-md-10">
                                <input class="form-control" type="search" id="query" name="q" placeholder="Search...">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-md btn-primary">Search</button>
                            </div>
                          
                        </div>
                    </div>
                   
                    <table class="table">
                        <thead>
                            <th>Code</th>
                            <th>Code Type</th>
                            <th>Description</th>
                            <th>Status</th>
                           
                        </thead>
                        <tbody>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">Maxon Power</button></td>
                                <td>company</td>
                                <td></td>
                                <td>Active</td>
                                
                            </tr>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">Maxon Power</button></td>
                                <td>company</td>
                                <td></td>
                                <td>Active</td>
                                
                            </tr>
                            <tr>
                                <td><button class="btn btn-sm btn-primary">Maxon Power</button></td>
                                <td>company</td>
                                <td></td>
                                <td>Active</td>
                                
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