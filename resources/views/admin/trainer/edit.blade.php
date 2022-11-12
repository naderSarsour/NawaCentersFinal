@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>تعديل بيانات المدرب :<span class="text-danger">{{$trainer->trainer_name}}</span></h1>
<a class="btn btn-outline-dark" href="{{route('admin.trainer.index')}}">رجوع</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.trainer.update',$trainer->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <lable>اسم المدرب</lable>
                <input type="text" name="trainer_name" value="{{old('trainer_name',$trainer->trainer_name)}}" placeholder="اسم المدرب" class="form-control" />
          
            </div>
        <div class="mb-3">
                <lable>نوع المدرب</lable>
                <select name="type" class="form-control"> 
                    <option value=""> -- اختر --</option> 
                    <option value="داخلي">داخلي</option>
                    <option value="خارجي">خارجي</option>
                </select>
          
            </div>
            <div class="mb-3">
                <lable>صورة المدرب</lable>
                <input type="file" name="image"  class="form-control" />
                 {{-- @if ($trainer->image)  --}}
                <img class="mt-1 img-thumbnail" width="200" src="{{asset('uploads/'.$trainer->image)}}" alt="">                    
                {{-- @endif  --}}
               
            </div>
            <div class="mb-3">
                <lable>هاتف المدرب</lable>
                <input type="text" name="mobile" value="{{old('mobile',$trainer->mobile)}}" placeholder="هاتف المدرب" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>تخصص المدرب</lable>
                <input type="text" name="qualification" value="{{old('qualification',$trainer->qualification)}}" placeholder="تخصص المدرب" class="form-control" />
          
            </div>
            <lable>السيرة الذاتية للمدرب</lable>
                <input type="file" name="cv" value="{{old('qualification',$trainer->cv)}}"  class="form-control" />
                 {{-- @if ($trainer->image)  --}}
                {{-- <img src="{{asset('uploads/'.$trainer->cv)}}" alt=""> --}}
             <div>  {{asset('uploads/'.$trainer->cv)}}</div> 
            <button class="ntn btn-primary">تعديل</button>
        </form>
      </div>
  </div>

</div> 
 

@stop