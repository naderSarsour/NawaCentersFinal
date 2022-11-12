@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>إضافة مطوية جديدة</h1>
<a class="btn btn-outline-dark" href="{{route('admin.calender1.index')}}">رجوع</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.calender1.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <lable>اسم المطوية</lable>
                <input type="text" name="calender_name" value="{{old('calender_name')}}" placeholder="اسم المطوية" class="form-control" />
            </div>
            <div class="mb-3">
                <lable>وصف المطوية</lable>
                <input type="text" name="calender_desc" value="{{old('calender_desc')}}" placeholder="وصف المطوية" class="form-control" />
            </div>
            <div class="mb-3">
                <lable>تاريخ بداية المطوية</lable>
                <input type="date" name="from" value="{{old('from')}}" placeholder="من" class="form-control" />
            </div>
            <div class="mb-3">
                <lable>تاريخ نهاية المطوية</lable>
                <input type="date" name="to" value="{{old('to')}}" placeholder="إلى" class="form-control" />
          
            </div>

            <button class="ntn btn-primary">إضافة</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop