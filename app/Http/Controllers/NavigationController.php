<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NavigationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function toFacility()
    {
        $data = DB::table('facility')->get();
        return view('facility', ['data' => $data]);
    }

    public function toOffice()
    {
        //$data = DB::table('requested_office')->get();
        $officeMaster = new \App\OfficeMaster();
        $data = $officeMaster->getBookedOffice();
        return view('office',['data' => $data]);
    }

    public function toConference()
    {
        $admin_data = DB::table('admin_conference')->get();
        $data = DB::table('conference')->get();
        return view('conference',['data' => $data],['admin_data' => $admin_data]);
    }

    public function toMyConference($req_id)
    {
        $data =DB::table('conference')->where('req_id',$req_id)->first();
        return view('myconference',['conf' => $data]);
    }
    public function toMyOffice($office_no)
    {
       /* $data =DB::table('requested_office')->where('id',$office_no)->first();*/
        $officeMaster = new \App\OfficeMaster();
        $data = $officeMaster->getMyBookedOffice($office_no);
        return view('myoffice',['data' => $data]);
    }
    public function toEvents()
    {
        $data = DB::table('admin_events')->limit(3)->orderBy('id', 'desc')->get();
        return view('events',['data' => $data]);
    }
    public function toBlog()
    {
        $data = DB::table('blog')->get();
        return view('blog',['data' => $data]);
    }
    public function toParking()
    {
        $data = DB::table('parking')->get();
        return view('parking',['data' => $data]);
    }

    public function toSocial()
    {
        return view('m-social');
    }
    public function toRewards()
    {
        $data = DB::table('rewards')->get();
        return view('m-rewards',['data' => $data]);
    }
    public function toDirectory()
    {
        $data = DB::table('directory')->get();
        return view('m-directory',['data' => $data]);
    }
}
