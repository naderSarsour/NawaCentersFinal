@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">جميع المدربين</h1>
<a class="btn btn-outline-success" href="{{route('admin.trainer.create')}}">إضافة مدرب جديد</a>
</div>
@include('admin.trainer.message')
    

 <table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>اسم المدرب</th>
    <th>نوع المدرب</th>
    <th>صورة المدرب</th>
    <th>رقم الجوال</th>
    <th>التخصص</th>
    <th>السيرة الذاتية</th>
    <th>العمليات</th>
</tr>
@foreach ($trainer as $trainer)
<tr>
    <td>{{$trainer->id}}</td>
    <td>{{$trainer->trainer_name}}</td>
    <td>{{$trainer->type}}</td>
    <td><img width="80" src="{{asset('uploads/'.$trainer->image)}}" alt=""></td>
    <td>{{$trainer->mobile}}</td>
    <td>{{$trainer->qualification}}</td>
    <td><a download href="{{asset('uploads/'.$trainer->cv)}}" alt="">{{$trainer->cv}}</a></td>

    <td>
        <a href="{{ route('admin.trainer.edit',$trainer->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.trainer.destroy',$trainer->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('هل انت متأكد ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
@endforeach

</table> 
@stop