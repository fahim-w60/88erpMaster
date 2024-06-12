<?php

namespace Innovation\EightHrm\Http\Controllers\attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Innovation\EightHrm\Models\attendance\Payatd;

class PayatdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $HRM_CONNECTION = hrm_connection();
$offset = 0;
$batchSize = 23000;

// Fetch data in batches until the end
do {
    // Modify the query to fetch the next batch of data with offset and limit
    $query = "SELECT TOP $batchSize [com_code],[year],[period],[day],[entrydate],[shift],[emp_id],[intime],[outtime],[lotime],[litime],[remarks],[timediff],[atdstat],[flag],[entered_by],[last_update_by],[add_time],[update_time],[othouractual],[othourbuyer],[othourbalance],[manual_remark],[otrule],[ot_type] 
              FROM [ad].[dbo].[payatd]
              WHERE entrydate NOT IN (SELECT TOP $offset entrydate FROM [ad].[dbo].[payatd])
              ORDER BY entrydate";

    // Execute the query
    $stmt = sqlsrv_query($HRM_CONNECTION, $query);

    // Check for errors
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $stmt = sqlsrv_query($HRM_CONNECTION, $query);

    // Check for errors
    if ($stmt === false) {
        // Print the errors and stop the script
        die(print_r(sqlsrv_errors(), true));
    }

    // Fetch and process data
    $rowsFetched = 0;
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
         $data =[
                'com_code'=>$row['com_code'],
                'year'=>$row['year'],
                'period'=>$row['period'],
                'day'=>$row['day'],
                'entrydate'=>$row['entrydate']->format("d-M-Y"),
                'shift'=>$row['shift'],
                'emp_id'=>$row['emp_id'],
                'intime'=>$row['intime']->format('H:i:s'),
                'outtime'=>$row['outtime']->format('H:i:s'),
                'lotime'=>$row['lotime']->format('H:i:s'),
                'litime'=>$row['litime']->format('H:i:s'),
                'remarks'=>$row['remarks'],
                'timediff'=>$row['timediff'],
                'atdstat'=>$row['atdstat'],
                'flag'=>$row['flag'],
                'entered_by'=>$row['entered_by'],
                'last_update_by'=>$row['last_update_by'],
                'add_time'=>$row['add_time']->format('d-M-Y H:i:s'),
                'update_time'=>$row['update_time']->format('d-M-Y H:i:s'),
                'othouractual'=>$row['othouractual'],
                'othourbuyer'=>$row['othourbuyer'],
                'othourbalance'=>$row['othourbalance'],
                'manual_remark'=>$row['manual_remark'],
                'otrule'=>$row['otrule'],
                'otrule'=>$row['otrule'],  
            ];

          Payatd::insert($data);
        $rowsFetched++;
    }

    // Increment offset for the next batch
    $offset += $batchSize;

    // Free the statement
    sqlsrv_free_stmt($stmt);

    // Check if the batch fetched less than the batch size, if so, it means we have reached the end
} while ($rowsFetched == $batchSize);


 
return "ok done";


        $query = " SELECT  [com_code],[year],[period],[day],[entrydate],[shift],[emp_id],[intime],[outtime],[lotime],[litime],[remarks],[timediff],[atdstat],[flag],[entered_by],[last_update_by],[add_time],[update_time],[othouractual],[othourbuyer],[othourbalance],[manual_remark],[otrule],[ot_type] FROM [ad].[dbo].[payatd]
        ORDER BY entrydate ASC  ";



        // Execute the query
        $stmt = sqlsrv_query($HRM_CONNECTION, $query);
        if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
        }

        // Fetch data into an array
        $data_sets = array();
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
         //   return $row;
            $data =[
                'com_code'=>$row['com_code'],
                'year'=>$row['year'],
                'period'=>$row['period'],
                'day'=>$row['day'],
                'entrydate'=>$row['entrydate']->format("d-M-Y"),
                'shift'=>$row['shift'],
                'emp_id'=>$row['emp_id'],
                'intime'=>$row['intime']->format('H:i:s'),
                'outtime'=>$row['outtime']->format('H:i:s'),
                'lotime'=>$row['lotime']->format('H:i:s'),
                'litime'=>$row['litime']->format('H:i:s'),
                'remarks'=>$row['remarks'],
                'timediff'=>$row['timediff'],
                'atdstat'=>$row['atdstat'],
                'flag'=>$row['flag'],
                'entered_by'=>$row['entered_by'],
                'last_update_by'=>$row['last_update_by'],
                'add_time'=>$row['add_time']->format('d-M-Y H:i:s'),
                'update_time'=>$row['update_time']->format('d-M-Y H:i:s'),
                'othouractual'=>$row['othouractual'],
                'othourbuyer'=>$row['othourbuyer'],
                'othourbalance'=>$row['othourbalance'],
                'manual_remark'=>$row['manual_remark'],
                'otrule'=>$row['otrule'],
                'otrule'=>$row['otrule'],  
            ];

          Payatd::insert($data);
        
        }

    $chunkSize = 1000;



        return "ok done ";

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
     * @param  \App\Models\Payatd  $payatd
     * @return \Illuminate\Http\Response
     */
    public function show(Payatd $payatd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payatd  $payatd
     * @return \Illuminate\Http\Response
     */
    public function edit(Payatd $payatd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payatd  $payatd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payatd $payatd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payatd  $payatd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payatd $payatd)
    {
        //
    }
}
