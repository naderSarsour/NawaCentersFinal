@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">جميع الدورات</h1>
<a class="btn btn-outline-success" href="{{route('admin.course.create')}}">إضافة دورة جديدة</a>
</div>
@include('admin.course.message')
    

 <table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>اسم الدورة</th>
    {{-- <th>نوع الدورة</th> --}}
    <th>عدد ساعات الدورة</th>
    <th> الفئة</th>
    <th>مدرب الدورة</th>
    <th>تاريخ بداية الدورة </th>
    <th>تاريخ نهاية الدورة</th>
    <th> اسم المركز</th>
    <th>اسم القاعة</th>
    <th>متابع الدورة</th>
    <th>العملية</th>
</tr>
@foreach ($course as $course)
<tr>
    <td>{{$course->id}}</td>
    <td>{{$course->course_name}}</td>
    {{-- <td>{{$course->type_name}}</td> --}}
    <td>{{$course->number_of_hour}}</td>
    <td>{{$course->category->category_name}}</td>
    <td>{{$course->trainer->trainer_name}}</td>
    <td>{{$course->start_course}}</td>
    <td>{{$course->finish_course}}</td>
    <td>{{$course->center->center_name}}</td>
    <td>{{$course->lab->lab_name}}</td>
    {{-- <td> --}}
    {{-- @foreach ($internals as $internal)
    {{$internal->trainer_name}}
    <br>
    @endforeach --}}
    <td>{{$course->follower?$course->follower->trainer_name:''}}</td>
{{-- </td> --}}
    <td>
        <a href="{{ route('admin.course.edit',$course->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.course.destroy',$course->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('هل أنت متأكد ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
@endforeach

</table> 
@stop