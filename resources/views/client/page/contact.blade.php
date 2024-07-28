@extends('layout.client')
@section('content')
  <!-- Content -->
  <div id="content">

    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>Liên lạc với chúng tôi ngay</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Liên hệ</li>
                </ol>
            </div>
        </div>
    </section>



    <!--======= CONATACT  =========-->
    <section class="contact padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="contact-form">
                <h5>Giữ liên lạc với chúng tôi</h5>
                <div class="row">
                    <div class="col-md-8">

                        <!--======= Success Msg =========-->
                        <div id="contact_message" class="success-msg"> <i
                                class="fa fa-paper-plane-o"></i>Cảm ơn. Thông điệp của bạn đã được gửi
                        </div>

                        <!--======= FORM  =========-->
                        <form role="form" id="contact_form" class="contact-form" method="post"
                            onSubmit="return false">
                            <ul class="row">
                                <li class="col-sm-6">
                                    <label>Họ và tên *
                                        <input type="text" class="form-control" name="name"
                                            id="name" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <label>Email *
                                        <input type="text" class="form-control" name="email"
                                            id="email" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <label>Số điện thoại *
                                        <input type="text" class="form-control" name="company"
                                            id="company" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <label>Chủ thể
                                        <input type="text" class="form-control" name="website"
                                            id="website" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Ghi chú
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <button type="submit" value="submit" class="btn" id="btn_submit"
                                        onClick="proceed();">GỬI </button>
                                </li>
                            </ul>
                        </form>
                    </div>

                    <!--======= ADDRESS INFO  =========-->
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h6>ĐỊA CHỈ CỦA CHÚNG TÔI</h6>
                            <ul>
                                <li> <i class="icon-map-pin"></i>FPT Polytechnic</li>
                                <li> <i class="icon-call-end"></i>0913 273 076</li>
                                <li> <i class="icon-envelope"></i> <a href="mailto:someone@example.com"
                                        target="_top">tuannmph36192@fpt.edu.vn</a> </li>
                                <li>
                                    <p>Khách hàng là thượng đế.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======= MAP =========-->
    <div id="map"></div>

    <!-- About -->
    <section class="small-about">
        <div class="container-full">
            <div class="news-letter padding-top-150 padding-bottom-150">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Chúng tôi luôn ở bên khách hàng và tôn trọng hoạt động kinh doanh của họ. Chúng tôi cung cấp 100% và
                            cung cấp phản hồi tức thì để giúp họ thành công trong việc liên tục thay đổi và thử thách
                            thế giới kinh doanh.</h3>
                        <ul class="social_icons">
                            <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                            <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                            <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                            <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h3>Đăng ký nhận bản tin của chúng tôi</h3>
                        <span>Phasellus lacinia fermentum bibendum. Interdum et Malesuada nổi tiếng ac.</span>
                        <form>
                            <input type="email" placeholder="nhập địa chỉ email của bạn" required>
                            <button type="submit">Đặt mua</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
