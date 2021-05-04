<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.includes.header')
    @include('frontend.includes.css')    
</head><!--/head-->

<body>
    @include('frontend.includes.menu')
    
    @yield('body')

    @include('frontend.includes.footer')
    @include('frontend.includes.script')
</body>
</html>