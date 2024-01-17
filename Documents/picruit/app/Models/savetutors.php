<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class savetutors extends Model
{
    use HasFactory;
    
     protected $fillble=['user_id', 'tutor_id'];
}
