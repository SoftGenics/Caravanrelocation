<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ad extends Model
{
    use HasFactory;
   protected $fillable=[ 'name', 'start_date', 'end_date', 'file', 'status', 'created_at'];
}
