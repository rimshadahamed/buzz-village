<?php

namespace App\Http\Controllers;

use Auth;
use App\ofiice;
use Illuminate\Http\Request;
use DB;
use Image;

class ParkingController extends Controller
{

    public function save_data(Request $request){


        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'plan' => 'required',
            'comments' => 'required',
        ]);

        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $plan = $request->input('plan');
        $comments = $request->input('comments');
        $user = Auth::User()->email;

        DB::insert('insert into parking (first_name,last_name,email_address,plan,comments,block,floor,parking_valid_till,status,car_wash,user) values(?,?,?,?,?,?,?,?,?,?,?)',[$fname,$lname,$email,$plan,$comments,'null','null','null','null','null',$user]);

        return back()->with('parking', 'Product has been added');
    }

    public function AdminPaymentInfo(Request $request)
    {

        $request->validate([
            'receipt_no' => 'required',
            'cheque_no' => 'required',
            'bank_name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'amount' => 'required',
        ]);

        $receipt_no = $request->input('receipt_no');
        $cheque_no = $request->input('cheque_no');
        $bank_name = $request->input('bank_name');
        $email = $request->input('email');
        $date = $request->input('date');
        $amount = $request->input('amount');

        DB::insert('insert into payment_info (receipt_no,cheque_no,bank_name,assigned_email,payment_date,amount) values(?,?,?,?,?,?)',[$receipt_no,$cheque_no,$bank_name,$email,$date,$amount]);

        return back()->with('Admin-panel.add-new-parking', 'Product has been added');
    }
}

