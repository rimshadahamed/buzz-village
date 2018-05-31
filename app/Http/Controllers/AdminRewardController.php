<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class AdminRewardController extends Controller
{
    public function add_reward(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'description' => 'required',
            'feature_image' => 'required',
            'terms_conditions' => 'required',
        ]);

        $company_name = $request->input('company_name');
        $collection_count = $request->input('collection_count');
        $description = $request->input('description');
        $terms = $request->input('terms_conditions');

        $image_file = $request->file('feature_image');
        $imagename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $thumb_img = Image::make($image_file->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename,80);
        $destinationPath = public_path('/images');
        $image_file->move($destinationPath, $imagename);

        DB::insert('insert into rewards (company_name,collection_count,description,image,terms) values(?,?,?,?,?)', [$company_name,$collection_count,$description,$imagename,$terms]);

        return back()->with('Admin-panel.add-rewards', 'Product has been added');
    }
}
