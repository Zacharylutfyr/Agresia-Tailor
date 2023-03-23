<html lang="en">

<head>
   
  <!-- Bootstrap CSS -->
  @include('includes.styles')

  <!-- CSS -->
  @yield('styling')

</head>
<body>

    <title>@yield('title')</title>

    <!-- todo Navbar -->
    @include('includes.navbar')
    <!-- todo Last Navbar -->

   <!-- todo Content -->
    @yield('content')
    <!-- todo Last Content -->

     <!-- todo Footer -->
     @include('includes.footer')
     <!-- todo Last Footer -->

     <!-- Bootstrap JS -->
    @include('includes.script') 

</body>

</html>