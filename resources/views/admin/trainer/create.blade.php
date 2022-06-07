@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Add New Trainer</h1>
<a class="btn btn-outline-dark" href="{{route('admin.trainer.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.trainer.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <lable>Trainer Name</lable>
                <input type="text" name="trainer_name" value="{{old('trainer_name')}}" placeholder="trainer_name" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Image</lable>
                <input type="file" name="image"  class="form-control" />
            </div>
            <div class="mb-3">
                <lable>Mobile</lable>
                <input type="text" name="mobile" value="{{old('mobile')}}" placeholder="mobile" class="form-control" />
            </div>
            <div class="mb-3">
                <lable>Qualification</lable>
                <input type="text" name="qualification" value="{{old('qualification')}}" placeholder="qualification" class="form-control" />
          
            </div>
            <button class="ntn btn-primary">Add</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop