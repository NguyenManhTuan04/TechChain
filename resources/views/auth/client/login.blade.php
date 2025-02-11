  @extends('layout.client')
  @section('content')
  <!-- Content -->
  <div id="content">

    <!-- PAGES INNER -->
    <section class="chart-page login gray-bg padding-top-100 padding-bottom-100">
      <div class="container">

        <!-- Payments Steps -->
        <div class="shopping-cart">

          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info">
            <div class="row">

              <!-- Login Register -->
              <div class="col-sm-7 center-block">

                <!-- Nav Tabs -->
                <ul class="nav" id="myTab" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" id="login-tab" data-toggle="tab" href="#log" role="tab" aria-selected="true">Login</a> </li>
                  <li class="nav-item"> <a class="nav-link" id="reg-tab" data-toggle="tab" href="#reg" role="tab" aria-selected="false">Register</a> </li>
                </ul>

                <!-- Login Register Inside -->
                <div class="tab-content" id="myTabContent">

                  <!-- Login -->
                  <div class="tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="login-tab">
                    <form action="" method="post">
                        @csrf
                      <ul class="row">

                        <!-- Name -->
                        <li class="col-md-12">
                          <label> Username Or Email Address
                            <input type="email" name="email" value="" placeholder="" class="form-control">
                          </label>
                        </li>
                        <!-- LAST NAME -->
                        <li class="col-md-12">
                          <label> Password
                            <input type="password" name="password" value="" placeholder="" class="form-control">
                          </label>
                        </li>

                        <!-- LOGIN -->
                        <li class="col-md-6">
                          <button type="submit" class="btn">LOGIN</button>
                        </li>
                          <li>
                              <form action="{{ route('admin.logout') }}" method="post">
                                  @csrf
                                  <button class="btn btn-danger" type="submit"><i class="fa fa-sign-out"></i>Đăng xuất</button>
                              </form>
                          </li>

                        <!-- FORGET PASS -->
                        <li class="col-md-6">
                          <div class="margin-top-15 text-right"> <a href="#.">Forget Password</a> </div>
                        </li>
                      </ul>
                    </form>

                    <!-- Main Heading -->
                    <div class="heading text-center margin-bottom-50 margin-top-50">
                      <h4>LOGIN WITH SOCIAL MEDIA</h4>
                      <hr>
                    </div>
                    <ul class="login-with">
                      <li> <a href="#."><i class="fa fa-facebook"></i>FACEBOOK</a> </li>
                      <li> <a href="#."><i class="fa fa-google"></i>GOOGLE</a> </li>
                      <li> <a href="#."><i class="fa fa-twitter"></i>TWITTER</a> </li>
                    </ul>
                  </div>

                  <!-- Register -->
                  <div class="tab-pane fade" id="reg" role="tabpanel" aria-labelledby="reg-tab">
                    <form>
                      <ul class="row">

                        <!-- Name -->
                        <li class="col-md-12">
                          <label> Email Address *
                            <input type="text" name="first-name" value="" placeholder="" class="form-control">
                          </label>
                        </li>
                        <!-- LAST NAME -->
                        <li class="col-md-12">
                          <label> Password *
                            <input type="password" name="last-name" value="" placeholder="" class="form-control">
                          </label>
                        </li>

                        <!-- LOGIN -->
                        <li class="col-md-6">
                          <button type="submit" class="btn">Register</button>
                        </li>

                        <!-- FORGET PASS -->
                        <li class="col-md-6">
                          <div class="margin-top-15 text-right"> <a href="#.">Forget Password</a> </div>
                        </li>
                      </ul>
                    </form>

                    <!-- Main Heading -->
                    <div class="heading text-center margin-bottom-50 margin-top-50">
                      <h4>LOGIN WITH SOCIAL MEDIA</h4>
                      <hr>
                    </div>
                    <ul class="login-with">
                      <li> <a href="#."><i class="fa fa-facebook"></i>FACEBOOK</a> </li>
                      <li> <a href="#."><i class="fa fa-google"></i>GOOGLE</a> </li>
                      <li> <a href="#."><i class="fa fa-twitter"></i>TWITTER</a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section class="small-about">
      <div class="container-full">
          <div class="news-letter padding-top-150 padding-bottom-150">
            <div class="row">
              <div class="col-lg-6">
                <h3>We always stay with our clients and respect their business. We deliver 100% and provide instant response to help them succeed in constantly changing and challenging business world. </h3>
                <ul class="social_icons">
                  <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                  <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                  <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                  <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                  <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h3>Subscribe Our Newsletter</h3>
                <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac.</span>
                <form>
                  <input type="email" placeholder="Enter your email address" required>
                  <button type="submit">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
@endsection
