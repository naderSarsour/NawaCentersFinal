<?php

namespace App\Models;

use App\Models\Lab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Center extends Model
{
    protected $guarded=[];

    use HasFactory;
    public function lab()
    {
        return $this->hasMany(Lab::class);
    }
}
