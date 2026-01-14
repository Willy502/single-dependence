<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- HEADER -->
    @include('header.header')
    <!-- /HEADER -->
<body>
    
    <!-- TOP AND NAVBAR -->
    @include('utils.all-in')
    <!-- /TOP AND NAVBAR -->
    
    <!-- MAIN CONTENT -->
    @yield('main-content')
    <!-- /MAIN CONTENT -->

    <!-- FOOTER -->
    @yield('footer')
    <!-- /FOOTER -->

    <!-- MENU -->
    @include('menus.main-menu')
    <!-- /MENU -->

    <!-- JavaScripts -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>

</body>
</html>