  <!-- Sidebar -->
  
  <ul class= "navbar-nav data-mdb-position:absolute bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="navbar-brand  mx-5" href="{{route('website.home')}}">
        <img width="100"  src="{{asset('websiteasset/images/logo.png')}}" alt="">
      </a>
    <div>مؤسسة نوى للثقافة والفنون </div>
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('website.home')}}">
      
        
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>الإحصائيات</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews"
            aria-expanded="true" aria-controls="collapseNews">
            <i class="fas fa-fw fa-comment"></i>
            <span>المدرب</span>
        </a>
        <div id="collapseNews" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.trainer.index')}}">المدربين</a>
                <a class="collapse-item" href="{{ route('admin.trainer.create')}}">إضافة مدرب جديد</a>
            </div>
        </div>
        </li>
        <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjct"
            aria-expanded="true" aria-controls="collapseProjct">
            <i class="fas fa-fw fa-comment"></i>
            <span>الدورات</span>
        </a>
        <div id="collapseProjct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.course.index')}}">الدورات </a>
                <a class="collapse-item" href="{{ route('admin.course.create')}}">إضافة دورة جديدة </a>

            </div>
        </div>
        </li>
                {{-- @if(Auth::user()->type == 'super-admin') --}}
                 <!-- Divider -->
                 <hr class="sidebar-divider">
                 <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents"
                        aria-expanded="true" aria-controls="collapseEvents">
                        <i class="fas fa-fw fa-calendar"></i>
                        <span>المراكز</span>
                    </a>
                    <div id="collapseEvents" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('admin.center.index')}}">المراكز</a>
                            <a class="collapse-item" href="{{ route('admin.center.create')}}">إضافة مركز جديد</a>
                        </div>
                    </div>
                </li>
                {{-- @endif --}}
                
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-fw fa-calendar"></i>
            <span>الفئات</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.category.index')}}">الفئات</a>
                <a class="collapse-item" href="{{ route('admin.category.create')}}">إضافة فئة جديدة</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLab"
            aria-expanded="true" aria-controls="collapseLab">
            <i class="fas fa-fw fa-calendar"></i>
            <span>قاعات التدريب</span>
        </a>
        <div id="collapseLab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.lab.index')}}">قاعات التدريب</a>
                <a class="collapse-item" href="{{ route('admin.lab.create')}}">إضافة قاعة تدريب</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->