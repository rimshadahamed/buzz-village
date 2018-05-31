<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class AdminDirectoryController extends Controller
{
    public function add_directory(Request $request)
    {
        $request->validate([
            'companyName' => 'required',
            'description' => 'required',
            'feature_image' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'hr_email' => 'required|email',
            'contact_no' => 'required',
            'linkedin' => 'required',
            'office_no' => 'required',
        ]);

        $company_name = $request->input('companyName');
        $industry = $request->input('industry');
        $description = $request->input('description');
        $website = $request->input('website');
        $email= $request->input('email');
        $hr_email = $request->input('hr_email');
        $contact_no = $request->input('contact_no');
        $linkedin = $request->input('linkedin');
        $office_no = $request->input('office_no');

        $image_file = $request->file('feature_image');
        $imagename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $thumb_img = Image::make($image_file->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename,80);
        $destinationPath = public_path('/images');
        $image_file->move($destinationPath, $imagename);

        DB::insert('insert into directory (company_name,industry,description,image,website,email,hr_email,contact_number,linkedin,office_no) values(?,?,?,?,?,?,?,?,?,?)', [$company_name,$industry,$description,$imagename,$website,$email,$hr_email,$contact_no,$linkedin,$office_no]);

        return back()->with('Admin-panel.add-directories', 'Product has been added');
    }
}
