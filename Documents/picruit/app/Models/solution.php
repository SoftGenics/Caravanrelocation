<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solution extends Model
{
    use HasFactory;
    protected $fillable=['tname','user_id', 'title', 'mediafile', 'aboutProblem'];
}
