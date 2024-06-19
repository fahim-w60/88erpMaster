<?php
namespace Innovation\EightHrm\Http\Controllers\system_adminstration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Innovation\EightHrm\Models\system_adminstration\SysCode;
use Innovation\EightHrm\Models\system_adminstration\SysCodeType;

class SysCodeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Fetch SQL OLD data Insert Into PG DB

       // code_type_sql_to_pg();
        $datas = SysCodeType::orderBy('type','ASC')->get();
        return view('eight_hrm::system_adminstration.sys_code_type.index',compact('datas'));
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
     * @param  \App\Models\SysCodeType  $sysCodeType
     * @return \Illuminate\Http\Response
     */
    public function show(SysCodeType $sysCodeType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SysCodeType  $sysCodeType
     * @return \Illuminate\Http\Response
     */
    public function edit(SysCodeType $sysCodeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SysCodeType  $sysCodeType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SysCodeType $sysCodeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SysCodeType  $sysCodeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SysCodeType $sysCodeType)
    {
        //
    }
}
