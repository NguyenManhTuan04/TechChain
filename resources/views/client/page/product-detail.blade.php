@extends('layout.client')
@section('content')
    <!-- Content -->
    <div id="content">
        <!--======= SUB BANNER =========-->
        <section class="sub-bnr" data-stellar-background-ratio="0.5">
            <div class="position-center-center">
                <div class="container">
                    <h4>Rise Skinny Jeans</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="active">Rise Skinny Jeans</li>
                    </ol>
                </div>
            </div>
        </section>



        <!-- Popular Products -->
        <section class="padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- SHOP DETAIL -->
                <div class="shop-detail">
                    <div class="row">

                        <!-- Popular Images Slider -->
                        <div class="col-md-7">

                            <!-- Place somewhere in the <body> of your page -->
                            <div id="slider-shop" class="flexslider">
                                <ul class="slides">
                                    <li> <img class="img-responsive" src="{{ asset('assets/client/images/item-img-1-16.jpg') }}" alt=""> </li>
                                    <li> <img class="img-responsive" src="{{ asset('assets/client/images/item-img-1-9.jpg') }}" alt=""> </li>
                                    <li> <img class="img-responsive" src="{{ asset('assets/client/images/item-img-1-11.jpg') }}" alt=""> </li>
                                </ul>
                            </div>
                            <div id="shop-thumb" class="flexslider">
                                <ul class="slides">
                                    <li> <img class="img-responsive" src="{{ asset('assets/client/images/item-img-1-16.jpg') }}" alt=""> </li>
                                    <li> <img class="img-responsive" src="{{ asset('assets/client/images/item-img-1-9.jpg') }}" alt=""> </li>
                                    <li> <img class="img-responsive" src="{{ asset('assets/client/images/item-img-1-11.jpg') }}" alt=""> </li>
                                </ul>
                            </div>
                        </div>

                        <!-- COntent -->
                        <div class="col-md-5">
                            <h4>Rise Skinny Jeans</h4>
                            <div class="rating-strs"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                            <span class="price"><small>$</small>299</span>
                            <ul class="item-owner">
                                <li>Brand:<span> Top Shop</span></li>
                                <li>Category:<span> <a href="#">women</a></span></li>
                            </ul>

                            <!-- Item Detail -->
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web page
                                editors now use Lorem Ipsum as their default model text,</p>

                            <!-- Short By -->
                            <div class="some-info">
                                <ul class="row margin-top-30">
                                    <li class="col-sm-6">

                                        <!-- Quantity -->
                                        <div class="quinty">
                                            <button type="button" class="quantity-left-minus" data-type="minus"
                                                data-field=""> <span>-</span> </button>
                                            <input type="number" id="quantity" name="quantity"
                                                class="form-control input-number" value="1">
                                            <button type="button" class="quantity-right-plus" data-type="plus"
                                                data-field=""> <span>+</span> </button>
                                        </div>
                                    </li>

                                    <!-- ADD TO CART -->
                                    <li class="col-sm-6"> <a href="#." class="btn">ADD TO CART</a> </li>

                                    <!-- LIKE -->
                                    <li class="col-sm-12"> <a href="#." class="like-us"><i class="icon-heart"></i> ADD
                                            TO WISHLIST </a> </li>
                                </ul>

                                <!-- INFOMATION -->
                                <div class="inner-info">
                                    <h5>Share this item with your friends</h5>
                                    <!-- Social Icons -->
                                    <ul class="social_icons">
                                        <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                                        <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                                        <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                                        <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                                        <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--======= PRODUCT DESCRIPTION =========-->
                <div class="item-decribe">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item"> <a class="active nav-link" href="#descr" role="tab"
                                data-toggle="pill">DESCRIPTION</a></li>
                        <li class="nav-item"><a class="nav-link" href="#review" role="tab" data-toggle="pill">REVIEW
                                (03)</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tags" role="tab"
                                data-toggle="pill">INFORMATION</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- DESCRIPTION -->
                        <div role="tabpanel" class="tab-pane active" id="descr">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                                libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo. <br>
                            </p>
                            <h6>THE SIMPLE FACTS</h6>
                            <ul>
                                <li>
                                    <p> Praesent faucibus, leo vitae maximus dictum,</p>
                                </li>
                                <li>
                                    <p> Donec porta ut lectus </p>
                                </li>
                                <li>
                                    <p> Phasellus maximus velit id nisl</p>
                                </li>
                                <li>
                                    <p> Quisque a tellus et sapien aliquam sus</p>
                                </li>
                                <li>
                                    <p> Donec porta ut lectus </p>
                                </li>
                                <li>
                                    <p> Phasellus maximus velit id nisl</p>
                                </li>
                            </ul>
                        </div>

                        <!-- REVIEW -->
                        <div role="tabpanel" class="tab-pane fade" id="review">
                            <h6>3 REVIEWS FOR SHIP YOUR IDEA</h6>

                            <!-- REVIEW PEOPLE 1 -->
                            <div class="media">
                                <div class="media-left">
                                    <!--  Image -->
                                    <div class="avatar"> <a href="#"> <img class="media-object"
                                                src="{{ asset('assets/client/images/avatar-1.jpg') }}" alt=""> </a> </div>
                                </div>
                                <!--  Details -->
                                <div class="media-body">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua.”</p>
                                    <h6>TYRION LANNISTER <span class="pull-right">MAY 10, 2016</span> </h6>
                                </div>
                            </div>

                            <!-- REVIEW PEOPLE 1 -->

                            <div class="media">
                                <div class="media-left">
                                    <!--  Image -->
                                    <div class="avatar"> <a href="#"> <img class="media-object"
                                                src="{{ asset('assets/client/images/avatar-2.jpg') }}" alt=""> </a> </div>
                                </div>
                                <!--  Details -->
                                <div class="media-body">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua.”</p>
                                    <h6>TYRION LANNISTER <span class="pull-right">MAY 10, 2016</span> </h6>
                                </div>
                            </div>

                            <!-- ADD REVIEW -->
                            <h6 class="margin-t-40">ADD YOUR REVIEW</h6>
                            <form>
                                <ul class="row">
                                    <li class="col-sm-6">
                                        <label> *NAME
                                            <input type="text" value="" placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-sm-6">
                                        <label> *EMAIL
                                            <input type="email" value="" placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-sm-12">
                                        <label> *YOUR REVIEW
                                            <textarea></textarea>
                                        </label>
                                    </li>
                                    <li class="col-sm-6">
                                        <!-- Rating Stars -->
                                        <div class="stars"> <span>YOUR RATING</span> <i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    </li>
                                    <li class="col-sm-6">
                                        <button type="submit" class="btn btn-dark btn-small pull-right no-margin">POST
                                            REVIEW</button>
                                    </li>
                                </ul>
                            </form>
                        </div>

                        <!-- TAGS -->
                        <div role="tabpanel" class="tab-pane fade" id="tags"> </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Products -->
        <section class="dark-bg padding-top-100 padding-bottom-100">
            <div class="container-full">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>Popular Products</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                        Sed feugiat, tellus vel tristique posuere, diam</span>
                </div>

                <!-- Popular Item Slide -->
                <div class="papular-block block-slide">

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ asset('assets/client/images/item-img-1-1.jpg') }}" alt=""> <img
                                class="img-2" src="{{ asset('assets/client/images/item-img-1-1-1.jpg') }}" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ asset('assets/client/images/item-img-1-1.jpg') }}" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ asset('assets/client/images/item-img-1-2.jpg') }}" alt=""> <img
                                class="img-2" src="{{ asset('assets/client/images/item-img-1-2-1.jpg') }}" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ asset('assets/client/images/item-img-1-2.jpg') }}" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ asset('assets/client/images/item-img-1-3.jpg') }}" alt=""> <img
                                class="img-2" src="{{ asset('assets/client/images/item-img-1-3-1.jpg') }}" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ asset('assets/client/images/item-img-1-3.jpg') }}" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Sale -->
                        <div class="on-sale"> Sale </div>
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ asset('assets/client/images/item-img-1-4.jpg') }}" alt=""> <img
                                class="img-2" src="{{ asset('assets/client/images/item-img-1-4-1.jpg') }}" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ asset('assets/client/images/item-img-1-4.jpg') }}" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Item Name -->
                        <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small><span class="line-through">299.00</span>
                            <small>$</small>199.00</span>
                    </div>
                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ asset('assets/client/images/item-img-1-5.jpg') }}" alt=""> <img
                                class="img-2" src="{{ asset('assets/client/images/item-img-1-5-1.jpg') }}" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ asset('assets/client/images/item-img-1-5.jpg') }}" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ asset('assets/client/images/item-img-1-6.jpg') }}" alt=""> <img
                                class="img-2" src="{{ asset('assets/client/images/item-img-1-6-1.jpg') }}" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ asset('assets/client/images/item-img-1-6.jpg') }}" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ asset('assets/client/images/item-img-1-7.jpg') }}" alt=""> <img
                                class="img-2" src="{{ asset('assets/client/images/item-img-1-7-1.jpg') }}" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ asset('assets/client/images/item-img-1-7.jpg') }}" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>

                    <!-- Item -->
                    <div class="item">
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="{{ asset('assets/client/images/item-img-1-8.jpg') }}" alt=""> <img
                                class="img-2" src="{{ asset('assets/client/images/item-img-1-8-1.jpg') }}" alt="">
                            <!-- Overlay -->
                            <div class="overlay">
                                <div class="position-bottom">
                                    <div class="inn"><a href="{{ asset('assets/client/images/item-img-1-8.jpg') }}" data-lighter><i
                                                class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                            data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a> <a
                                            href="#." data-toggle="tooltip" data-placement="top"
                                            title="Add To WishList"><i class="icon-heart"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- WORK WITH US -->
        <section class="our-team padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="heading text-center">
                    <h4>We work with the best brands</h4>
                    <hr>
                </div>
            </div>
            <div class="container-full">
                <div class="clients-slide">
                    <div> <img src="{{ asset('assets/client/images/c-mg-1.png') }}" alt=""> </div>
                    <div> <img src="{{ asset('assets/client/images/c-mg-2.png') }}" alt=""> </div>
                    <div> <img src="{{ asset('assets/client/images/c-mg-3.png') }}" alt=""> </div>
                    <div> <img src="{{ asset('assets/client/images/c-mg-1.png') }}" alt=""> </div>
                    <div> <img src="{{ asset('assets/client/images/c-mg-2.png') }}" alt=""> </div>
                    <div> <img src="{{ asset('assets/client/images/c-mg-3.png') }}" alt=""> </div>
                    <div> <img src="{{ asset('assets/client/images/c-mg-1.png') }}" alt=""> </div>
                    <div> <img src="{{ asset('assets/client/images/c-mg-2.png') }}" alt=""> </div>
                    <div> <img src="{{ asset('assets/client/images/c-mg-3.png') }}" alt=""> </div>
                </div>
            </div>
        </section>
    </div>

 @endsection
