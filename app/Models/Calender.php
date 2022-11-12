<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Calender extends Model
{
    protected $guarded=[];

    use HasFactory;

    public function course()
    
    {
        return $this->belongsTo(Course::class);
    }


    public function courses()
    {
        return $this->hasMany(Course::class,'calender_id','id');
    }

}
