@extends('layout.client')
@section('content')

  <!-- Content -->
  <div id="content">
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>Look Beautiful In This Seasons</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                </ol>
            </div>
        </div>
    </section>



    <!-- Blog List -->
    <section class="blog-list blog-list-3 single-post padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <!-- Article -->
                    <article>
                        <!-- Post Img -->
                        <img class="img-responsive" src="{{ asset('assets/client/images/blog-list-img-2.jpg') }}" alt="">
                        <!-- Tittle -->
                        <div class="post-tittle left"> <a href="#." class="tittle">Look Beautiful in
                                this Seasons</a>
                            <!-- Post Info -->
                            <span><i class="primary-color icon-user"></i> by admin</span> <span><i
                                    class="primary-color icon-calendar"></i> April 27, 2016</span> <span><i
                                    class="primary-color icon-bubble"></i> 05</span> <span><i
                                    class="primary-color icon-tag"></i> Furniture</span>
                        </div>
                        <!-- Post Content -->
                        <div class="text-left">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at
                                lacus aliquet, a consequat enim aliquet. Integer molestie sit amet sem et
                                faucibus. Nunc ornare pharetra dui, vitae auctor orci fringilla eget.
                                Pellentesque in placerat felis. Etiam mollis venenatis luctus. Morbi ac
                                scelerisque mauris. Etiam sodales a nulla ornare viverra. Nunc at blandit neque,
                                bibendum varius purus. <br>
                                <br>
                                Nam sit amet sapien vitae enim vehicula tincidunt. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus mus. Nunc faucibus imperdiet
                                vulputate. Morbi volutpat leo iaculis elit vehicula, eu convallis magna finibus.
                                Suspendisse tristique ullamcorper erat a elementum. Cras eget elit non nunc
                                aliquam ullamcorper quis sed metus. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Donec malesuada, erat in ullamcorper bibendum, elit lacus
                                mattis lorem, quis luctus diam lorem vel ligula.
                            </p>
                            <h5 class="margin-top-80 margin-bottom-30">Product history</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at
                                lacus aliquet, a consequat enim aliquet. Integer molestie sit amet sem et
                                faucibus. Nunc ornare pharetra dui, vitae auctor orci fringilla eget.
                                Pellentesque in placerat felis. Etiam mollis venenatis luctus. Morbi ac
                                scelerisque mauris. Etiam sodales a nulla ornare viverra. <br>
                                <br>
                                Nam sit amet sapien vitae enim vehicula tincidunt. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus mus. Nunc faucibus imperdiet
                                vulputate. Morbi volutpat leo iaculis elit vehicula, eu convallis magna finibus.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada, erat
                                in ullamcorper bibendum, elit lacus mattis lorem, quis luctus diam lorem vel
                                ligula.
                            </p>

                            <!-- Post Img -->
                            <img class="img-responsive margin-top-50 margin-bottom-50"
                                src="{{ asset('assets/client/images/blog-list-img-1.jpg') }}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at
                                lacus aliquet, a consequat enim aliquet. Integer molestie sit amet sem et
                                faucibus. Nunc ornare pharetra dui, vitae auctor orci fringilla eget.
                                Pellentesque in placerat felis. Etiam mollis venenatis luctus. Morbi ac
                                scelerisque mauris. Etiam sodales a nulla ornare viverra. Nunc at blandit neque,
                                bibendum varius purus. <br>
                                <br>
                                Nam sit amet sapien vitae enim vehicula tincidunt. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus mus. Nunc faucibus imperdiet
                                vulputate. Morbi volutpat leo iaculis elit vehicula, eu convallis magna finibus.
                                Suspendisse tristique ullamcorper erat a elementum. Cras eget elit non nunc
                                aliquam ullamcorper quis sed metus. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Donec malesuada, erat in ullamcorper bibendum, elit lacus
                                mattis lorem, quis luctus diam lorem vel ligula.
                            </p>

                            <!-- LIST STYLE -->
                            <ul class="list-group margin-top-30 margin-top-20">
                                <li>
                                    <p>Donec sed dictum leo, et posuere felis. </p>
                                </li>
                                <li>
                                    <p> Sed pharetra mauris vel varius suscipit. Aliquam lectus velit, </p>
                                </li>
                                <li>
                                    <p> Tempus id est ut, volutpat maximus sapien. </p>
                                </li>
                            </ul>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui
                                aolutpat dui at lacus aliquet, a consequat et lacus aliquet, a consequat enim
                                aliquet. Integer molestie sit ame.</p>

                            <!-- Blockquote -->
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat
                                dui at lacus aliquet, a consequat enim aliquet. Integer molestie sit amet sem et
                                faucibus. </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. NullamMorbi ac
                                scelerisque mauris. Etiam sodales a nulla ornare viverra. Nunc at blandit neque,
                                bociis natoque penatibus et magnnascetiscing elit. NullamMorbi ac scelerisque
                                miscing elit. NullamMorbi ac scelerisque mur ridic volutpat dui at lacus
                                aliquet, a consequat enim aliquet. Integer molestie sit ame.</p>

                            <!-- Tags -->
                            <div class="row margin-top-50">
                                <div class="col-md-7">
                                    <h5 class="shop-tittle">Tags</h5>
                                    <ul class="shop-tags padding-left-15">
                                        <li><a href="#.">Towels</a></li>
                                        <li><a href="#.">Chair</a></li>
                                        <li><a href="#.">Bedsheets</a></li>
                                        <li><a href="#.">Shoe</a></li>
                                        <li><a href="#.">Curtains</a></li>
                                        <li><a href="#.">Clocks</a></li>
                                    </ul>
                                </div>

                                <!-- Share With -->
                                <div class="col-md-5">
                                    <h5 class="shop-tittle">share with</h5>
                                    <ul class="share-post padding-left-15">
                                        <li><a href="#."><i class="icon-social-facebook"></i>
                                                Facebook</a></li>
                                        <li><a href="#."><i class="icon-social-twitter"></i> twitter</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- ADMIN info -->
                            <div class="admin-info">
                                <div class="media-left">
                                    <div class="admin-pic"> <img src="{{ asset('assets/client/images/admin-avatar.jpg') }}"
                                            alt=""> </div>
                                </div>
                                <div class="media-body">
                                    <h6>NATASHA S. <span>Co-Founder</span></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. NullamMorbi ac
                                        scelerisque mauris. Etiam sodales a nulla ornare viverra. Nunc at
                                        blandit neque, bociis natoque penatcing e scelerisque miscing elit. </p>
                                    <div class="admin-social"> <a href="#."><i
                                                class="icon-social-facebook"></i></a> <a href="#."><i
                                                class="icon-social-twitter"></i></a> <a href="#."><i
                                                class="icon-social-dribbble"></i></a> <a href="#."><i
                                                class="icon-envelope"></i></a> </div>
                                </div>
                            </div>

                            <!--=======  COMMENTS =========-->
                            <div class="comments margin-top-80">
                                <h5 class="shop-tittle">Comments</h5>
                                <ul class="media-list padding-left-15">
                                    <!--=======  COMMENTS =========-->
                                    <li class="media">
                                        <div class="media-left"> <a href="#" class="avatar"> <img
                                                    class="media-object img-responsive"
                                                    src="{{ asset('assets/client/images/avatar-1.jpg') }}" alt=""> <br>
                                            </a> </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">William Saron <span><i
                                                        class="icon-clock primary-color"></i> April 27, 2016 -
                                                    10:00 am</span></h6>
                                            <p>Crack commando unit was sent to prison by a military court for a
                                                crime they didn't commit. ese men promptly escaped from a
                                                maximum security stockade to the Los Angeles. </p>
                                            <a href="#." class="raply"><i
                                                    class="icon-bubble primary-color"></i> Reply</a>
                                        </div>
                                    </li>
                                    <!--=======  COMMENTS =========-->
                                    <li class="media">
                                        <div class="media-left"> <a href="#" class="avatar"> <img
                                                    class="media-object img-responsive"
                                                    src="{{ asset('assets/client/images/avatar-3.jpg') }}" alt=""> <br>
                                            </a> </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">William Saron <span><i
                                                        class="icon-clock primary-color"></i> April 27, 2016 -
                                                    10:00 am</span></h6>
                                            <p>Crack commando unit was sent to prison by a military court for a
                                                crime they didn't commit. ese men promptly escaped from a
                                                maximum security stockade to the Los Angeles. </p>
                                            <a href="#." class="raply"><i
                                                    class="icon-bubble primary-color"></i> Reply</a>
                                        </div>
                                    </li>
                                    <!--=======  COMMENTS =========-->
                                    <li class="media padding-left-100">
                                        <div class="media-left"> <a href="#" class="avatar"> <img
                                                    class="media-object img-responsive"
                                                    src="{{ asset('assets/client/images/avatar-2.jpg') }}" alt=""> <br>
                                            </a> </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">William Saron <span><i
                                                        class="icon-clock primary-color"></i> April 27, 2016 -
                                                    10:00 am</span></h6>
                                            <p>Crack commando unit was sent to prison by a military court for a
                                                crime they didn't commit. ese men promptly escaped from a
                                                maximum security stockade to the Los Angeles. </p>
                                            <a href="#." class="raply"><i
                                                    class="icon-bubble primary-color"></i> Reply</a>
                                        </div>
                                    </li>
                                    <!--=======  COMMENTS =========-->
                                    <li class="media">
                                        <div class="media-left"> <a href="#" class="avatar"> <img
                                                    class="media-object img-responsive"
                                                    src="{{ asset('assets/client/images/avatar-3.jpg') }}" alt=""> <br>
                                            </a> </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">William Saron <span><i
                                                        class="icon-clock primary-color"></i> April 27, 2016 -
                                                    10:00 am</span></h6>
                                            <p>Crack commando unit was sent to prison by a military court for a
                                                crime they didn't commit. ese men promptly escaped from a
                                                maximum security stockade to the Los Angeles. </p>
                                            <a href="#." class="raply"><i
                                                    class="icon-bubble primary-color"></i> Reply</a>
                                        </div>
                                    </li>
                                </ul>
                                <hr>

                                <!--=======  LEAVE COMMENTS =========-->
                                <h5 class="shop-tittle margin-top-80">POST YOUR COMMENTS</h5>
                                <form class="padding-left-15">
                                    <ul class="row">
                                        <li class="col-sm-4">
                                            <label>Name
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-sm-4">
                                            <label>Email
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-sm-4">
                                            <label>Subject
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-sm-12">
                                            <label>COMMENTS
                                                <textarea class="form-control" placeholder=""></textarea>
                                            </label>
                                        </li>
                                        <li class="col-sm-12">
                                            <button type="submit" class="btn margin-top-30">Submit Comment
                                            </button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </article>
                    <hr>

                    <!--  You May Like -->
                    <h5 class="shop-tittle margin-top-50 margin-bottom-50">you may like </h5>
                    <div class="alos-like padding-left-15">
                        <!-- Article -->
                        <article>
                            <div class="row">
                                <div class="col-sm-5">
                                    <!-- Post Img -->
                                    <img class="img-responsive" src="{{ asset('assets/client/images/blog-list-img-1-2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="col-sm-7">
                                    <!-- Tittle -->
                                    <div class="post-tittle left"> <a href="#." class="tittle">The
                                            unique Chair By ecoshop</a>
                                        <!-- Post Info -->
                                        <span><i class="primary-color icon-user"></i> by admin</span> <span><i
                                                class="primary-color icon-calendar"></i> April 27, 2016</span>
                                        <span><i class="primary-color icon-bubble"></i> 05</span> <span><i
                                                class="primary-color icon-tag"></i> Furniture</span>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="text-left">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                            volutpat dui at lacus aliquet, a consequat enim aliquet. Integer
                                            molestie sit amet sem et faucibus. Nunc ornare pharetra dui, vitae
                                            auctor orci fringilla eget. Pellentesque in placerat felis. Etiam
                                            mollis venenatis luctus.

                                            Nunc at blandit neque, bibendum varius purus.</p>
                                        <a href="#." class="red-more">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Article -->
                        <article>
                            <div class="row">
                                <div class="col-sm-5">
                                    <!-- Post Img -->
                                    <img class="img-responsive" src="{{ asset('assets/client/images/blog-list-img-1-3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="col-sm-7">
                                    <!-- Tittle -->
                                    <div class="post-tittle left"> <a href="#." class="tittle">The
                                            unique Chair By ecoshop</a>
                                        <!-- Post Info -->
                                        <span><i class="primary-color icon-user"></i> by admin</span> <span><i
                                                class="primary-color icon-calendar"></i> April 27, 2016</span>
                                        <span><i class="primary-color icon-bubble"></i> 05</span> <span><i
                                                class="primary-color icon-tag"></i> Furniture</span>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="text-left">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                            volutpat dui at lacus aliquet, a consequat enim aliquet. Integer
                                            molestie sit amet sem et faucibus. Nunc ornare pharetra dui, vitae
                                            auctor orci fringilla eget. Pellentesque in placerat felis. Etiam
                                            mollis venenatis luctus.

                                            Nunc at blandit neque, bibendum varius purus.</p>
                                        <a href="#." class="red-more">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Sider Bar -->
                <div class="col-md-3">
                    <div class="search">
                        <input class="form-control" type="search" placeholder="Search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="sidebar">
                        <!-- Category -->
                        <h5 class="shop-tittle margin-bottom-20">Category</h5>
                        <ul class="shop-cate">
                            <li><a href="#."> Chair <span>24</span></a></li>
                            <li><a href="#."> Bag <span>122</span></a></li>
                            <li><a href="#."> Soffa <span>09</span></a></li>
                            <li><a href="#."> Bed <span>12</span></a></li>
                            <li><a href="#."> Shoes <span>98</span></a></li>
                            <li><a href="#."> Table <span>34</span></a></li>
                            <li><a href="#."> Bedsheets <span>23</span></a></li>
                            <li><a href="#."> Curtains <span>43</span></a></li>
                            <li><a href="#."> TV Cabinets <span>12</span></a></li>
                            <li><a href="#."> Clocks <span>18</span></a></li>
                            <li><a href="#."> Towels <span>25</span></a></li>
                        </ul>

                        <!-- Recent Post -->
                        <h5 class="shop-tittle margin-top-60 margin-bottom-30">recent post</h5>
                        <ul class="papu-post margin-top-20">
                            <li class="media">
                                <div class="media-left"> <a href="#"> <img class="media-object"
                                            src="{{ asset('assets/client/images/sm-post-1.jpg') }}" alt=""></a> </div>
                                <div class="media-body"> <a class="media-heading" href="#.">Nullam
                                        volutpat dui at
                                        a consequat enimiquet</a> <span>Posted on Sep 27</span> </div>
                            </li>
                            <li class="media">
                                <div class="media-left"> <a href="#"> <img class="media-object"
                                            src="{{ asset('assets/client/images/sm-post-2.jpg') }}" alt=""></a> </div>
                                <div class="media-body"> <a class="media-heading" href="#.">Nullam
                                        volutpat dui at
                                        a consequat enimiquet</a> <span>Posted on Sep 27</span> </div>
                            </li>
                            <li class="media">
                                <div class="media-left"> <a href="#"> <img class="media-object"
                                            src="{{ asset('assets/client/images/sm-post-3.jpg') }}" alt=""></a> </div>
                                <div class="media-body"> <a class="media-heading" href="#.">Nullam
                                        volutpat dui at
                                        a consequat enimiquet</a> <span>Posted on Sep 27</span> </div>
                            </li>
                        </ul>

                        <!-- TAGS -->
                        <h5 class="shop-tittle margin-top-60 margin-bottom-20">Papular Tags</h5>
                        <ul class="shop-tags">
                            <li><a href="#.">Towels</a></li>
                            <li><a href="#.">Chair</a></li>
                            <li><a href="#.">Bedsheets</a></li>
                            <li><a href="#.">Shoe</a></li>
                            <li><a href="#.">Curtains</a></li>
                            <li><a href="#.">Clocks</a></li>
                            <li><a href="#.">TV Cabinets</a></li>
                            <li><a href="#.">Best Seller</a></li>
                            <li><a href="#.">Top Selling</a></li>
                        </ul>

                        <!-- BRAND -->
                        <h5 class="shop-tittle margin-top-60 margin-bottom-10">archives</h5>
                        <ul class="shop-cate">
                            <li><a href="#."> January 2015 </a></li>
                            <li><a href="#."> February 2015 </a></li>
                            <li><a href="#."> March 2015 </a></li>
                            <li><a href="#."> April 2015 </a></li>
                            <li><a href="#."> May 2015 </a></li>
                        </ul>

                        <!-- SIDE BACR BANER -->
                        <div class="side-bnr margin-top-50"> <img class="img-responsive"
                                src="{{ asset('assets/client/images/sidebar-bnr.jpg') }}" alt="">
                            <div class="position-center-center"> <span
                                    class="price"><small>$</small>299</span>
                                <div class="bnr-text">look
                                    hot
                                    with
                                    style</div>
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
                        <h3>We always stay with our clients and respect their business. We deliver 100% and
                            provide instant response to help them succeed in constantly changing and challenging
                            business world. </h3>
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
