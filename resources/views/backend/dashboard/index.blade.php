@extends('backend.layouts.app')
@section('title',$page_name ?? '')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
     
    </div>
    
    <!-- /.content-header -->
<div class="content">
      <div class="container-fluid">
       <div class="col-md-4">
            <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <a href="{{route('hrm-dashboard')}}" class="btn btn-info">HRM Dashboard</a>
            </div>
            <div class="card-footer"></div>
        </div>
       </div>
    </div>
</div>
@endsection