<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.webicode.com/html/Bo-shop-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 13:02:43 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="M_Adnan">
    <link rel="icon" href="{{ URL('assets/client/images/icon-logo.png') }}" sizes="16x16" type="image/png">
    <title>MTShop - Mua sắm thỏa thích</title>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/rs-plugin/css/settings.css') }}"
        media="screen" />

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/client/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/client/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/client/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/font/flaticon.css') }}" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="{{ asset('assets/client/js/modernizr.js') }}"></script>

    <!-- Online Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Poppins:300,400,500,600,700|Montserrat:300,400,500,600,700,800"
        rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <!-- LOADER -->
    <div id="loader">
        <div class="position-center-center">
            <div class="ldr"></div>
        </div>
    </div>

    <!-- Wrap -->
    <div id="wrap">
        @include('client.common.header')




        <!-- Content -->
        @yield('content')

        @include('client.common.footer')


    </div>
    <script src="{{ asset('assets/client/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/own-menu.js') }}"></script>
    <script src="{{ asset('assets/client/js/jquery.lighter.js') }}"></script>
    <script src="{{ asset('assets/client/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/lazysizes.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/main.js') }}"></script>
</body>

<!-- Mirrored from demos.webicode.com/html/Bo-shop-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 13:02:43 GMT -->

</html>
