@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>تعديل بيانات المركز : <span class="text-danger">{{$center->center_name}}</span></h1>
<a class="btn btn-outline-dark" href="{{route('admin.center.index')}}">رجوع</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.center.update',$center->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <lable>اسم المركز</lable>
                <input type="text" name="center_name" value="{{old('center_name',$center->center_name)}}" placeholder="اسم امركز" class="form-control" />
          
            </div>

            <button class="btn btn-primary">تعديل</button>
        </form>
      </div>
  </div>

</div> 
 
@stop
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endpush