<?php
namespace Innovation\EightHrm\Http\Controllers\system_adminstration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Innovation\EightHrm\Models\system_adminstration\SysCode;
use Innovation\EightHrm\Models\system_adminstration\SysCodeType;
use Illuminate\Support\Facades\Auth;

class SysCodeTypeController extends Controller
{

    protected $auth;

    public function __construct()
    {
        $this->middleware('auth');
        $this->auth = app('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Fetch SQL OLD data Insert Into PG DB
        if (Auth::check()) {
            // User is authenticated
            $datas = SysCodeType::orderBy('type','ASC')->get();
            return view('eight_hrm::system_adminstration.sys_code_type.index',compact('datas'));
        } else {
            // User is not authenticated
            return redirect()->route('login');
        }

       // code_type_sql_to_pg();
        
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
        //return $request->all();
         $request->validate([
            'id' => 'required',
            'type' => 'required|string',
        ]);
        $auth_user = Auth::user();

        $data = SysCodeType::find($request->id);
        if(empty($data)){
            $data = new SysCodeType();
        }
        $data->type=$request->type;
        $data->company_id=$request->company_id ?? 1;
        $data->remarks = $request->remarks ?? '';
        $data->created_by = $auth_user->id;
        $data->save();
        return redirect()->back()->with('message','Information Save Successfully');

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
    public function destroy($id)
    {
        //
        return $id;
    }
}
