@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>إضافة دورة جديدة</h1>
<a class="btn btn-outline-dark" href="{{route('admin.course.index')}}">رجوع</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.course.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <lable> اسم الدورة</lable>
                <input type="text" name="course_name" value="{{old('course_name')}}" placeholder="اسم الدورة" class="form-control" />
            </div>
            {{-- <div class="mb-3">
                <lable> نوع الدورة</lable>
                <input type="text" name="type_name" value="{{old('type_name')}}" placeholder="نوع الدورة" class="form-control" />
            </div> --}}
            <div class="mb-3">
                <label> نوع النشاط</label>
                <select name="activity_id" id="activity_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($activity as $activity) <option value="{{ $activity->id }}">{{ $activity->activity_type }}</option> @endforeach </select>
            </div>
            <div class="mb-3">
                <lable>وصف الدورة</lable>
                <input type="text" name="disc_course" value="{{old('disc_course')}}" placeholder="وصف الدورة" class="form-control" />
            </div>
            <div class="mb-3">
                <label> الفئة العمرية</label>
                <select name="category_id" id="category_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($category as $category) <option value="{{ $category->id }}">{{ $category->category_name }}</option> @endforeach </select>
            </div>
         
            <div class="mb-3">
                <lable> عدد ساعات الدورة</lable>
                <input type="integer" name="number_of_hour" value="{{old('number_of_hour')}}" placeholder="عدد ساعات الدورة" class="form-control" />
            </div>
            <div class="mb-3">
                <label> مدرب الدورةالرئيسي</label>
                <select name="trainer_id" id="trainer_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($trainer as $trainer) <option value="{{ $trainer->id }}">{{ $trainer->trainer_name }}</option> @endforeach </select>
                {{-- <select name="trainer_id" id="trainer_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($external as $external) <option value="{{ $external->id }}">{{ $external->trainer_name }}</option> @endforeach </select> --}}

            </div>
            <div class="mb-6">
                <lable> الدورة من تاريخ</lable>
                <input type="date" name="start_course" value="{{old('start_course')}}" placeholder="تاريخ بداية الدورة" class="form-control" />
            </div>
            <div class="mb-6">
                <lable> الدورة الى تاريخ</lable>
                <input type="date" name="finish_course" value="{{old('finish_course')}}" placeholder="تاريخ نهاية الدورة" class="form-control" />
            </div>
            <div class="mb-3">
                <label> المركز</label>
                <select name="center_id" id="center_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($center as $center) <option value="{{ $center->id }}">{{ $center->center_name }}</option> @endforeach </select>
            </div>
            <div class="mb-3">
                <label> القاعة</label>
                <select name="lab_id" id="lab_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($lab as $lab) <option value="{{ $lab->id }}">{{ $lab->lab_name }}</option> @endforeach </select>
            </div>
            <div class="mb-3">
                <label> المطوية</label>
                <select name="calender_id" id="calender_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($calender1 as $calender1) <option value="{{ $calender1->id }}">{{ $calender1->calender_name }}</option> @endforeach </select>
            </div>
            <div class="mb-3">
                <lable>متابع الدورة</lable>
                {{-- <input type="text" name="nawa_emp" value="{{old('nawa_emp')}}" placeholder="اسم موظف نوى متابع الدورة" class="form-control" /> --}}
                <select name="follower_id" id="follower_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($internal as $internal) <option value="{{ $internal->id }}">{{ $internal->trainer_name }}</option> @endforeach </select>

            </div>
            <div class="mb-3">
                <lable> عدد ساعات اللقاء</lable>
                <input type="integer" name="hour" value="{{old('hour')}}" placeholder="عدد ساعات اللقاء الواحد" class="form-control" />
            </div>
            <div class="mb-3">
                <lable>اختر الوقت المناسب علما بأن مواعيد العمل (8:00 حتى 17:00): </lable>
            </div>
            <div class="mb-3">
                <lable> السبت</lable>
                <input type="time" name="sat" value="{{old('sat')}}" placeholder="موعد الدورة يوم السبت" class="form-control" />
            </div>
            <div class="mb-3">
                <lable> الأحد</lable>
                <input type="time" name="sun" value="{{old('sun')}}" placeholder="موعد الدورة يوم الأحد" class="form-control" />
            </div>
            <div class="mb-3">
                <lable> الإثنين</lable>
                <input type="time" name="mon" value="{{old('mon')}}" placeholder="موعد الدورة يوم الاثنين" class="form-control" />
            </div>
            <div class="mb-3">
                <lable> الثلاثاء</lable>
                <input type="time" name="tus" value="{{old('tus')}}" placeholder=" موعد الدورة يوم الثلاثاء" class="form-control" />
            </div>
            <div class="mb-3">
                <lable> الأربعاء</lable>
                <input type="time" name="thr" value="{{old('thr')}}" placeholder="موعد الدورة يوم الأربعاء" class="form-control" />
            </div>
            <div class="mb-3">
                <lable> الخميس</lable>
                <input type="time" name="wen" value="{{old('wen')}}" placeholder="موعد الدورة يوم الخميس" class="form-control" />
            </div>
            <div class="mb-3">
                <lable> الجمعة</lable>
                <input type="time" name="fri" value="{{old('fri')}}" placeholder="موعد الدورة يوم الجمعة" class="form-control" />
            </div>

            <button class="btn btn-primary">إضافة</button>
        </form>
      </div>
  </div>

</div>
 
   
@stop