@extends('eight_hrm::layouts.app')

@section('title', 'Home')

@section('content')
<style>
    .list_area{
                height: 350px;
                overflow: auto;
            }
</style>
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
                    @include('eight_hrm::message.message')
                    </div>
                    <div class="card-body d-flex justify-content-center">
                    <form method="POST" action="{{ url('hrm/sys_code_type') }}">
                            @csrf
                            <table>
                            <tbody>
                                <tr>
                                    <td class="text-right"><label for="">Code Type</label></td>
                                    <td>
                                       <input type="hidden" name="id" id="code_type_id" value="0">
                                        <input type="text" class="form-control" name="type" id="code_type" value="{{old('code_type')}}">
                                    </td>
                                    
                                </tr>
                              
                                <tr>
                                    <td class="text-center" colspan="2">
                                      <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                     
                                      <a href="{{url('hrm/sys_code_type')}}" class="btn btn-sm btn-primary">Clear</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            
                        </form>
                     
                      
                    </div>
                </div>
                
  
              
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header text-center bg-primary">
                    
                </div>
                <div class="card-body list_area">
                   
                   
                    <div class="d-flex justify-content-center">
                        <table class="table">
                            <tbody>
                                @forelse($datas as $data)
                                <tr>
                                    <td class="text-left">
                                      <button class="btn btn-sm btn-info edit_button"
                                      attr_id="{{$data->id}}"
                                      attr_type="{{$data->type}}"
                                      >Edit</button>
                                      <a class="btn btn-sm btn-danger delete_button"
                                      href="{{url('hrm/sys_code_type/destroy')}}/{{$data->id}}"
                                      
                                      >Delete</a>
                                    </td>
                                    <td class="text-left">{!! $data->id ?? '' !!}</td>
                                    <td class="text-left">{!! $data->type ?? '' !!}</td>
                                </tr>
                               @empty
                               @endforelse
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

    $(document).on('click',".edit_button",function(){
      var id = $(this).attr('attr_id');
      var type = $(this).attr('attr_type');
      $(document).find("#code_type_id").val(id);
      $(document).find("#code_type").val(type)
    })
  
</script>
@endsection