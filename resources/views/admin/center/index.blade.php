@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">All Centers</h1>
<a class="btn btn-outline-success" href="{{route('admin.center.create')}}">Add New Center</a>
</div>
@include('admin.center.message')
    

 <table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>Center Name</th>
    <th>Action</th>
</tr>
@foreach ($center as $center)
<tr>
    <td>{{$center->id}}</td>
    <td>{{$center->center_name}}</td>

    <td>
        <a href="{{ route('admin.center.edit',$center->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.center.destroy',$center->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('Are You Sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
@endforeach

</table> 
@stop