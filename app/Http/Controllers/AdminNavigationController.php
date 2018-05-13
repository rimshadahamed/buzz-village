<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminNavigationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function toAdmin()
    {
        return view('Admin-panel.adminlogin');
    }


    public function toAdminDashbord()
    {
        return view('Admin-panel.admin-dashboard');
    }
    public function toAdminEvents()
    {
        return view('Admin-panel.admin-events');
    }
    public function toAddBlog()
    {
        return view('Admin-panel.add-blog');
    }
    public function toAddDirectories()
    {
        return view('Admin-panel.admin-directories');
    }

    public function toAddNewParking()
    {
        return view('Admin-panel.add-new-parking');
    }

    public function toAddRewards()
    {
        return view('Admin-panel.add-rewards');
    }

    public function toAdminblog()
    {
        return view('Admin-panel.admin-blog');
    }
}