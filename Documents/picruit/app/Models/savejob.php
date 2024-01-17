<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class savejob extends Model
{
    use HasFactory;
    protected $fillble=['user_id', 'job_id', 'emp_id'];
}
