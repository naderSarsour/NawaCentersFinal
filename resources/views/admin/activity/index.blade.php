@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-activity mb-4">
    <h1 class="h3 mb-3 text-gray-800">جميع الأنشطة</h1>
<a class="btn btn-outline-success" href="{{route('admin.activity.create')}}">إضافة نشاط جديد</a>
</div>
@include('admin.activity.message')
    

 <table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>اسم النشاط</th>
    <th>العمليات</th>
</tr>
@foreach ($activity as $activity)
<tr>
    <td>{{$activity->id}}</td>
    <td>{{$activity->activity_type}}</td>

    <td>
        <a href="{{ route('admin.activity.edit',$activity->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.activity.destroy',$activity->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('هل أنت متأكد ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
@endforeach

</table> 
@stop