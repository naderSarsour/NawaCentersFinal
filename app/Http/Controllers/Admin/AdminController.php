<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lab;
use App\Models\News;
use App\Models\Event;
use App\Models\Center;
use App\Models\Course;
use App\Models\Trainer;
use App\Models\Calender;
use App\Models\Category;
use App\Models\Enrolled;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
      $internal=Trainer::where('type',"داخلي")->count();
      $external=Trainer::where('type',"خارجي")->count();
      //  $news_count =News::count();
      //  $Projects_count =8;
      //  $events_count =Event::count();
      //  $enrollments_count =Enrolled::count();

        $courses_count =Course::count();
        $trainers_count =Trainer::count();
        $centers_count =Center::count();
        $categories_count =Category::count();
        $calender_count =Calender::count();
        $calender = Calender::all();
        $course = Course::all();
        $trainer = Trainer::all();
        $lab = Lab::all();
        $category =Category::count();
        $balance = Calender::get()->map(function ($m){
          $m->count_course=count($m->courses);
          return $m;
          // $courses_count=10;
        });

        $labs = Lab::with('courses')->get()->map(function($n){
          $m=$n->courses; 
        
            $Allcourses=0;
            $course_count_sat=0; 
            $course_count_sun=0; 
            $course_count_mon=0; 
            $course_count_tus=0;
            $course_count_thr=0; 
            $course_count_wen=0; 
            $course_count_fri=0;
            // where('sat',<, Carbon::now)->
            $course_count_sat=$m->whereNotNull('sat')->count();
            $course_count_sun=$m->whereNotNull('sun')->count();
            $course_count_mon=$m->whereNotNull('mon')->count();
            $course_count_tus=$m->whereNotNull('tus')->count();
            $course_count_thr=$m->whereNotNull('thr')->count();
            $course_count_wen=$m->whereNotNull('wen')->count();
            $course_count_fri=$m->whereNotNull('fri')->count();
            $Allcourses=$course_count_sat+  $course_count_sun+ $course_count_mon+$course_count_tus+ $course_count_thr+ $course_count_wen+ $course_count_fri;
           
          $n->count =$Allcourses;
          return $n;
        });
     


             
      
        $aa = Category::get()->map(function ($n){
            $n->count_course=count($n->courses);
            return $n;
            
          });
         $centers = Center::get()->map(function ($b){
            $b->count_course=count($b->courses);
            return $b;
            
          }); 

        return view('admin.index',compact('internal','external','aa','labs','centers','balance','course','calender','courses_count','trainers_count'));
    }
}
