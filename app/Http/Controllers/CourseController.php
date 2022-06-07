<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
        return view('admin.course.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
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
            'number_of_hour'=>'required',
        ]);
     
    
     $course = Course::create([
            'course_name'=>$request->course_name,
            'number_of_hour'=>$request->number_of_hour,
            
     ]);
   
     return redirect()->route('admin.course.index')->with('msg','course added successfully')->with('type','success');
    
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
        return view('admin.course.edit',compact('course'));
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
            'number_of_hour'=>'required',
        ]);

        $course = Course::find($id);

    
     $course->update([
            'course_name'=>$request->course_name,
            'number_of_hour'=>$request->number_of_hour,            
     ]);
    
     return redirect()->route('admin.course.index')->with('msg','course Updated successfully')->with('type','success');
   
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
        return redirect()->route('admin.course.index')->with('msg','Course deleted successfully')->with('type','danger');
     
    }
}
