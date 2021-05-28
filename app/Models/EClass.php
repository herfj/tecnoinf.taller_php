<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EClass extends Model
{
    use HasFactory;

    protected $fillable = ['class_date','topic','class_notes','edition_id'];
}
