@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Edit category : <span class="text-danger">{{$category->category_name}}</span></h1>
<a class="btn btn-outline-dark" href="{{route('admin.category.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <lable>Category Name</lable>
                <input type="text" name="category_name" value="{{old('category_name',$category->category_name)}}" placeholder="category_name" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Category Age</lable>
                <input type="text" name="category_age" value="{{old('category_age',$category->category_age)}}" placeholder="number_of_hour" class="form-control" />
          
            </div>
            <button class="ntn btn-primary">Edit</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop