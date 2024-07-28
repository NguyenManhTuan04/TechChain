<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MTShop | Đăng Ký</title>

    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="font-awesome/{{ asset('assets/admin/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

                <h1 class="logo-name text-center">MTShop</h1>
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>




            <h3>Đăng ký tài khoản</h3>
            <p>Tạo một tài khoản đển nâng cao trải nghiệm.</p>
            <form class="m-t" role="form" method="post" action="{{ route('admin.register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên" required="required" value="{{ old('name') }}">
                </div>
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email" required="required" value="{{ old('email') }}">
                </div>
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required="required" value="{{ old('password') }}">
                </div>
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-primary block full-width m-b">Đăng ký</button>

                <p class="text-muted text-center"><small>Bạn đã có tài khoản?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.html">Đăng nhập</a>
            </form>
            <p class="m-t"> <small>MTShop &copy; 2024</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('assets/admin/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/admin/js/plugins/iCheck/icheck.min.js') }}"></script>

</body>

</html>
