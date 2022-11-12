<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Center;
use App\Models\Course;
use App\Models\Trainer;
use App\Models\Activity;
use App\Models\Calender;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::all();
        $calender1 = Calender::all();
        // $internal=Trainer::where('type',"داخلي")->get();
        $trainer = Trainer::all();
        // $trainer = Trainer::select('id', 'trainer_name')->where('type',"داخلي")->get();
        $internals=Trainer::where('type',"داخلي")->get();
        return view('admin.course.index',compact('course','internals','trainer','calender1'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calender1 = Calender::all();
        $lab = Lab::all();
        $center = Center::select('id', 'center_name')->get();
        $category = Category::select('id', 'category_name')->get();
        // $activity = Activity::select('id', 'activity_type')->get();
        $activity = Activity::all();
        $trainer = Trainer::select('id', 'trainer_name')->get();
        $internal=Trainer::where('type',"داخلي")->get();
        // $external=Trainer::where('type',"خارجي")->count();

        return view('admin.course.create',compact('category','internal','activity','center','lab','trainer','calender1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'course_name'=>'required',
            // 'type_name'=>'required',
            // 'nawa_emp'=>'required',
            'disc_course'=>'required',
            'category_id'=>'required',
            'activity_id'=>'required',
            'number_of_hour'=>'required',
            'hour'=>'required',
            'sat'=>'nullable',
            'sun'=>'nullable',
            'mon'=>'nullable',
            'tus'=>'nullable',
            'thr'=>'nullable',
            'wen'=>'nullable',
            'fri'=>'nullable',
            'trainer_id'=>'required',
            'follower_id'=>'required',
            'center_id'=>'required',
            'calender_id'=>'required',
            'lab_id'=>'required',
            'start_course'=>'required',
            'finish_course'=>'required',
        ]);
        // $course_count_sat=Course::where('lab_id',$request->lab_id)->where('sat',$request->sat)->get();
        // if ($course_count_sat,'<>', @foreach ($labs as $lab) {{ lab->sat }}
        // @endforeach)
        $course_count_sat=Course::where('lab_id',$request->lab_id)->where('sat',$request->sat)->count();
        $course_count_sun=Course::where('lab_id',$request->lab_id)->where('sun',$request->sun)->count();
        
        $course_count_mon=Course::where('lab_id',$request->lab_id)->where('mon',$request->mon)->count();
        $course_count_tus=Course::where('lab_id',$request->lab_id)->where('tus',$request->tus)->count();
        $course_count_thr=Course::where('lab_id',$request->lab_id)->where('thr',$request->thr)->count();
                
        $course_count_wen=Course::where('lab_id',$request->lab_id)->where('wen',$request->wen)->count();
        $course_count_fri=Course::where('lab_id',$request->lab_id)->where('fri',$request->fri)->count();
        $Allcourses=$course_count_sat+  $course_count_sun+ $course_count_mon+$course_count_tus+ $course_count_thr+ $course_count_wen+ $course_count_fri;
        //dd($Allcourses);
                if($course_count_sat> 0||$course_count_sun> 0||$course_count_mon> 0||$course_count_tus> 0||$course_count_thr> 0||$course_count_wen> 0||$course_count_fri> 0){
                    $msg='الرجاء تغيير موعد حجز القاعة لانها محجوزة في نفس الساعة';
                }
                else{
             $course = Course::create([
                    'course_name'=>$request->course_name,
                    // 'type_name'=>$request->type_name,
                    // 'nawa_emp'=>$request->nawa_emp,
                    'disc_course'=>$request->disc_course,
                    'category_id'=>$request->category_id,
                    'number_of_hour'=>$request->number_of_hour,
                    'hour'=>$request->hour,
                    'sat'=>$request->sat,
                    'sun'=>$request->sun,
                    'mon'=>$request->mon,
                    'tus'=>$request->tus,
                    'thr'=>$request->thr,
                    'wen'=>$request->wen,
                    'fri'=>$request->fri,
                    'trainer_id'=>$request->trainer_id,
                    'follower_id'=>$request->follower_id,
                    'lab_id'=>$request->lab_id,
                    'center_id'=>$request->center_id,
                    'activity_id'=>$request->activity_id,
                    'calender_id'=>$request->calender_id,
                    'start_course'=>$request->start_course,
                    'finish_course'=>$request->finish_course,
             ]);
             $msg='تم إضافة الدورة بنجاح';
            }
             return redirect()->route('admin.course.index')->with($msg)->with('type','success');
            
            }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        // $calender1 = Calender::all();
        $calender = Calender::select('id', 'calender_name')->get();
        $lab = Lab::all();
        $center = Center::select('id', 'center_name')->get();
        $category = Category::select('id', 'category_name')->get();
        // $activity = Activity::select('id', 'activity_type')->get();
        $activity = Activity::all();
        $trainer = Trainer::select('id', 'trainer_name')->get();
        $internal=Trainer::where('type',"داخلي")->get();
        return view('admin.course.edit',compact('category','activity','center','lab','trainer','calender','course','internal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name'=>'required',
            // 'type_name'=>'required',
            // 'nawa_emp'=>'required',
            'disc_course'=>'required',
            'category_id'=>'required',
            'activity_id'=>'required',
            'number_of_hour'=>'required',
            'hour'=>'required',
            'sat'=>'nullable',
            'sun'=>'nullable',
            'mon'=>'nullable',
            'tus'=>'nullable',
            'thr'=>'nullable',
            'wen'=>'nullable',
            'fri'=>'nullable',
            'trainer_id'=>'required',
            'follower_id'=>'required',
            'center_id'=>'required',
            'calender_id'=>'required',
            'lab_id'=>'required',
            'start_course'=>'required',
            'finish_course'=>'required',
        ]);

        $course = Course::find($id);

    
     $course->update([
            'course_name'=>$request->course_name,
            // 'type_name'=>$request->type_name,            
            // 'nawa_emp'=>$request->nawa_emp,            
            'disc_course'=>$request->disc_course,         
            'category_id'=>$request->category_id,  
            'activity_id'=>$request->activity_id,          
            'number_of_hour'=>$request->number_of_hour,   
            'hour'=>$request->hour,
            'sat'=>$request->sat,
            'sun'=>$request->sun,
            'mon'=>$request->mon,
            'tus'=>$request->tus,
            'thr'=>$request->thr,
            'wen'=>$request->wen,         
            'fri'=>$request->fri,         
            'trainer_id'=>$request->trainer_id,  
            'follower_id'=>$request->follower_id,          
            'center_id'=>$request->center_id,            
            'lab_id'=>$request->lab_id,      
            'calender_id'=>$request->calender_id,      
            'start_course'=>$request->start_course,            
            'finish_course'=>$request->finish_course,            
     ]);
    
     return redirect()->route('admin.course.index')->with('msg','تم تعديل النشاط بنجاح')->with('type','success');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('admin.course.index')->with('msg','تم حذف النشاط بنجاح')->with('type','danger');
     
    }

    public function calender(Request $request)
    {
          
    $selected_id = [];
    $selected_id['lab_id'] = $request->lab_id;

        if($request->lab_id){
            $course = Course::where('lab_id',$request->lab_id)->get();}
        else{
            $course = Course::all();
        }
        $labs = Lab::all();
        $center = Center::select('id', 'center_name')->get();
        $trainer = Trainer::select('id', 'trainer_name')->get();
        
        // $weekDays = 'الأحد','الاثنين','الثلاثاء','الأربعاء','الخميسس';
        // $time = '8:00-9:00','9:00-10:00','10:00-11:00','11:00-12:00','12:00-13:00';,'weekDays','time'
        return view('admin.course.calender',compact('center','labs','trainer','course','selected_id'));
    }

    public function calenderFeeds(Request $request)
    {
        $dates = [];
        $date = now()->startOfWeek();
        $end = now()->endOfWeek();
        while ($date->lte($end)) {
            $dates[] = clone $date;
            $date->addDay();
        }
        $courses = Course::where('lab_id', $request->lab_id)->get();
        $feeds = [];
        foreach ($courses as $course) {
            foreach ($dates as $time) {
                
                $feeds[] = [
                    'id' => $course->id,
                    'start' => $course->start,
                ];
            }
        }
    }
}
