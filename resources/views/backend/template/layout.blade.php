<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.include.header')
    @include('backend.include.css')
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('backend.include.menu')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('backend.include.topbar')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('backend.include.message')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
      @yield('dashboard-content')

      @include('backend.include.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    @include('backend.include.script')
  </body>
</html>
