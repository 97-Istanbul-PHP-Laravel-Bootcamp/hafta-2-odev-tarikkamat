<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('')}}/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('')}}/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="{{asset('')}}/vendor/fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('')}}/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  @include('admin.blade.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('admin.blade.topnav')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      @yield('content')
      @include('admin.blade.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('')}}/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('')}}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('')}}/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{asset('')}}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{asset('')}}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="{{asset('')}}/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="{{asset('')}}/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="{{asset('')}}/js/argon.js?v=1.2.0"></script>
</body>

</html>