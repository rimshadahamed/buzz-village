<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class ConferenceController extends Controller
{

    public function save_data(Request $request){


        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'space_required' => 'required',
            'arrangements' => 'required',
            'date' => 'required',
            'time' => 'required',
            'comments' => 'required',
        ]);

        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $space_required = $request->input('space_required');
        $arrangements = $request->input('arrangements');
        $date = $request->input('date');
        $time = $request->input('time');
        $comments = $request->input('comments');
        $user = Auth::User()->email;

        DB::insert('insert into conference (first_name,last_name,email,date,time,conf_size,arrangements,status,booked_room,comments,user) values(?,?,?,?,?,?,?,?,?,?,?)',[$fname,$lname,$email,$date,$time,$space_required,$arrangements,'pending','12A',$comments,$user]);

        return back()->with('conference', 'Product has been added');
    }
}
