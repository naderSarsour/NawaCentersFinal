@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">All Categories</h1>
<a class="btn btn-outline-success" href="{{route('admin.category.create')}}">Add New Category</a>
</div>
@include('admin.category.message')
    

 <table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>Category Name</th>
    <th>Age Group</th>
    <th>Action</th>
</tr>
@foreach ($category as $category)
<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->category_name}}</td>
    <td>{{$category->category_age}}</td>

    <td>
        <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.category.destroy',$category->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('Are You Sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
@endforeach

</table> 
@stop