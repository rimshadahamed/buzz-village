<?php

namespace App\Http\Controllers;

use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class ParkingController extends Controller
{

    public function save_data(Request $request){

        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $plan = $request->input('plan');
        $comments = $request->input('comments');

        DB::insert('insert into parking (first_name,last_name,email_address,plan,comments,block,floor,parking_valid_till,status,car_wash,user) values(?,?,?,?,?,?,?,?,?,?,?)',[$fname,$lname,$email,$plan,$comments,'null','null','null','null','null','null']);

        return back()->with('parking', 'Product has been added');
    }
}
