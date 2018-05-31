<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class AdmineventController extends Controller
{

    public function save_data(Request $request){


        $request->validate([
            'event_name' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'social' => 'required',
            'contact_no' => 'required',
            'purpose' => 'required',
            'date' => 'required',
        ]);

        $event_name = $request->input('event_name');
        $description = $request->input('description');
        $email = $request->input('email');
        $website = $request->input('website');
        $social = $request->input('social');
        $contct_no = $request->input('contact_no');
        $purpose = $request->input('purpose');
        $date = $request->input('date');


        DB::insert('insert into events (event_name,description,email_address,website,social,contact_number,purpose,event_date) values(?,?,?,?,?,?,?,?)',[$event_name,$description,$email,$website,$social,$contct_no,$purpose,$date]);

        return back()->with('Admin-panel.admin-events', 'Product has been added');
    }
}
