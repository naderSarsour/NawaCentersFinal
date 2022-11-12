<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Calender;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calender1 = Calender::all();
        $course = Course::all();
        return view('admin.calender.index',compact('calender1','course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.calender.create');
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
            'calender_name'=>'required',
            'calender_desc'=>'required',
            'from'=>'required',
            'to'=>'required',
        ]);  

        $calender1 = Calender::create([
            'calender_name'=>$request->calender_name,
            'calender_desc'=>$request->calender_desc,
            'from'=>$request->from,
            'to'=>$request->to,
     ]);

     return redirect()->route('admin.calender1.index')->with('msg','تم إضافة المطوية بنجاح')->with('type','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calender1 = Calender::findOrFail($id);
        return view('admin.calender.edit',compact('calender1'));
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
            'calender_name'=>'required',
            'calender_desc'=>'required',
            'from'=>'required',
            'to'=>'required',
        ]); 

        $calender1 = Calender::find($id);
    
     $calender1->update([
        'calender_name'=>$request->calender_name,
        'calender_desc'=>$request->calender_desc,
        'from'=>$request->from,
        'to'=>$request->to 
     ]);

     return redirect()->route('admin.calender1.index')->with('msg','تم تعديل المطوية بنجاح')->with('type','success');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Calender::destroy($id);
        return redirect()->route('admin.calender1.index')->with('msg','تم حذف المطوية بنجاح')->with('type','danger');
      
    }
}
