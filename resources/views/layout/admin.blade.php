<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MTShop | Admin </title>

    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Morris -->
    <link href="{{ asset('assets/admin/css/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/admin/css/animate.css') }}" rel="stylesheet">
    @yield('custom_css')
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">


</head>

<body>
<div id="wrapper">
    <!-- slidebar -->
    @include('admin.common.sidebar')

    <div id="page-wrapper" class="gray-bg">
        @include('admin.common.header')
        {{--tiêu đề--}}

        <!-- Hiển thị -->
        @yield('content')

        @include('admin.common.footer')
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset('assets/admin/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

<script src="{{ asset('assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Flot -->
<script src="{{ asset('assets/admin/js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/flot/jquery.flot.symbol.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/flot/curvedLines.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('assets/admin/js/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/demo/peity-demo.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('assets/admin/js/inspinia.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('assets/admin/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Jvectormap -->
<script src="{{ asset('assets/admin/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('assets/admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Sparkline demo data  -->
<script src="{{ asset('assets/admin/js/demo/sparkline-demo.js') }}"></script>

<!-- ChartJS-->
<script src="{{ asset('assets/admin/js/plugins/chart/js/Chart.min.js') }}"></script>

@yield('script')
</body>

</html>
