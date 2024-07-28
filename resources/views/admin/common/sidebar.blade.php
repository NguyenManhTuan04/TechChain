<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="{{ asset('assets/admin/img/avatar.jpg') }}"
                             width="48px" height="48px"/>
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong
                                    class="font-bold">{{ Auth::user()->name }}</strong>
                            </span> <span class="text-muted text-xs block">
                                @foreach (Auth::user()->permissions as $permission)
                                    {{ $permission->permission_type }}<b class="caret"></b></span> </span> </a>
                                @endforeach
                    {{--@dd(Auth::user()->permissions('id','permission_type'))--}}
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Thông tin</a></li>
                        <li><a href="contacts.html">Liên lạc</a></li>
                        <li><a href="mailbox.html">Hộp thư</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Đăng xuất</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="{{ route('admins.dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Trang Chủ</span>
                    <span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="{{ route('admins.statistical') }}"><i class="fa fa-diamond"></i> <span
                        class="nav-label">Thống Kê</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Quản lý sản phẩm</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admins.product.index') }}">Danh sách sản phẩm</a></li>
                    <li><a href="{{ route('admins.product.create') }}">Thêm mới sản phẩm</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Quản lý danh mục</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admins.category.index') }}">Danh sách danh mục</a></li>
                    <li><a href="{{ route('admins.category.create') }}">Thêm mới danh mục</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Quản lý khuyến mãi</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admins.category.index') }}">Danh sách danh mục</a></li>
                    <li><a href="">Thêm mới danh mục</a></li>
                    <li><a href="mail_compose.html">Sửa danh mục</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Quản lý banner</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admins.category.index') }}">Danh sách danh mục</a></li>
                    <li><a href="">Thêm mới danh mục</a></li>
                    <li><a href="mail_compose.html">Sửa danh mục</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Quản lý hóa đơn</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @foreach($categories as $item)
                        <li><a href="{{ $item->id }}">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</nav>
