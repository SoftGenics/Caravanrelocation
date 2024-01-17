<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submit_user_details extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'email', 'website'];
}
 