@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>تعديل المختبر : <span class="text-danger">{{$lab->lab_name}}</span></h1>
<a class="btn btn-outline-dark" href="{{route('admin.lab.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.lab.update',$lab->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <lable>اسم المختبر</lable>
                <input type="text" name="lab_name" value="{{old('lab_name',$lab->lab_name)}}" placeholder="اسم المختبر" class="form-control" />
            </div>
            <div class="mb-3">
                <lable>اسم المركز</lable>
                <select name="center_id" id="center_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($centers as $center) <option value="{{ $center->id }}">{{ $center->center_name }}</option> @endforeach </select>
            </div>
            <button class="ntn btn-primary">تعديل</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop