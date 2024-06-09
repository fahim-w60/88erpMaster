<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$page_name ?? ''}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('vendor/eight_hrm/css/style.css')}}">
    </head>
    <body class="antialiased">
        <div class="container" >
        <table style="width:100%;border-collapse: collapse;">
            <thead>
                <tr>
                    <td colspan="9">
                        <div class="report_top_header">
                            <table style="width:100%;text-align:center;">
                                <tr>
                                    <td> <span class="company_title">{!! company_name() ?? '' !!}</span></td>
                                </tr>
                                <tr>
                                    <td> <span class="header_address">{!! company_address() !!}</span></td>
                                </tr>
                                <tr>
                                    <td> <span class="header_report_name">{{ $page_name ?? '' }}</span></td>
                                </tr>
                                <tr>
                                    <td> <span class="normal_text">From: {!! _view_date_formate($first_last_date['first_day'] ?? '') !!}  To: {!! _view_date_formate($first_last_date['last_day'] ?? '') !!}</span></td>
                                </tr>
                            </table>
                           
                            
                        </div>
                    </td>
                </tr>
                <tr style="border:1px solid #000;">
                    <td colspan="6" >
                        <div class="emp_info_left">
                            <table style="width: 100%;border-collapse: collapse;">
                                <tr>
                                    <td style="width: 40%;text-align: right;">Employee Id & Name</td>
                                    <td style="width: 60%;">: {!! $emp_data['emp_id'] ?? '' !!},{!! $emp_data['emp_name'] ?? '' !!}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%;text-align: right;">Designation & Grade</td>
                                    <td style="width: 60%;">: {!! $emp_data['designation'] ?? '' !!},{!! $emp_data['empgrade'] ?? '' !!}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%;text-align: right;">Department </td>
                                    <td style="width: 60%;">: {!! $emp_data['department'] ?? '' !!}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%;text-align: right;">Project  </td>
                                    <td style="width: 60%;">:  {!! $emp_data['project'] ?? '' !!}</td>
                                </tr>
                            </table>
                            
                        </div>
                    </td>
                    <td colspan="3">
                         <div class="emp_info_right">
                            <table style="width: 100%;border-collapse: collapse;">
                                <tr>
                                    <td style="width: 40%;text-align: right;">D O J</td>
                                    <td style="width: 60%;">: {!! $emp_data['join_date'] !!}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%;text-align: right;">Division</td>
                                    <td style="width: 60%;">: {!! $emp_data['division'] ?? '' !!}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%;text-align: right;">Section </td>
                                    <td style="width: 60%;">: {!! $emp_data['section'] ?? '' !!}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%;text-align: right;">Location  </td>
                                    <td style="width: 60%;">: {!! $emp_data['location'] ?? '' !!}</td>
                                </tr>
                            </table>
                            
                        </div>
                    </td>
                </tr>
            </thead>
            <tbody>

                
                <tr>
                    <th>Day</th>
                    <th>Date</th>
                    <th>Shift</th>
                    <th>In Time</th>
                    <th>Out Time</th>
                    <th>Status</th>
                    <th>Man Hours</th>
                    <th>Update By & Time</th>
                    <th>Remarks</th>
                </tr>
@forelse($data as $row)
                <tr>
                    <td style="border:1px solid #000;text-align:center;padding: 5px;vertical-align:top;">{{$row['day'] ?? ''}}</td>
                    <td style="border:1px solid #000;text-align:center;padding: 5px;vertical-align:top;">{!! $row['entrydate']->format("d-M-Y ") !!}</td>
                    <td style="border:1px solid #000;text-align:center;padding: 5px;vertical-align:top;">{{$row['shift'] ?? ''}}</td>
                    <td style="border:1px solid #000;text-align:center;padding: 5px;vertical-align:top;">{!! check_empty_time($row['intime']->format('H:i:s a')) !!}</td>
                    <td style="border:1px solid #000;text-align:center;padding: 5px;vertical-align:top;">{!! check_empty_time($row['outtime']->format('H:i:s a')) !!}</td>
                   
                    <td style="border:1px solid #000;text-align:center;padding: 5px;vertical-align:top;font-weight: bold;">{!! check_adt_status($row['atdstat'] ?? '') !!}</td>
                    <td style="border:1px solid #000;text-align:center;padding: 5px;vertical-align:top;">{{minutesToHours($row['timediff'] ?? '')}}</td>
                     <td style="width:20%;border:1px solid #000;padding: 5px;vertical-align:top;">
                        @if($row['last_update_by'] !='')
                        {!! $row['last_update_by'] ?? '' !!},{!! check_empty_time($row['update_time']->format('d-M-y H:i:s a')) !!}
                        @endif
                    </td>
                    <td style="width:20%;border:1px solid #000;padding: 5px;vertical-align:top;">{{$row['manual_remark'] ?? ''}}</td>
                </tr>
@empty
@endforelse
            </tbody>
        </table>
</div>
         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    </body>


</html>
