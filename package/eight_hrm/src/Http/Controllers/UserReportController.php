<?php

namespace Innovation\EightHrm\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
public function payment_slip_report()
    {
        return view('eight_hrm::reports.user_reports.filter_pages.payment_slip_report');
    }
public function user_job_card()
    {
       return view('eight_hrm::reports.user_reports.filter_pages.job_card');
    }


    public function user_report(Request $request){
       // return $request->all();



        $HRM_CONNECTION = hrm_connection();

        $report_name = $request->report_name ?? '';
        $emp_id = $request->emp_id ?? '';
        $year = $request->year ?? '';
        $period = $request->period ?? '';


if($report_name =='employee_job_card'){
    // Define your SQL query with the condition
        $query = "SELECT  com_code, year, period, day, entrydate, shift, emp_id,intime, outtime, lotime,  litime, remarks, timediff, atdstat, flag, entered_by, last_update_by, add_time, update_time,  manual_remark
                  FROM payatd 
                  WHERE 1=1 AND emp_id='".$emp_id."' AND year=".$year." AND period= ".$period." ";



        // Execute the query
        $stmt = sqlsrv_query($HRM_CONNECTION, $query);
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Fetch data into an array
        $data = array();
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $data[] = $row;
        }


        //Employee Information Fetch
        $query_info_emp=" SELECT [com_code],[emp_id],[prefix_id] ,[proximity_card],[id_card_no],[emp_name],[short_name],[spouce_name],[division],[nationality],[section],[project],[department],[job_type],[designation],[category],[location],CONVERT(VARCHAR(10), join_date, 103) AS join_date,[empgrade]
              
          FROM [ad].[dbo].[Emp_Info] where emp_id= '".$emp_id."' ";

          $empStatement = sqlsrv_query($HRM_CONNECTION, $query_info_emp);
        if ($empStatement === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Fetch data into an array
        $emp_data=  sqlsrv_fetch_array($empStatement, SQLSRV_FETCH_ASSOC);
        // $data['emp_data']=$emp_data;
        // $data['attendace_data']=$attendace_data;
        sqlsrv_close($HRM_CONNECTION);

      $first_last_date=  getFirstAndLastDayOfMonth($period, $year);
      $page_name = "Jobcard / Movement Report";

        return view('eight_hrm::reports.user_reports.report_pages.employee_job_card',compact('emp_data','data','first_last_date','page_name'));

        return json_encode($data);
}

        


}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request->all();
       

       InnoContact::create($request->all());
        Mail::to(config('inno_contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
       return redirect()->back()->with('message','Message Send Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
