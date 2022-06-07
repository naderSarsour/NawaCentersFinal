<?php

namespace App\Models;

use App\Models\Center;
use App\Models\Course;
use App\Models\Trainer;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lab extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
}
