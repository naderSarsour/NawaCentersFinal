@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Add New category</h1>
<a class="btn btn-outline-dark" href="{{route('admin.category.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <lable>category Name</lable>
                <input type="text" name="category_name" value="{{old('category_name')}}" placeholder="category_name" class="form-control" />
          
            </div>

            <div class="mb-3">
                <lable>Number Of Hours</lable>
                <input type="text" name="category_age" value="{{old('category_age')}}" placeholder="category_age" class="form-control" />
          
            </div>

            <button class="ntn btn-primary">Add</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop