@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>تعديل النشاط : <span class="text-danger">{{$activity->activity_type}}</span></h1>
<a class="btn btn-outline-dark" href="{{route('admin.activity.index')}}">رجوع</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.activity.update',$activity->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <lable>نوع النشاط </lable>
                <input type="text" name="activity_name" value="{{old('activity_name',$activity->activity_type)}}" placeholder="نوع النشاط " class="form-control" />
          
            </div>

            <button class="btn btn-primary">تعديل</button>
        </form>
      </div>
  </div>

</div> 
 
  
@stop