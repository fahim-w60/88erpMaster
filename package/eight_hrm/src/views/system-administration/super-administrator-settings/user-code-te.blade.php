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
            <h1 class="m-0"> User Wise Code Type Entry </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Sys Administration</a></li>
              <li class="breadcrumb-item"><a href="#">Sup-admin-settings</a></li>
              <li class="breadcrumb-item"><a href="#">User Wise Code Type Entry</a></li>
              
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
                            <td><button type="button" class="btn btn-danger mb-2">Delete</button></td> 
                            <td><button type="button" class="btn btn-warning mb-2">Clear</button></td> 
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td>User ID </td>
                            <td><select class="form-select form-control" value="{{old('userId')}}"  aria-label="Default select example" name="userId" id="userId">
                                <option selected>Select</option>
                                <option value="1">Admin</option>
                                <option value="2">Battery</option>
                                <option value="3">HRM</option>
                              </select></td>
                            
                            
                        </tr>
                        <tr>
                            <td>Codes Type </td>
                            <td><select class="form-select form-control" value="{{old('codestype')}}"  aria-label="Default select example" name="codestype" id="codestype">
                                <option selected>Select</option>
                                <option value="1">Department</option>
                                <option value="2">Designation</option>
                                <option value="3">Division</option>
                              </select>    
                            </td>                    
                        </tr>
                        <tr>
                             <td>Remarks</td>
                            <td><textarea  type="text " value="{{old('remarks')}}" class="form-control" placeholder="" name="remarks" id="remarks"></textarea></td>
                        </tr>
                        
                        
                        <tr >
                            <td>Entered By</td>
                            <td><input type="text" class="form-control" value="{{old('enteredBy')}}"   placeholder="" name="enteredBy" id="enteredBy"></td>
                        </tr>
                        
                        <tr >
                            <td>Last Updated By</td>
                            <td><input type="text"  class="form-control" value="{{old('updatedBy')}}"  class="primary" placeholder="" name="updatedBy" id="updatedBy"></td>
                        </tr>
                        </table>
                     
                    </table>
                    
              </div>
                    
            </div>
            
                <div class="card col-7">
                <div class="container-fluid">
                  <div class="card-body">
                    <div class="row justify-content-end p-2">
                      <div class="form-check md-2">
                          <input class="form-check-input  " type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label text-danger m-2s" for="flexCheckDefault">
                            User Wise Code Type Entry
                          </label>
                        </div>
                    </div>
                    
                    
                    
                    <table class=" justify-content-center  table-sm table-bordered">
                        <thead>
                        <tr class="bg-dark justify-content-center">
                            <th  class="w-25 ">Select</th>
                            <th class="w-25">User ID </th>
                            <th class="w-25">Codes Type</th>
                            <th class="w-25">Remarks</th>
                        </tr>
                        <tr class="">
                            <td><button class="btn btn-info btn-sm">Select</button></td>
                            <td class="w-25">Pulok </td>
                            <td class="w-25">Branch</td>
                            <td class="w-25">It is an example remarks</td>                     
                        </tr>
                        <tr class="">
                            <td><button class="btn btn-info btn-sm">Select</button></td>
                            <td class="w-25">Pulok </td>
                            <td class="w-25">Branch</td>
                            <td class="w-25">It is an example remarks</td>                     
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