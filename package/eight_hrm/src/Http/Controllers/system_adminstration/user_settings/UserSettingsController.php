<?php

namespace Innovation\EightHrm\Http\Controllers\system_adminstration\user_settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function backup_database_url()
    {
        return view('eight_hrm::system_adminstration.user_settings.backup-database-url');
        
    }
    public function code_setup()
    {
        return view('eight_hrm::system_adminstration.user_settings.code_setup');
    }
    public function code_type_setup()
    {
        return view('eight_hrm::system_adminstration.user_settings.code_type_setup');
    }
}
