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
            <h1 class="m-0"> Inactive User Process </h1>
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
                 <div class="container-fluid d-flex justify-content-center">
                    <div class="card w-50 ">
                        <div class="card-header d-flex justify-content-center bg-info"> Inactive User Process </div>

                        <table class="m-5">
                            <tr>
                                <td class="text-danger d-flex justify-content-end align-self-center">Minimum days of Not Login</td>
                                <td><input type="number" class="form-control w-75" name="inactiveUser" id="inactiveUser"></td>
                            </tr>
                        </table>
                        <table>
                            <tr >
                                <td class="d-flex justify-content-center p-2 mb-4"><button class="btn btn-success">Inactive Process</button></td>
                            </tr>
                        </table>

                     
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
       

