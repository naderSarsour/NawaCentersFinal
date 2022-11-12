@extends('admin.master')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">صفحة الإحصائيات</h1>
    {{-- Row 1 --}}
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase h6">
                                <span class="h6">عدد الدورات المنفذة </span>
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $courses_count }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 text-center">
                            {{-- <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> --}}
                            <span class="h6"><span class="text-info text-center">المدربين </span></span>

                            <div class="row h6 mb-0 font-weight-bold text-gray-800">
                                <div class="col-6">
                                    {{ $internal }}
                                </div>
                                <div class="col-6 h6 mb-0 font-weight-bold text-gray-800">داخل النوى</div>
                            </div>
                            <div class="row">
                                <div class="col-6 h6 mb-0 font-weight-bold text-gray-800">
                                    {{ $external }}
                                </div>
                                <div class="col-6 h6 mb-0 font-weight-bold text-gray-800">خارج النوى</div>
                            </div>
                            {{-- <div class="h6 mb-0 font-weight-bold text-gray-800">{{$internal}}</div> --}}
                            {{-- internal --}}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <span class="h6"> مطويات النوى</span>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    @forelse ($calender as $calender)
                                        <div class="h6 mb-0 font-weight-bold text-gray-800"><span>
                                                <ol>{{ $calender->calender_name }} </ol>
                                            </span></div>
                                    @empty
                                        <p>لا يوجد مطويات </p>
                                </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
         </div>
        <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2 ">
                        <div class="text-xs h1 font-weight-bold text-warning text-uppercase mb-1 ">
                            <div class="row">
                                <div class="col h6 text-center text-info">
                                    اسم المطوية
                                </div>
                                <div class="col h6 text-center">
                                    عدد الدورات
                                </div>
                            </div>
                        </div>
                        {{-- {{$enrollments_count}} --}}
                        <div class="h6 mb-0 font-weight-bold text-gray-800">
                            @forelse ($balance as $bal)
                                <div class="row">
                                    <div class="col-9">
                                        {{ $bal->calender_name }}
                                    </div>
                                    <div class="col-3">
                                        {{ $bal->count_course }}
                                    </div>
                                </div>
                            @empty
                                <p>لا يوجد دورات</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Row 2 --}}
    <div class="row">
    
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <div class="row">
                                <div class="col h6 text-center text-info">
                                    اسم الفئة
                                </div>
                                <div class="col h6 text-center">
                                    عدد الدورات
                                </div>
                            </div>
                            {{-- <span class="h6 text-center">عدد الدورات<span class="text-info">---------اسم الفئة</span></span> --}}
                        </div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800">
                            @forelse ($aa as $a)
                                <div class="row">
                                    <div class="col text-center">
                                        {{ $a->category_name }}
                                    </div>
                                    <div class="col text-center">
                                        {{ $a->count_course }}
                                    </div>
                                </div>
                            @empty
                                <p>لا يوجد فئات</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <div class="row">
                                <div class="col h6 text-center text-info">
                                    اسم المركز
                                </div>
                                <div class="col h6 text-center">
                                    عدد الدورات
                                </div>
                            </div>
                            {{-- <span class="h6 text-center">عدد الدورات<span class="text-info">-------اسم المركز</span></span> --}}
                        </div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800">
                            @forelse ($centers as $bb)
                                <div class="row">
                                    <div class="col text-center">
                                        {{ $bb->center_name }}
                                    </div>
                                    <div class="col text-center">
                                        {{ $bb->count_course }}
                                    </div>
                                </div>
                            @empty
                                <p>لا يوجد دورات في المراكز</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@stop
