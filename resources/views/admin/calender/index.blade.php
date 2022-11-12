@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-calender1 mb-4">
    <h1 class="h3 mb-3 text-gray-800">جميع المطويات</h1>
<a class="btn btn-outline-success" href="{{route('admin.calender1.create')}}">إضافة مطوية جديدة</a>
</div>
@include('admin.calender.message')
 <table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>اسم المطوية</th>
    <th> تفاصيل المطوية</th>
    <th>تاريخ بداية المطوية</th>
    <th>تاريخ إنتهاء المطوية</th>
    <th>العمليات</th>
</tr>
@foreach ($calender1 as $calender1)
<tr>
    <td>{{$calender1->id}}</td>
    <td>{{$calender1->calender_name}}</td>
    <td>{{$calender1->calender_desc}}</td>
    <td>{{$calender1->from}}</td>
    <td>{{$calender1->to}}</td>

    <td>
        <a href="{{ route('admin.calender1.edit',$calender1->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.calender1.destroy',$calender1->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('هل أنت متأكد ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>

</tr>  
@endforeach

</table> 
@stop