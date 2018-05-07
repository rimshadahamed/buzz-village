<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class OfficeController extends Controller
{

    public function save_data(Request $request){

        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $space_required = $request->input('space_required');
        $purpose = $request->input('purpose');
        $comments = $request->input('comments');
        $user = Auth::User()->email;
        
        $image_file = $request->file('image');
        $imagename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/images/office');
        $thumb_img = Image::make($image_file->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename,80);

        $destinationPath = public_path('/images');
        $image_file->move($destinationPath, $imagename);


        DB::insert('insert into office (first_name,last_name,email_address,space_required,purpose,comments,trade_license_validity,tenecy_end_date,image,status,block,user) values(?,?,?,?,?,?,?,?,?,?,?,?)',[$fname,$lname,$email,$space_required,$purpose,$comments,'valid','12/12/12',$imagename,'status','block',$user]);

        return back()->with('office', 'Product has been added');
    }
}
