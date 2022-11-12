<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Center;
use App\Models\Course;
use App\Models\Trainer;
use App\Models\Category;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lab = Lab::all();
        return view('admin.lab.index',compact('lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lab = Lab::all();
        $centers = Center::select('id', 'center_name')->get();
        $category = Category::select('id', 'category_name')->get();
       // $course = Course::select('id', 'course_name')->get();
        $trainer = Trainer::select('id', 'trainer_name')->get();
        return view('admin.lab.create',compact('centers','lab','category','trainer'));
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
            'lab_name'=>'required',
            'center_id'=>'required',
        ]);

     $lab = Lab::create([
            'lab_name'=>$request->lab_name,
            'center_id'=>$request->center_id,

     ]);

     return redirect()->route('admin.lab.index')->with('msg','تم إضافة المركز بنجاح')->with('type','success');
    
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
        $lab = Lab::findOrFail($id);
        $centers = Center::select('id', 'center_name')->get();
        return view('admin.lab.edit',compact('lab','centers'));
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
            'lab_name'=>'required',
            'center_id'=>'required',

        ]); 

        $lab = Lab::find($id);
    
     $lab->update([
            'lab_name'=>$request->lab_name,
            'center_id'=>$request->center_id,
            
     ]);

     return redirect()->route('admin.lab.index')->with('msg','تم تعديل بيانات المختبر بنجاح')->with('type','success');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lab::destroy($id);
        return redirect()->route('admin.lab.index')->with('msg','تم حذف المختبر بنجاح')->with('type','danger');
      
    }
}
