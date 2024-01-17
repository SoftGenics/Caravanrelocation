<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobshikharprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'country', 'state', 'city', 'name','psname','qualification', 'aera', 'pincode', 'address', 'whatappno', 'gender', 'dob'
    ];
}
