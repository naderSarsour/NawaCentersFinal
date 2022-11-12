@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>إضافة نشاط جديد</h1>
<a class="btn btn-outline-dark" href="{{route('admin.activity.index')}}">رجوع</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.activity.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <lable>نوع النشاط</lable>
                <input type="text" name="activity_type" value="{{old('activity_type')}}" placeholder=" نوع النشاط" class="form-control" />
          
            </div>


            <button class="ntn btn-primary">إضافة</button>
        </form>
      </div>
  </div>

</div> 
 
    
@stop