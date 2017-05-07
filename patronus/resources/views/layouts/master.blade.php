<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">

    <script>
      window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
      </script>

    </head>

    <body class="hold-transition skin-blue sidebar-mini">
   

        <div class="wrapper">
          <header class="main-header">
            <!-- Logo -->
            <a class="logo"href="{{ url('/') }}">
              <span class="logo-lg"><b>{{ config('app.name', 'Laravel') }}</b></span>

            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">



                 @if (Auth::guest())
                 <li><a href="{{ route('login') }}">Login</a></li>
                 <li><a href="{{ route('register') }}">Register</a></li>
                 @else
                 <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      <p>
                        {{ Auth::user()->name }}
                        <small>since Nov. 2012</small>
                      </p>
                    </li>


                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Sign out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                      </div>
                    </li>
                  </ul>
                </li>
                @endif

                <!-- Control Sidebar Toggle Button -->

              </ul>
            </div>
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            @if (Auth::guest())
            @else
            <div class="user-panel">
              <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            @endif


            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>

              <li>
                <a href="/survey">
                  <i class="fa fa-dashboard"></i> <span>Survey</span>

                </a>

              </li>

              <li>
               <a href="/past">
                <i class="fa fa-dashboard"></i> <span>Past Results</span>
                
              </a>
              
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

    @yield('content')
      </div>


      <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery 2.2.3 -->


    <script src="/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


{{-- <script src="https://surveyjs.azureedge.net/0.12.12/survey.vue.min.js"></script> --}}
{{-- <script src="https://surveyjs.azureedge.net/0.12.12/survey.jquery.min.js"></script> --}}
{{-- <script src="/js/surveyController.js"></script> --}}
   {{--  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script> --}}
    <!-- Bootstrap 3.3.6 -->
    {{-- <script src="bootstrap/js/bootstrap.min.js"></script> --}}
    <!-- FastClick -->
    {{-- <script src="plugins/fastclick/fastclick.js"></script> --}}

    <!-- AdminLTE App -->
    <script src="/js/panel.js"></script>
    <!-- Sparkline -->
      {{-- <script src="plugins/sparkline/jquery.sparkline.min.js"></script>

      <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

      <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  
      <script src="plugins/chartjs/Chart.min.js"></script> --}}
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      {{-- <script src="dist/js/pages/dashboard2.js"></script> --}}
      <!-- AdminLTE for demo purposes -->
      {{-- <script src="dist/js/demo.js"></script> --}}

      {{-- <script src="/js/app.js"></script> --}}
      
    </body>

    </html>
