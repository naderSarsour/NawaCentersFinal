@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">All Trainers</h1>
<a class="btn btn-outline-success" href="{{route('admin.trainer.create')}}">Add New trainer</a>
</div>
@include('admin.trainer.message')
    

 <table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>trainer Name</th>
    <th>Image</th>
    <th>Mobile</th>
    <th>Qualification</th>
    <th>Action</th>
</tr>
@foreach ($trainer as $trainer)
<tr>
    <td>{{$trainer->id}}</td>
    <td>{{$trainer->trainer_name}}</td>
    <td><img width="100" src="{{asset('uploads/'.$trainer->image)}}" alt=""></td>
    <td>{{$trainer->mobile}}</td>
    <td>{{$trainer->qualification}}</td>

    <td>
        <a href="{{ route('admin.trainer.edit',$trainer->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.trainer.destroy',$trainer->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('Are You Sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
@endforeach

</table> 
@stop