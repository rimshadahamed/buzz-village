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
        $data = DB::table('events')->limit(3)->orderBy('id', 'desc')->get();
        return view('Admin-panel.admin-events',['data' => $data]);
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
        $data = DB::table('facility')->get();
        return view('Admin-panel.admin-facility',['data' => $data]);
    }

    public function toAdminOffice()
    {
        $officeMaster = new \App\OfficeMaster();
        $data = $officeMaster->getBookedOffice();
        return view('Admin-panel.admin-office',['data' => $data]);
    }

    public function toAdminMyOffice($office_no)
    {
        $data =DB::table('requested_office')->where('id',$office_no)->first();
        return view('Admin-panel.admin-my-office',['office' => $data]);
    }

    public function toAdminSocial()
    {
        return view('Admin-panel.admin-social');
    }
    public function toAdminRewards()
    {
        $data = DB::table('rewards')->get();
        return view('Admin-panel.admin-rewards',['data' => $data]);
    }
    public function toAdminDirectories()
    {
        $data = DB::table('directory')->get();
        return view('Admin-panel.admin-directories',['data' => $data]);
    }

    public function toAdminConferenceInquiries()
    {
        $admin_data = DB::table('admin_conference')->get();
        $data = DB::table('conference')->get();
        return view('Admin-panel.admin-conference-inquiries',['data' => $data],['admin_data' => $admin_data]);
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

    public function toAdminFacilityTicket($case_ID)
    {
        $data =DB::table('facility')->where('case_ID',$case_ID)->first();
        return view('Admin-panel.facility-ticket',['facility' => $data]);
    }
}
