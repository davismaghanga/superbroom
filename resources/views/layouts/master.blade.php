<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SuperBroom Admin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @yield('styles')
</head>
<body>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/')}}" class="nav-link">Welcome</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('about')}}" class="nav-link">About</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('services')}}" class="nav-link">Services</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('contacts')}}" class="nav-link">Contacts</a>
        </li>
    </ul>


    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="{{url('/logout')}}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            >
                <i class="fa fa-power-off"></i>
                <span>Logout</span>
            </a>

            <form id="logout-form" action="{{url('/logout')}}" method="POST" style="display: none;">
                {{csrf_field()}}
            </form>
        </li>
    </ul>


</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/images/default.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Testimonials</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('superbroom/admin/messages')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Client Messages</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('superbroom/admin/quotations')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Client Quotations</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('superbroom/admin/notifications')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Notifications</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!--Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            @yield('content')
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /content-wrapper-->


<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- daterangepicker -->
<script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
@yield('scripts')
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>


</body>
</html>
