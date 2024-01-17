<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class savetutions extends Model
{
    use HasFactory;
    
    protected $fillble=['user_id', 'tuetion_id', 'std_id'];
}
