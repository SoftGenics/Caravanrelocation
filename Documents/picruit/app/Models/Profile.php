<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'country', 'state', 'city', 'name','psname', 'aera', 'pincode', 'address', 'whatappno', 'gender', 'dob'
    ];
}
