<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class AdminConferenceController extends Controller
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

        return back()->with('Admin-panel.admin-conference-inquiries', 'Product has been added');
    }

    public function save_rooms(Request $request)
    {
        $request->validate([
            'room_no' => 'required',
            'includes' => 'required',
            'image360' => 'required',
            'image' => 'required',
        ]);

        $room_no = $request->input('room_no');
        $room_size = $request->input('room_size');
        $arrangement = $request->input('arrangement');
        $include = $request->input('includes');

        $image_file = $request->file('image360');
        $imagename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $thumb_img = Image::make($image_file->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename,80);
        $destinationPath = public_path('/images');
        $image_file->move($destinationPath, $imagename);

        $image_file1 = $request->file('image');
        $imagename1 = time().'.'.$image_file1->getClientOriginalExtension();
        $destinationPath1 = public_path('/images');
        $thumb_img1 = Image::make($image_file1->getRealPath())->resize(100, 100);
        $thumb_img1->save($destinationPath1.'/'.$imagename1,80);
        $destinationPath1 = public_path('/images');
        $image_file1->move($destinationPath1, $imagename1);


        DB::insert('insert into admin_conference (room_no,room_size,arrangements,includes,image_360,image) values(?,?,?,?,?,?)',[$room_no,$room_size,$arrangement,$include,$imagename,$imagename1]);

        return back()->with('Admin-panel.admin-conference-rooms', 'Product has been added');
    }
}
