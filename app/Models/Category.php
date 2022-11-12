<?php

namespace App\Models;

use App\Models\Lab;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function lab()
    {
        return $this->hasMany(Lab::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class,'category_id','id');
    }
}
