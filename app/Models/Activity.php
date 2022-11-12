<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    protected $guarded=[];

    use HasFactory;
    public function courses()
    {
        return $this->hasMany(Course::class,'activity_id','id');
    }
}
