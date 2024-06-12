<?php

namespace Innovation\EightHrm\Models\attendance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payatd extends Model
{
    use HasFactory;
    protected $table = 'payatds';

    protected $fillable = [
        'com_code',
        'year',
        'period',
        'day',
        'entrydate',
        'shift',
        'emp_id',
        'intime',
        'outtime',
        'lotime',
        'litime',
        'remarks',
        'timediff',
        'atdstat',
        'flag',
        'entered_by',
        'last_update_by',
        'add_time',
        'update_time',
        'othouractual',
        'othourbuyer',
        'othourbalance',
        'manual_remark',
        'otrule',
        'ot_type'
    ];
}
