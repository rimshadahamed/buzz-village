<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OfficeMaster extends Model
{
    public function getBookedOffice()
    {
        return DB::table('booked_office')
            ->join('requested_office','requested_office.id','=','booked_office.requested_office_id')
            ->get();
    }
    public function getMyBookedOffice($office_no)
    {
        return DB::table('booked_office')
            ->join('requested_office','requested_office.id','=','booked_office.requested_office_id')
            ->where([
                ['requested_office.id',$office_no]
            ])
            ->get();
    }
}
