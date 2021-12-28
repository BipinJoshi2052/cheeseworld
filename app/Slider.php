<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    // use HasFactory;

    protected $fillable=['name','description','image','link'];
}
