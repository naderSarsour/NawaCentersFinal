@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">All Courses</h1>
<a class="btn btn-outline-success" href="{{route('admin.course.create')}}">Add New Course</a>
</div>
@include('admin.course.message')
    

 <table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>Course Name</th>
    <th>Number Of Hours</th>
    <th>Action</th>
</tr>
@foreach ($course as $course)
<tr>
    <td>{{$course->id}}</td>
    <td>{{$course->course_name}}</td>
    <td>{{$course->number_of_hour}}</td>

    <td>
        <a href="{{ route('admin.course.edit',$course->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.course.destroy',$course->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('Are You Sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
@endforeach

</table> 
@stop