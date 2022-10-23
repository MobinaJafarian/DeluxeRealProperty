<!doctype html>
<html lang="en">
<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')
</head>

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

                @yield('content')


        </div>
        <!-- END: Content-->
    </div>


@include('admin.layouts.scripts')
@yield('script')

</html>