<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solve_questions extends Model
{
    use HasFactory;
    protected $fillable=['sname','user_id', 'title', 'mediafile', 'aboutProblem'];
}
