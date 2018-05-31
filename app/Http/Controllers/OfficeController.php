<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class OfficeController extends Controller
{



    public function save_data(Request $request){

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'space_required' => 'required',
            'purpose' => 'required',
            'comments' => 'required',
            'image' => 'required',
        ]);




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


/*        DB::insert('insert into requested_office (first_name,last_name,email_address,space_required,purpose,comments,trade_license,status,block,user) values(?,?,?,?,?,?,?,?,?,?)',[$fname,$lname,$email,$space_required,$purpose,$comments,$imagename,'Renewed','block',$user]);*/
        $requested_office_id = DB::table('requested_office')->insertGetId
        (
            [
                'first_name' => $fname,
                'last_name' =>$lname,
                'email_address' => $email,
                'space_required' =>$space_required,
                'purpose' => $purpose,
                'comments' => $comments,
                'trade_license' => $imagename,
                'status' => 'Renewed',
                'block' => 'b',
                'user' => $user,
            ]
        );
        DB::insert('insert into booked_office (requested_office_id,office_no,office_size,space,assigned_to,tenancy_contract,floor_plan,tenancy_end_date,licence_end_date,comments_admin,user) values(?,?,?,?,?,?,?,?,?,?,?)',[$requested_office_id,'not define','not define','not define','not define','not define','not define','not define','not define','not define',$user]);

        return back()->with('office', 'Product has been added');
    }
}
