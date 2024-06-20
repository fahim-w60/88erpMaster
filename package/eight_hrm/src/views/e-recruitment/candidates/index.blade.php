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
            <h1 class="m-0"> Candidates List </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('candidates.create') }}">Create New</a></li>
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
               
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                         
                         <th class="">Action</th>
                         <th>Candidate Name</th>
                         <th>Phone</th>
                         <th>Email</th>
                         <th>CV</th>
                         <th>Status</th>          
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="display: flex;">
                           
                                <a href=""
                                  
                                  class="btn btn-sm btn-default  mr-1"><i class="fa fa-eye"></i></a>


                                
                                  <a   
                                  href=""
                                  
                                  class="btn btn-sm btn-default  mr-1"><i class="fa fa-pen "></i></a>

                                 
                                      <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-sm btn-default"><i class="fa fa-trash _required"></i></button>
                                  
                               
                        </td>

                             
                            
                            <td>Atiqur Rahman</td>
                            <td>123456789</td>
                            <td>atiq@gmail.com</td>
                            <td><button class="btn btn-xs btn-success">View CV</button></td>
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


            