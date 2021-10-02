
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    @yield('title')
  </title>
  @include('includes.admin.style')
  @stack('css')
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('includes.admin.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    @include('includes.admin.navbar')
    <!-- End Navbar -->
    @yield('content')
  </main>
  @include('includes.admin.plugin')
  <!--   Core JS Files   -->
  @include('includes.admin.script')
  @stack('js')
</body>

</html>
