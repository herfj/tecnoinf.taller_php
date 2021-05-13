<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;

    protected $fillable = ['course_id','teacher_id','name','start_at','end_at','space_available'];
}
