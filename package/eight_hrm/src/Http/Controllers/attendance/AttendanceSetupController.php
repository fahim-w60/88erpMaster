<?php

namespace Innovation\EightHrm\Http\Controllers\attendance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function attendance_lock()
    {
        return view('eight_hrm::attendance.attendance-setup.monthly_attendance_lock');
    }
    public function attendance_unlock()
    {
        return view('eight_hrm::attendance.attendance-setup.monthly_attendance_unlock');
    }
    public function shift_time_setting()
    {
        return view('eight_hrm::attendance.attendance-setup.shift_time_setting');
    }
    public function employee_wise_time_setting()
    {
        return view('eight_hrm::attendance.attendance-setup.employee_wise_time_setting');
    }
    public function roaster_sheet_generate()
    {
        return view('eight_hrm::attendance.attendance-setup.roaster_sheet_generate_process');
    }
    public function group_roaster_sheet_modify()
    {
        return view('eight_hrm::attendance.attendance-setup.group_roaster_sheet_modify');
    }
    public function employee_roaster_sheet_modify()
    {
        return view('eight_hrm::attendance.attendance-setup.employee_roaster_sheet_modify');
    }
    public function roster_excel_upload()
    {
        return view('eight_hrm::attendance.attendance-setup.roster_excel_upload');
    }
}
