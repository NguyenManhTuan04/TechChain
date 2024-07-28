<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="font-awesome/{{ asset('assets/admin/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">
    <div class="row">

        <div class="col-md-6">
            <h2 class="font-bold">Chào mừng đến với <b>MTShop</b></h2>

            <p>
                MTShop ra đời vào năm 2010 từ một cửa hàng thời trang nhỏ ở Hà Nội, sáng lập bởi một nhóm nhà thiết kế
                trẻ đầy đam mê.
            </p>

            <p>
                Nhận thấy tiềm năng của thương mại điện tử, MTShop ra mắt website bán hàng trực tuyến vào năm 2013,
                nhanh chóng thu hút nhiều khách hàng và trở thành một trong những website bán quần áo được yêu thích
                nhất tại Việt Nam.
            </p>

            <p>
                <small>MTShop tự hào về hành trình phát triển của mình và cam kết tiếp tục đổi mới, sáng tạo để mang đến
                    những giá trị tốt nhất cho khách hàng.</small>
            </p>

        </div>
        <div class="col-md-6">
            <div class="ibox-content">
                <h2 class="font-bold">Đăng Nhập</h2>
                <form class="m-t" role="form" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Nhập email"
                               required="required" value="{{ old('email') }}">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu"
                               required="required">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Đăng nhập</button>

                    <a href="{{ route('password.request') }}">
                        <small>Quên mật khẩu?</small>
                    </a>

                    <p class="text-muted text-center">
                        <small>Không có tài khoản?</small>
                    </p>
                    <a class="btn btn-sm btn-white btn-block" href="{{ route('admin.showFormRegister') }}">Tạo tài khoản
                        mới</a>
                </form>
                <p class="m-t">
                    <small>MTShop &copy; 2024</small>
                </p>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            MTShop
        </div>
        <div class="col-md-6 text-right">
            <small>© 2024</small>
        </div>
    </div>
</div>

</body>

</html>
