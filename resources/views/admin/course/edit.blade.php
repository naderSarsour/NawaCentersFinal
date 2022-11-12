@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>تعديل الدورة:<span class="text-danger">{{$course->title}}</span></h1>
<a class="btn btn-outline-dark" href="{{route('admin.course.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.course.update',$course->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <lable> اسم الدورة</lable>
                <input type="text" name="course_name" value="{{old('course_name',$course->course_name)}}" placeholder="course_name" class="form-control" />
            </div>
            <div class="mb-3">
                <lable>نوع النشاط </lable>
                {{-- <input type="text" name="activity_type" value="{{old('activity_type',$course->activity_type)}}" placeholder="نوع النشاط" class="form-control" /> --}}
                <select name="activity_id" id="activity_id" class="form-control"> <option value="" >-- Select One --</option> @foreach ($activity as $activity) <option value="{{ $activity->id }}">{{ $activity->activity_type }}</option> @endforeach </select>
            </div>
            <div class="mb-3">
                <lable>وصف الدورة</lable>
                <input type="text" name="disc_course" value="{{old('disc_course',$course->disc_course)}}" placeholder="وصف الدورة" class="form-control" />
            </div>
            <div class="mb-3">
                <label> الفئة العمرية</label> 
                {{-- {{old('category_name',$course->category->category_name)}} --}}
                <select name="category_id" id="category_id" class="form-control"> <option value="{{old('category_name',$course->category->category_name)}}" selected>-- Select One --</option> @foreach ($category as $category) <option value="{{ $category->id }}">{{ $category->category_name }}</option> @endforeach </select>
            </div>
            <div class="mb-3">
                <lable>عدد ساعات الدورة</lable>
                <input type="text" name="number_of_hour" value="{{old('number_of_hour',$course->number_of_hour)}}" placeholder="number_of_hour" class="form-control" />
            </div>
                <div class="mb-3">
                    <label>مدرب الدورة</label>
                    <select name="trainer_id" id="trainer_id" class="form-control"> <option value="">-- Select One --</option> @foreach ($trainer as $trainer) <option value="{{ $trainer->id }}">{{ $trainer->trainer_name }}</option> @endforeach </select>
                </div>
                <div class="mb-6">
                    <lable> الدورة من تاريخ</lable>
                    <input type="date" name="start_course" value="{{old('start_course',$course->start_course)}}" placeholder="تاريخ بداية الدورة" class="form-control" />
                </div>
                <div class="mb-6">
                    <lable> الدورة الى تاريخ</lable>
                    <input type="date" name="finish_course" value="{{old('finish_course',$course->finish_course)}}" placeholder="تاريخ نهاية الدورة" class="form-control" />
                </div>
                <div class="mb-3">
                    <label> المركز</label>
                    {{-- <select name="trainer_id" id="trainer_id" class="form-control"> <option value="">-- Select One --</option> @foreach ($trainer as $trainer) <option value="{{ $trainer->id }}">{{ $trainer->trainer_name }}</option> @endforeach </select> --}}
                    <select name="center_id" id="center_id" class="form-control"> <option value="">-- Select One --</option> @foreach ($center as $center) <option value="{{ $center->id }}">{{ $center->center_name }}</option> @endforeach </select>
                </div>
                <div class="mb-3">
                    <label> القاعة</label>
                    <select name="lab_id" id="lab_id" class="form-control"> <option value="{{old('lab_name',$course->lab->lab_name)}}">-- Select One -- </option> @foreach ($lab as $lab) <option value="{{ $lab->id }}">{{ $lab->lab_name }}</option> @endforeach </select>
                </div>
                <div class="mb-3">
                    <label> المطوية</label>
                    <select name="calender_id" id="calender_id" class="form-control"> <option value="{{old('calender_name',$course->calender->calender_id)}}"> -- Select One --</option> @foreach ($calender as $calender) <option value="{{ $calender->id }}">{{ $calender->calender_name }}</option> @endforeach </select>
                </div>
               <div class="mb-3">
                <lable>متابع الدورة</lable>
                {{-- <input type="text" name="nawa_emp" value="{{old('nawa_emp')}}" placeholder="اسم موظف نوى متابع الدورة" class="form-control" /> --}}
                <select name="follower_id" id="follower_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($internal as $internal) <option value="{{ $internal->id }}">{{ $internal->trainer_name }}</option> @endforeach </select>

            </div>
                <div class="mb-3">
                    <lable> عدد ساعات اللقاء</lable>
                    <input type="integer" name="hour" value="{{old('hour',$course->hour)}}" placeholder="عدد ساعات اللقاء الواحد" class="form-control" />
                </div>
                <div class="mb-3">
                    <lable>اختر الوقت المناسب علما بأن مواعيد العمل (8:00 حتى 17:00): </lable>
                </div>
                <div class="mb-3">
                    <lable> السبت</lable>
                    <input type="time" name="sat" value="{{old('sat',$course->sat)}}" placeholder="موعد الدورة يوم السبت" class="form-control" />
                </div>
                <div class="mb-3">
                    <lable> الأحد</lable>
                    <input type="time" name="sun" value="{{old('sun',$course->sun)}}" placeholder="موعد الدورة يوم الأحد" class="form-control" />
                </div>
                <div class="mb-3">
                    <lable> الإثنين</lable>
                    <input type="time" name="mon" value="{{old('mon',$course->mon)}}" placeholder="موعد الدورة يوم الاثنين" class="form-control" />
                </div>
                <div class="mb-3">
                    <lable> الثلاثاء</lable>
                    <input type="time" name="tus" value="{{old('tus',$course->tus)}}" placeholder=" موعد الدورة يوم الثلاثاء" class="form-control" />
                </div>
                <div class="mb-3">
                    <lable> الأربعاء</lable>
                    <input type="time" name="thr" value="{{old('thr',$course->thr)}}" placeholder="موعد الدورة يوم الأربعاء" class="form-control" />
                </div>
                <div class="mb-3">
                    <lable> الخميس</lable>
                    <input type="time" name="wen" value="{{old('wen',$course->wen)}}" placeholder="موعد الدورة يوم الخميس" class="form-control" />
                </div>
                <div class="mb-3">
                    <lable> الجمعة</lable>
                    <input type="time" name="fri" value="{{old('fri',$course->fri)}}" placeholder="موعد الدورة يوم الجمعة" class="form-control" />
                </div>
            
            <button class="ntn btn-primary">تعديل</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop