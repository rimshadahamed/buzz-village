<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class EventController extends Controller
{

    public function save_data(Request $request){

        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $mobile_no = $request->input('mobile_no');
        $purpose = $request->input('purpose');
        $date = $request->input('date');
        $comments = $request->input('comments');
        $user = Auth::User()->email;
        
        $image_file = $request->file('image');
        $imagename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/images/office');
        $thumb_img = Image::make($image_file->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename,80);

        $destinationPath = public_path('/images');
        $image_file->move($destinationPath, $imagename);


        DB::insert('insert into events (first_name,last_name,email_address,mobile_no,purpose,date,comments,image,user) values(?,?,?,?,?,?,?,?,?)',[$fname,$lname,$email,$mobile_no,$purpose,$date,$comments,$imagename,$user]);

        return back()->with('events', 'Product has been added');
    }
}
