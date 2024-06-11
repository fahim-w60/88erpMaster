<?php

namespace Innovation\EightHrm\Http\Controllers\attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
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

    public function daily_attendance()
    {
        return view('eight_hrm::attendance.attendance-reports.daily-attendance');
    }
    public function monthly_attendance()
    {
        return view('eight_hrm::attendance.attendance-reports.monthly_attendance');
    }
    public function summary_attendance()
    {
        return view('eight_hrm::attendance.attendance-reports.summary_attendance');
    }
    public function job_card()
    {
        return view('eight_hrm::attendance.attendance-reports.job_card');
    }
    public function punch_record()
    {
        return view('eight_hrm::attendance.attendance-reports.punch_record');
    }
    public function attendance_lock()
    {
        return view('eight_hrm::attendance.attendance-setup.monthly_attendance_lock');
    }
    public function attendance_unlock()
    {
        return view('eight_hrm::attendance.attendance-setup.monthly_attendance_unlock');
    }
}
