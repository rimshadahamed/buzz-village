<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class BlogController extends Controller
{



    public function save_data(Request $request){

        $request->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);




        $title = $request->input('title');
        $meta_title = $request->input('meta_title');
        $description = $request->input('description');

        $image_file = $request->file('image');
        $imagename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/images/office');
        $thumb_img = Image::make($image_file->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename,80);

        $destinationPath = public_path('/images');
        $image_file->move($destinationPath, $imagename);


        DB::insert('insert into blog (blog_title,meta_title,description,image) values(?,?,?,?)',[$title,$meta_title,$description,$imagename]);

        return back()->with('Admin-panel.add-blog', 'Product has been added');
    }
}
