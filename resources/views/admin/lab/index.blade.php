@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">جميع المختبرات</h1>
<a class="btn btn-outline-success" href="{{route('admin.lab.create')}}">إضافة مختبر جديد</a>
</div>
@include('admin.lab.message')
    

 <table class="table">
<tr class="table-primary">
    <th>رقم المختبر</th>
    <th>اسم المختبر</th>
    <th>اسم المركز</th>
    <th>العملية</th>
</tr>
@foreach ($lab as $lab)
<tr>
    <td>{{$lab->id}}</td>
    <td>{{$lab->lab_name}}</td>
    <td>{{$lab->center->center_name}}</td>
    <td>
        <a href="{{ route('admin.lab.edit',$lab->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.lab.destroy',$lab->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('Are You Sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
@endforeach

</table> 
@stop