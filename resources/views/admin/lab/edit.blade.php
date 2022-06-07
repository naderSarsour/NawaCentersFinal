@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Edit Lab : <span class="text-danger">{{$lab->lab_name}}</span></h1>
<a class="btn btn-outline-dark" href="{{route('admin.lab.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.lab.update',$lab->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <lable>Lab Name</lable>
                <input type="text" name="lab_name" value="{{old('lab_name',$lab->lab_name)}}" placeholder="lab_name" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Mobile</lable>
                <input type="text" name="mobile" value="{{old('mobile',$lab->mobile)}}" placeholder="mobile" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>qualification</lable>
                <input type="text" name="qualification" value="{{old('qualification',$lab->qualification)}}" placeholder="qualification" class="form-control" />
          
            </div>
            <button class="ntn btn-primary">Edit</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop