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
        return view('Admin-panel.add-directories');
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
        $data = DB::table('blog')->get();
        return view('Admin-panel.admin-blog',['data' => $data]);
    }


    public function toAdminFacility()
    {
        return view('Admin-panel.admin-facility');
    }

    public function toAdminOffice()
    {
        return view('Admin-panel.admin-office');
    }

    public function toAdminMyOffice()
    {
        return view('Admin-panel.admin-my-office');
    }



    public function toAdminSocial()
    {
        return view('Admin-panel.admin-social');
    }
    public function toAdminRewards()
    {
        return view('Admin-panel.admin-rewards');
    }
    public function toAdminDirectories()
    {
        return view('Admin-panel.admin-directories');
    }

    public function toAdminConferenceInquiries()
    {
        return view('Admin-panel.admin-conference-inquiries');
    }
    public function toAdminConferenceCalendar()
    {
        return view('Admin-panel.admin-conference-calendar');
    }
    public function toAdminConferenceRooms()
    {
        return view('Admin-panel.admin-conference-rooms');
    }


    public function toAdminParkingInquiries()
    {
        return view('Admin-panel.admin-parking-inquiries');
    }

    public function toAdminParkingSpaces()
    {
        return view('Admin-panel.admin-parking-spaces');
    }
}
