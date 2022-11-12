@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Add New Trainer</h1>
<a class="btn btn-outline-dark" href="{{route('admin.trainer.index')}}">رجوع</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.trainer.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <lable>اسم المدرب</lable>
                <input type="text" name="trainer_name" value="{{old('trainer_name')}}" placeholder="اسم المدرب" class="form-control" />
          
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
            </div>
            <div class="mb-3">
                <lable>هاتف المدرب</lable>
                <input type="text" name="mobile" value="{{old('mobile')}}" placeholder="هاتف المدرب" class="form-control" />
            </div>
            <div class="mb-3">
                <lable>تخصص المدرب</lable>
                <input type="text" name="qualification" value="{{old('qualification')}}" placeholder="تخصص المدرب" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable> السيرة الذاتية للمدرب</lable>
                <input type="file" name="cv"  class="form-control" />
            <button class="ntn btn-primary m-3">إضافة</button>
        </form>
      </div>
  </div>

</div> 
 
    
@stop
