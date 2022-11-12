<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $trainer = Trainer::all();
        return view('admin.trainer.index',compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trainer.create');
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
            'trainer_name'=>'required',
            'type'=>'required',
            'image'=>'nullable |image|mimes:png,jpg',
            'cv'=>'nullable |file',
            'mobile'=>'required',
            'qualification'=>'required',
         //    'phone'=>'max:10|min:5',
         //    'price'=>'regex:09',
        ]);
     //    dd($request->except('_token'));
     //upload the file
     $imgname= rand() . $request->file('image');
     $cvfile=  rand() . $request->file('cv');
     
    
     $trainer = Trainer::create([
            'trainer_name'=>$request->trainer_name,
            'image'=>$imgname,
            'cv'=>$cvfile,
            'mobile'=>$request->mobile,
            'qualification'=>$request->qualification,
            'type'=>$request->type,
            
     ]);
     if($trainer){
      //  $request->file('image')->move(public_path('uploads'),$imgname);
      //  $request->file('cv')->move(public_path('uploads'),$cvfile);
     }
     return redirect()->route('admin.trainer.index')->with('msg','trainer added successfully')->with('type','success');
     
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
        $trainer = Trainer::findOrFail($id);
        return view('admin.trainer.edit',compact('trainer'));
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
            'trainer_name'=>'required',
            'type'=>'required',
            'image'=>'nullable|image|mimes:png,jpg',
            'cv'=>'nullable |file',
            'mobile'=>'required',
            'qualification'=>'required',
        ]);

        $trainer = Trainer::find($id);
        $imgname= $trainer->image;
        $cvfile= $trainer->cv;
        if($request->hasFile('image')){
            $imgname= 'nawa_culture_'.$request->file('image')->getClientOriginalName();
        }
        if($request->hasFile('cv')){            
                $cvfile= 'nawa_culture_'.$request->file('cv')->getClientOriginalName();
            }

     $trainer->update([
            'trainer_name'=>$request->trainer_name,
            'type'=>$request->type,
            'image'=>$imgname,
            'cv'=>$cvfile,
            'mobile'=>$request->mobile,
            'qualification'=>$request->qualification,
            
     ]);
     if($request->hasFile('image')){
        $request->file('image')->move(public_path('uploads'),$imgname);
     }
     if($request->hasFile('cv')){
        $request->file('cv')->move(public_path('uploads'),$cvfile);
     }
     return redirect()->route('admin.trainer.index')->with('msg','Trainer Updated successfully')->with('type','success');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trainer::destroy($id);
        return redirect()->route('admin.trainer.index')->with('msg','Trainer deleted successfully')->with('type','danger');
      
    }
}
