@extends('admin.master')

@section('content')

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>إضافة مركز جديد</h1>
        <a class="btn btn-outline-dark" href="{{route('admin.center.index')}}">رجوع</a>
    </div>  
    @include('admin.errors')      
    <div class="card">
        <div class="card-body">
            <form class="container my-5" action="{{route('admin.center.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <lable>اسم المركز</lable>
                    <input type="text" name="center_name" value="{{old('center_name')}}" placeholder="اسم المركز" class="form-control" />
            
                </div>


                <button class="ntn btn-primary">إضافة</button>
            </form>
        </div>
    </div>

</div> 
 
    
@stop