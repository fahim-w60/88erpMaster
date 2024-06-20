@extends('eight_hrm::layouts.app')
@section('title', 'Home')
@section('content')
<style>
    .input-group .form-control {
                height:32px !important;
            }
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Candidates Info From</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('candidates.index') }}">List</a></li>
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
                        <div class="card-body" style="">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleId">ID</label>
                                        <div class="rlpno_style">CAN-0003</div>
                                        <input type="hidden" name="candidate_id" value="CAN-0003">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Candidate Name</label>
                                        <input type="text" class="form-control form-control-sm" id="name" placeholder="Enter name" name="name" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Candidate Email</label>
                                        <input type="text" class="form-control form-control-sm" id="email" placeholder="Enter phone" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Candidate Phone</label>
                                        <input type="text" class="form-control form-control-sm" id="phone" placeholder="Enter phone" name="phone" required="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date of Birth</label>
                                        <input name="dob" type="text" class="form-control form-control-sm hasDatepicker" id="rlpdate" value="2024-06-20" size="30" autocomplete="off" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="background-color:#222D32;margin:1px;padding:5px;border-radius:5px;color:#fff;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleId">Forwarded/Referred By:</label>
                                        <select class="all_emplyees form-control form-control-sm" name="referred_by" id="req_by" onchange="get_requested_by_information();" required="" tabindex="0" aria-hidden="false">
                                            <option value="">Please select</option>
                                            <option value="ENG-000610"> Ahammad Ali (ENG-000610)</option>
                                            
                                </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="division/company">Division/Company</label>
                                        <input class="form-control form-control-sm" type="text" id="req_by_division" name="req_by_division">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="division/company">Department</label>
                                        <input class="form-control form-control-sm" type="text" id="department_id" name="req_by_department">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="division/company">Designation</label>
                                        <input class="form-control form-control-sm" type="text" id="designation" name="req_by_designation">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="division/company">Last Exam/Degree Title</label>
                                        <input class="form-control form-control-sm" type="text" id="designation" name="last_degree_title">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="division/company">Last Degree Subject</label>
                                        <input class="form-control form-control-sm" type="text" id="designation" name="last_degree_sub">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="division/company">Last Degree Institution</label>
                                        <input class="form-control form-control-sm" type="text" id="designation" name="last_degree_ins">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="division/company">Passing Year</label>
                                        <input class="form-control form-control-sm" type="text" id="designation" name="pasing_year">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="division/company">Total Experience</label>
                                        <input class="form-control form-control-sm" type="text" id="designation" name="total_exp">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="division/company">Experience With DDC</label>
                                        <input class="form-control form-control-sm" type="text" id="designation" name="exp_with_ddc">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleId">Upload CV</label>
                                        <input class="form-control form-control-sm" type="file" id="" name="sn_prt_cv" required="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="division/company">RRR No</label>

                                        <select class="form-control form-control-sm select2" id="rrr_no" name="rrr_no" required="" tabindex="0" aria-hidden="false">
                                            <option value="">Please select</option>
                                            <option value="1">RRR-2022-05-Corporate-IT-0001 || Post Name - Assistant</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="division/company">Designation</label>
                                        <select class="form-control form-control-sm" id="designation" name="designation">
                                            <option value="">Please select</option>
                                            <option value="11">3D Modeler</option>
                                                    
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleId">Expected Salary</label>
                                        <input class="form-control form-control-sm" type="text" id="" name="expected_salary">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleId">Remarks</label>
                                        <textarea class="form-control form-control-sm" id="" name="remarks"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block" >
                                    </div>
                                </div>
                            <!-- /.box-body -->
                            </div>
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







