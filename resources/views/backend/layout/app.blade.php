<!doctype html>
<html lang="en">

<head>
        @include('backend.include.header')
</head>
    <body data-sidebar="dark">
        <div id="layout-wrapper">
        @include('backend.include.body_header') 
        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.include.sidebar')
        <!-- Left Sidebar End -->
            <!-- Start right Content here -->
            <div class="main-content">
                @yield('content')
                @include('backend.include.body_footer')           
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
        @include('backend.include.footer')
    </body>
</html>