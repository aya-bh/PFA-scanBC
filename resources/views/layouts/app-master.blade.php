<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ScanBC | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! url('plugins/fontawesome-free/css/all.min.css') !!}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{!! url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{!! url('plugins/jqvmap/jqvmap.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! url('dist/css/adminlte.min.css') !!}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{!! url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{!! url('plugins/daterangepicker/daterangepicker.css') !!}">
    <!-- summernote -->
    <link rel="stylesheet" href="{!! url('plugins/summernote/summernote-bs4.min.css') !!}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

       
        @guest
            <div class="text-end">
                <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Se connecter</a>
            </div>
        @endguest
        @auth

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="far fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     
                      <a href="{{ route('logout.perform') }}" class="dropdown-item">
                        <i class="fas fa-power-off mr-2"></i>Se déconnecter
                      </a>
                                    
                    </div>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="{!! URL('dist/img/scanbc_logo.jpg') !!}" alt="ScanBC Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">ScanBC</span>
                </a>

                @include('layouts.partials.navbar')
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0"> {{ request()->route()->uri }}</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                    <li class="breadcrumb-item active">{{ request()->route()->uri }}</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                @yield('content')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>droits d'auteur &copy; {{ now()->year }} <a href="#">ScanBC</a>.</strong>
                Tous les droits sont réservés.

            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>


        <!-- jQuery -->
        <script src="{!! url('plugins/jquery/jquery.min.js') !!}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{!! url('plugins/jquery-ui/jquery-ui.min.js') !!}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{!! url('plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
        <!-- ChartJS -->
        <script src="{!! url('plugins/chart.js/Chart.min.js') !!}"></script>
        <!-- Sparkline -->
        <script src="{!! url('plugins/sparklines/sparkline.js') !!}"></script>
        <!-- JQVMap -->
        <script src="{!! url('plugins/jqvmap/jquery.vmap.min.js') !!}"></script>
        <script src="{!! url('plugins/jqvmap/maps/jquery.vmap.usa.js') !!}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{!! url('plugins/jquery-knob/jquery.knob.min.js') !!}"></script>
        <!-- daterangepicker -->
        <script src="{!! url('plugins/moment/moment.min.js') !!}"></script>
        <script src="{!! url('plugins/daterangepicker/daterangepicker.js') !!}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{!! url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}"></script>
        <!-- Summernote -->
        <script src="{!! url('plugins/summernote/summernote-bs4.min.js') !!}"></script>
        <!-- overlayScrollbars -->
        <script src="{!! url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>
        <!-- AdminLTE App -->
        <script src="{!! url('dist/js/adminlte.js') !!}"></script>
       
        <script src="{!! url('dist/js/pages/dashboard.js') !!}"></script>
    @endauth

</body>

</html>
