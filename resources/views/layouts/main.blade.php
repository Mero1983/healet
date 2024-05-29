<!DOCTYPE html>
<html>

<head>
@include('includes.head')
</head>
<body>
  @yield('headerAbout')
@yield('content')
@yield('blog')
@include('includes.info')

  <!-- footer section -->
  @include('includes.footer')

  <!-- footer section -->

  @include('includes.footerJS')

  <!-- jQery -->
 

</body>

</html>