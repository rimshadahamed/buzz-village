<?php

namespace App\Http\Controllers;

use Auth;
use App\facility;
use Illuminate\Http\Request;
use DB;
use Image;

class FacilityController extends Controller
{

    public function save_data(Request $request){

        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'office_no' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $office_no = $request->input('office_no');
        $block = $request->input('block');
        $issue_type = $request->input('issue_type');
        $des = $request->input('description');
        $user = Auth::User()->email;
        
        $image_file = $request->file('image');
        $imagename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $thumb_img = Image::make($image_file->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename,80);

        $destinationPath = public_path('/images');
        $image_file->move($destinationPath, $imagename);



        DB::insert('insert into facility (first_name,last_name,email_address,office_no,block,issue_type,issue_description,image,status,user) values(?,?,?,?,?,?,?,?,?,?)',[$fname,$lname,$email,$office_no,$block,$issue_type,$des,$imagename,'open',$user]);

        return back()->with('facility', 'Product has been added');
    }
}
