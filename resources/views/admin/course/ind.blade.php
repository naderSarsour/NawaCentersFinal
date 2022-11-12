<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">جميع الدورات</h1>
<a class="btn btn-outline-success" href="{{route('admin.course.create')}}">إضافة دورة جديدة</a>
</div>
@include('admin.course.message')
    

 <table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>اسم الدورة</th>
    <th> اسم المركز</th>
    <th>اسم القاعة</th>
    <th>متابع الدورة</th>
    <th>تاريخ بداية الدورة </th>
    <th>تاريخ نهاية الدورة</th>
    <th>موعد الأحد</th>
    <th>موعد الاثنين</th>
    <th>موعد الثلاثاء</th>
    <th>موعد الأربعاء</th>
    <th>موعد الخميس</th>
    <th>العملية</th>
</tr>
@foreach ($course as $course)
<tr>
    <td>{{$course->id}}</td>
    <td>{{$course->course_name}}</td>
    <td>{{$course->center->center_name}}</td>
    <td>{{$course->lab->lab_name}}</td>
    <td>{{$course->nawa_emp}}</td>
    <td>{{$course->created_at}}</td>
    <td>{{$course->updated_at}}</td>
    <td>{{$course->sun}}</td>
    <td>{{$course->mon}}</td>
    <td>{{$course->tus}}</td>
    <td>{{$course->thr}}</td>
    <td>{{$course->wen}}</td>
    {{-- <td>{{$course->trainer->trainer_name}}</td> --}}

    {{-- <td>{{$course->number_of_hour}}</td> --}}

    {{-- <td>{{$lab->category->category_name}}</td> --}}
    {{-- <td>{{$lab->course->course_name}}</td> --}}

    <td>
        <a href="{{ route('admin.course.edit',$course->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.course.destroy',$course->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('هل أنت متأكد ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
@endforeach

</table> 