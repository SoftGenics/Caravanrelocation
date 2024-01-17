<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'usertype', 'email', 'email_verified_at', 'location', 'password', 'remember_token', 'created_at', 'updated_at'
    ];
}
 