<?php

namespace App\Models;

use App\Models\Lab;
use App\Models\Center;
use App\Models\Trainer;
use App\Models\Activity;
use App\Models\Calender;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function calender()
    {
        return $this->belongsTo(Calender::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function trainer()

    { 
        return $this->belongsTo(Trainer::class,'trainer_id')->withDefault();
    }

    public function follower()

    { 
        return $this->belongsTo(Trainer::class,'follower_id');
    }
    public function center()
    {
        return $this->belongsTo(Center::class);
    }
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
