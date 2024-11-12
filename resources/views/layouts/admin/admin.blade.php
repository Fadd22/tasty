<!doctype html>
<html lang="en" data-bs-theme="semi-dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TASTY FOOD</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png">
  <!-- loader-->
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet">
	<script src="{{asset('assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/metismenu/metisMenu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/metismenu/mm-vertical.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}">
  <!--bootstrap css-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('sass/main.css')}}" rel="stylesheet">
  <link href="{{asset('sass/dark-theme.css')}}" rel="stylesheet">
  <link href="{{asset('sass/blue-theme.css')}}" rel="stylesheet">
  <link href="{{asset('sass/semi-dark.css')}}" rel="stylesheet">
  <link href="{{asset('sass/bordered-theme.css')}}" rel="stylesheet">
  <link href="{{asset('sass/responsive.css')}}" rel="stylesheet">
  @yield('styles')

</head>

<body>

  <!--start header-->
  @include('layouts.admin.nav')
  <!--end top header-->


   <!--start sidebar-->
   @include('layouts.admin.sidebar')
<!--end sidebar-->

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
        @yield('content')
    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
     <div class="overlay btn-toggle"></div>
  <!--end overlay-->

   <!--start footer-->
   <footer class="page-footer">
    <p class="mb-0">Copyright © 2024.</p>
  </footer>
  <!--end footer-->

  <!--bootstrap js-->
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

  <!--plugins-->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('assets/plugins/metismenu/metisMenu.min.js')}}"></script>
  <script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
  <script>
    $(".data-attributes span").peity("donut")
  </script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/dashboard1.js')}}"></script>
  <script>
	   new PerfectScrollbar(".user-list")
  </script>
  @stack('scripts')
  @include('sweetalert::alert')


</body>

</html>
