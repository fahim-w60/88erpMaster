<?php

use Innovation\EightHrm\Models\system_adminstration\SysCodeType;

function code_type_sql_to_pg(){
    $HRM_CONNECTION = hrm_connection();
        $query = " SELECT  [com_code],[type] FROM [ad].[dbo].[codes_type] ";
        $stmt = sqlsrv_query($HRM_CONNECTION, $query);
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        // Fetch data into an array
        $data = array();
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
           $SysCodeType = new SysCodeType();
           $SysCodeType->company_id = 1;
           $SysCodeType->type = $row['type'];
           $SysCodeType->remarks ='';
           $SysCodeType->created_by =1;
           $SysCodeType->save();
        }
}