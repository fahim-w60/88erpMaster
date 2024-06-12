@extends('eight_hrm::layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <style>
    
  </style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Evaluate From Interview</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('interview-evaluation.index') }}">List</a></li>
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
              <div class="card-body p-4">
                <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleId">Date</label>
                                    <input name="date" type="text" class="form-control" id="rlpdate" value="2024-05-13" size="30" autocomplete="off" required />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="exampleId">Interview ID</label>
                                    <select class="all_emplyees form-control" name="int_id" id="int_id" required >
                                      <option value="">Please select</option>
                                      <option value="INT-0001" >INT-0001</option>
                                      <option value="INT-0002" selected>INT-0002</option>
                                      <option value="INT-0003" >INT-0003</option>
                                      <option value="INT-0004" >INT-0004</option>
                                      <option value="INT-0005" >INT-0005</option>
                                      <option value="INT-0006" >INT-0006</option>
                                      <option value="INT-0007" >INT-0007</option>
                                      <option value="INT-0008" >INT-0008</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 mt-1">
                            <div class="col-sm-6">
                                <input type="submit" name="evaluation_create" id="submit" class="btn btn-block btn-primary" value="Next" />
                            </div>
                        </div>


                        
                        <div class="row text-center">
                           <div class="col-md-12 mb-5" style="background-color:#CDEFF7;">
                               <h3>Candidates Evaluation Form</h3>
                               <table class="table table-bordered" style="background-color:#fff;">
                                   <tr>
                                       <td>Interview Details : INT-0002 | Interview Date : 17th April 2022</td>
                                   </tr>
                                   <tr>
                                       <td>Interviewer :----- </td>
                                   </tr>
                               </table>
                           </div>
                           <div class="col-md-12">
                            <table class="table table-bordered _list_table">
                                <thead>
                                  <tr>
                                   
                                    <th class="">Action</th>
                                   <th>Candidates</th>
                                   <th>Expected Salary</th>
                                   <th>Agreed Salary</th>
                                   
                                             
                                </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                      <td style="display: flex;">
                                     
                                          <a href=""
                                            
                                            class="btn btn-sm btn-danger mr-1" data-toggle="modal" data-target="#evaluateModal">Evaluate</a>
                                            {{-- <a   
                                            href=""
                                            
                                            class="btn btn-sm btn-default  mr-1"></a> --}}
          
                                           
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailModal">Details</button>
                                      </td>
                                      <td>dfg</td>
                                      <td>dfgd</td>
                                      <td>dfg</td>
                                   </tr>
                                  </tbody>
                              </table>
                           </div>
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



<div class="modal fade bd-example-modal-lg" id="evaluateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <div class="row text-center">
                    <div class="col-md-12">
                        <h3>Candidates Evaluation Details</h3>
                    </div>
                    <div class="col-md-12">
                        <p>Interview Details : INT-0002 | Interview Date : 17th April 2022<br>
                        Candidates Name : Khayrul Alam | Position : Assistant<br>
                        Interviewer : ---</p>
                        <input type="hidden" class="form-control" value="INT-0002" name="int_id" />
                        <input type="hidden" class="form-control" value="25" name="can_id" />
                    </div>
                  </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6" style="">Criteria</div> 
                        <div class="col-md-4" style="">Comments</div> 
                        <div class="col-md-2" style="">Rating</div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>01. Education<br><small>(Does candidate's educational qualification or trainings received meet the requirement for the position)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="education_remarks" /></div> 
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="4" name="education" /></div>  
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>02. Experience<br><small>(Does the candidate have minimum and relevant working experience?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="5" name="experience" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>03. Presentation<br><small>(Was the candidate well aware for self presentation in the interview?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="presentation" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>04. Knowledge of Company and Position<br><small>(Did the candidate research about the organization and the position prior to the interview?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="know_com_pos" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>05. Communication<br><small>(How were the candidate's communication skills during the interview?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="communication" /></div>  
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>06. Attitude & Body Language<br><small>(Did the candidate demonstrate positive attitude and body language during the interview?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="attitude" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>07. Teamwork<br><small>(Did the candidate possess the willingness to work in teams?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="teamwork" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>08. Leadership<br><small>(Did the candidate demonstrate the ability to lead a team?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="leadership" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>09. Technical Know-how<br><small>(Does the candidate possess proper understanding of the industry and work segment where s/he currently is?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="technical_know" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>10. Willingness to take on challenges and changes<br><small>(Did the candidate demonstrate his/her willingness to take on new challenges and accept change?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="willingness" /></div>  
                    </div>
                    <hr>
                    <div class="row"> 
                        <div class="col-md-6" style="">
                            <div class="form-group">
                                <label for="exampleId">Comments :</label>
                                <textarea class="form-control" name="remarks"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleId">Final Recommendation :</label>
                                <div class="radio">
                                    <label><input type="radio" name="final_recommendation" value="1" > <span class=""> Suitable</span> </label></br>
                                    <label><input type="radio" name="final_recommendation" value="2" checked> <span class=""> Recommend for other position</span> </label> </br>
                                    <label><input type="radio" name="final_recommendation" value="3" > <span class=""> Hold for Comparison</span> </label></br>
                                    <label><input type="radio" name="final_recommendation" value="4" > <span class=""> Reject</span> </label>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6" style="">
                            <div class="form-group">
                                <label for="exampleId">Final Score :</label>
                                <input type="text" class="form-control" value="0" name="final_score" />
                            </div>
                            <div class="form-group">
                                <label for="exampleId">Salary Expectation :</label>
                                <input type="text" class="form-control" value="30000" name="salary_expectation" />
                            </div>
                            <div class="form-group">
                                <label for="exampleId">Other Requirement :</label>
                                <input type="text" class="form-control" value="" name="other_req" />
                            </div>
                            <div class="form-group">
                                <label for="exampleId">Notice Period :</label>
                                <input type="text" class="form-control" value="" name="notice_period" />
                            </div> 
                        </div>  
                    </div>
                </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-success" value="Submit" name="evaluation_submit" />
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        
        </div>  
    </div>                             
</div>


    

<div class="modal fade bd-example-modal-lg" id="detailModal" tabindex="-20" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <div class="row text-center">
                    <div class="col-md-12">
                        <h3>Candidates Evaluation Form</h3>
                    </div>
                    <div class="col-md-12">
                        <p>Interview Details : INT-0002 | Interview Date : 17th April 2022<br>
                        Candidates Name : Khayrul Alam | Position : Assistant<br>
                        Interviewer : ---</p>
                        <input type="hidden" class="form-control" value="INT-0002" name="int_id" />
                        <input type="hidden" class="form-control" value="25" name="can_id" />
                    </div>
                  </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6" style="">Criteria</div> 
                        <div class="col-md-4" style="">Comments</div> 
                        <div class="col-md-2" style="">Rating</div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>01. Education<br><small>(Does candidate's educational qualification or trainings received meet the requirement for the position)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="education_remarks" /></div> 
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="4" name="education" /></div>  
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>02. Experience<br><small>(Does the candidate have minimum and relevant working experience?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="5" name="experience" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>03. Presentation<br><small>(Was the candidate well aware for self presentation in the interview?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="presentation" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>04. Knowledge of Company and Position<br><small>(Did the candidate research about the organization and the position prior to the interview?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="know_com_pos" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>05. Communication<br><small>(How were the candidate's communication skills during the interview?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="communication" /></div>  
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>06. Attitude & Body Language<br><small>(Did the candidate demonstrate positive attitude and body language during the interview?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="attitude" /></div> 
                    </div>
                    <hr>
                    <div class="row" >
                        <div class="col-md-6" style="">
                            <span>07. Teamwork<br><small>(Did the candidate possess the willingness to work in teams?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="teamwork" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>08. Leadership<br><small>(Did the candidate demonstrate the ability to lead a team?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="leadership" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>09. Technical Know-how<br><small>(Does the candidate possess proper understanding of the industry and work segment where s/he currently is?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="technical_know" /></div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <span>10. Willingness to take on challenges and changes<br><small>(Did the candidate demonstrate his/her willingness to take on new challenges and accept change?)</small></span>
                        </div>  
                        <div class="col-md-4" style=""><input type="text" class="form-control" value="" name="" /></div>  
                        <div class="col-md-2" style=""><input type="text" class="form-control" value="0" name="willingness" /></div>  
                    </div>
                    <hr>
                    <div class="row" >  
                        <div class="col-md-6" style="">
                            <div class="form-group">
                                <label for="exampleId">Comments :</label>
                                <textarea class="form-control" name="remarks"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleId">Final Recommendation :</label>
                                <div class="radio">
                                    <label><input type="radio" name="final_recommendation" value="1" > <span class=""> Suitable</span> </label></br>
                                    <label><input type="radio" name="final_recommendation" value="2" checked> <span class=""> Recommend for other position</span> </label> </br>
                                    <label><input type="radio" name="final_recommendation" value="3" > <span class=""> Hold for Comparison</span> </label></br>
                                    <label><input type="radio" name="final_recommendation" value="4" > <span class=""> Reject</span> </label>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6" style="">
                            <div class="form-group">
                                <label for="exampleId">Final Score :</label>
                                <input type="text" class="form-control" value="0" name="final_score" />
                            </div>
                            <div class="form-group">
                                <label for="exampleId">Salary Expectation :</label>
                                <input type="text" class="form-control" value="30000" name="salary_expectation" />
                            </div>
                            <div class="form-group">
                                <label for="exampleId">Other Requirement :</label>
                                <input type="text" class="form-control" value="" name="other_req" />
                            </div>
                            <div class="form-group">
                                <label for="exampleId">Notice Period :</label>
                                <input type="text" class="form-control" value="" name="notice_period" />
                            </div> 
                        </div>  
                    </div>
                </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-success" value="Submit" name="evaluation_submit" />
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>  
    </div>
                                
</div>
  <!-- /.content-wrapper -->
@endsection







