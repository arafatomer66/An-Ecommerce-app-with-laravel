<!doctype html>
<html lang="en">
  <head>

    @include('frontend.includes.header')
    @include('frontend.includes.css')

  </head>
  <body>


    @yield('body-content')
    @include('frontend.includes.footer')
    @include('frontend.includes.script')

  </body>
</html>
