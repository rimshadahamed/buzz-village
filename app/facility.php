<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class facility extends Model
{
    use Notifiable;


    protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'office_no',
        'block',
        'issue_type',
        'issue_description',
        'image',
        'status',

    ];

    protected $table = 'facility';
}
