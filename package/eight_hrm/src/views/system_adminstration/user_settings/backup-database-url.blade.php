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
            <h1 class="m-0">Bckup Database IN (URL)</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User Settings</a></li>
              <li class="breadcrumb-item active">Backup Database IN (URL)</li>
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
                <div class="card-body d-flex justify-content-center">
                    <table class="">
                        <tbody>
                            <tr>
                                <td class="text-right"><label>File Name</label></td>
                                <td><input class="form-control" type="texy" name="backup_file" id="backup_file" value="{{old('backup_file')}}"></td>
                            </tr>
                            <tr>
                                <td colspan="4" class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-primary">Backup</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
        flatpickr("#date", {
            enableTime: true,
            dateFormat: "Y-m-d",
            defaultDate: "{{ old('date') }}"
        });
    });
  
</script>
@endsection