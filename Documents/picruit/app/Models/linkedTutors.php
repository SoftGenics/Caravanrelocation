<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linkedTutors extends Model
{
    use HasFactory;
  protected $fillable=  ['tutor_id', 'std_id','tuition_id', 'discription', 'doc', 'status'];
}
