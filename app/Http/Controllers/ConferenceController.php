<?php

namespace App\Http\Controllers;

use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class ConferenceController extends Controller
{

    public function save_data(Request $request){

        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $space_required = $request->input('space_required');
        $purpose = $request->input('purpose');
        $date = $request->input('date');
        $time = $request->input('time');
        $comments = $request->input('comments');
        $value = $request->session()->get('key');
        dd($usersec);

        DB::insert('insert into conference (first_name,last_name,email,date,time,conf_size,arrangements,status,booked_room,comments,user) values(?,?,?,?,?,?,?,?,?,?,?)',[$fname,$lname,$email,$date,$time,$space_required,$purpose,'pending','12A',$comments,'DK']);

        return back()->with('conference', 'Product has been added');
    }
}
