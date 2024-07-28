 <!-- header -->
 <header class="sticky head-absul">
     <div class="container-full">
         <!-- Logo -->
         <div class="logo">
             <a href="{{ route('clients.client') }}"><img class="img-responsive" src="{{ asset('assets/client/images/mtver2.png') }}"
                     alt="" /></a>
         </div>
         <nav class="navbar ownmenu navbar-expand-lg">
             <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="nav">
                     <li class="dropdown active">
                         <a href="{{ route('clients.client') }}">Trang chủ</a>
                     </li>
                     <li class="dropdown">
                         <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">các Trang</a>
                         <ul class="dropdown-menu">


                             <li>
                                 <a href="{{ route('product-detail') }}">Chi tiết sản phẩm</a>
                             </li>
                             <li>
                                 <a href="{{ route('shop') }}">Cửa hàng</a>
                             </li>
                             <li><a href="{{ route('about-us') }}">Về chúng tôi </a></li>
                             <li><a href="{{ route('checkout') }}">Thanh toán </a></li>
                             <li><a href="{{ route('blog-list') }}">Bài viết </a></li>
                             <li><a href="{{ route('blog-detail') }}">Chi tiết bài viết </a></li>


                         </ul>
                     </li>
                     <li><a href="{{ route('about-us') }}">Về chúng tôi </a></li>

                     <!-- Two Link Option -->
                     <li class="dropdown">
                         <a href="#." class="dropdown-toggle" data-toggle="dropdown">Bộ sưu tập</a>
                         <div class="dropdown-menu two-option">
                             <div class="row">
                                 <ul class="col-sm-6">
                                     <li><a href="index-2.html">Danh mục 1</a></li>
                                     <li><a href="index-2.html">Danh mục 2</a></li>
                                     <li><a href="index-2.html">Danh mục 3</a></li>
                                     <li><a href="index-2.html">Danh mục 4</a></li>
                                     <li><a href="index-2.html">Danh mục 5</a></li>
                                     <li><a href="index-2.html">Danh mục 6</a></li>
                                     <li><a href="index-2.html">Danh mục 7</a></li>
                                     <li><a href="index-2.html">Danh mục 8</a></li>
                                 </ul>
                                 <ul class="col-sm-6">
                                     <li><a href="index-2.html">Danh mục 1</a></li>
                                     <li><a href="index-2.html">Danh mục 2</a></li>
                                     <li><a href="index-2.html">Danh mục 3</a></li>
                                     <li><a href="index-2.html">Danh mục 4</a></li>
                                     <li><a href="index-2.html">Danh mục 5</a></li>
                                     <li><a href="index-2.html">Danh mục 6</a></li>
                                     <li><a href="index-2.html">Danh mục 7</a></li>
                                     <li><a href="index-2.html">Danh mục 8</a></li>
                                 </ul>
                             </div>
                         </div>
                     </li>

                     <!-- MEGA MENU -->
                     <li class="dropdown megamenu">
                         <a href="#." class="dropdown-toggle" data-toggle="dropdown">Danh mục</a>
                         <div class="dropdown-menu">
                             <div class="row">
                                 <!-- Shop Pages -->
                                 <div class="col-md-5">
                                     <h6>Shop Pages</h6>
                                     <ul class="col-2-li">
                                         <li>
                                             <a href="shop_02.html">Shop Full Left Sidebar</a>
                                         </li>
                                         <li>
                                             <a href="shop_03.html">Shop Shop Right Sidebar </a>
                                         </li>
                                         <li>
                                             <a href="shop_04.html">Shop Creative Layout </a>
                                         </li>
                                         <li><a href="shop_01.html">Shop </a></li>
                                         <li><a href="shop_6_col.html">Shop 06 Col </a></li>
                                         <li><a href="shop_5_col.html">Shop 05 Col </a></li>
                                         <li><a href="shop_4_col.html">Shop 04 Col </a></li>
                                         <li><a href="shop_3_col.html">Shop 03 Col </a></li>
                                         <li>
                                             <a href="product-detail_01.html">Products Detail 01</a>
                                         </li>
                                         <li>
                                             <a href="product-detail_02.html">Products Detail 02</a>
                                         </li>
                                         <li>
                                             <a href="product-detail_03.html">Products Detail 03</a>
                                         </li>
                                         <li>
                                             <a href="shopping-cart.html">Shopping Cart</a>
                                         </li>
                                         <li><a href="checkout.html">Checkout</a></li>
                                         <li><a href="about-us_01.html">About Us</a></li>
                                         <li><a href="contact.html">Contact</a></li>
                                         <li><a href="blog-list_01.html">Blog List 01</a></li>
                                         <li>
                                             <a href="blog-detail_01.html">Blog Detail 01 </a>
                                         </li>
                                     </ul>
                                 </div>

                                 <!-- Shop Pages -->
                                 <div class="col-md-3">
                                     <h6>Latest items</h6>
                                     <ul>
                                         <li><a href="index-2.html"> Deodornts</a></li>
                                         <li><a href="index-2.html"> Skin care</a></li>
                                         <li><a href="index-2.html"> Make up</a></li>
                                         <li><a href="index-2.html"> Watch</a></li>
                                         <li><a href="index-2.html"> Siting bags</a></li>
                                         <li><a href="index-2.html"> Totes</a></li>
                                         <li><a href="index-2.html"> Gold rings</a></li>
                                         <li><a href="index-2.html"> Jewellery</a></li>
                                     </ul>
                                 </div>

                                 <!-- Top Rate -->
                                 <div class="col-md-4">
                                     <h6>Top Rate Products</h6>
                                     <div class="top-rated">
                                         <ul>
                                             <li>
                                                 <div class="media-left">
                                                     <div class="cart-img">
                                                         <a href="#">
                                                             <img class="media-object img-responsive"
                                                                 src="{{ asset('assets/client/images/cart-img-1.jpg') }}"
                                                                 alt="..." />
                                                         </a>
                                                     </div>
                                                 </div>
                                                 <div class="media-body">
                                                     <h6 class="media-heading">
                                                         Best T-Shirt Design
                                                     </h6>
                                                     <div class="stars">
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                     </div>
                                                     <span class="price">129.00 USD</span>
                                                 </div>
                                             </li>
                                             <li>
                                                 <div class="media-left">
                                                     <div class="cart-img">
                                                         <a href="#">
                                                             <img class="media-object img-responsive"
                                                                 src="{{ asset('assets/client/images/cart-img-2.jpg') }}"
                                                                 alt="..." />
                                                         </a>
                                                     </div>
                                                 </div>
                                                 <div class="media-body">
                                                     <h6 class="media-heading">
                                                         Bag Pack for Child
                                                     </h6>
                                                     <div class="stars">
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                     </div>
                                                     <span class="price">129.00 USD</span>
                                                 </div>
                                             </li>
                                             <li>
                                                 <div class="media-left">
                                                     <div class="cart-img">
                                                         <a href="#">
                                                             <img class="media-object img-responsive"
                                                                 src="{{ asset('assets/client/images/cart-img-3.jpg') }}"
                                                                 alt="..." />
                                                         </a>
                                                     </div>
                                                 </div>
                                                 <div class="media-body">
                                                     <h6 class="media-heading">
                                                         Bag Pack for Child
                                                     </h6>
                                                     <div class="stars">
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                     </div>
                                                     <span class="price">129.00 USD</span>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <!-- MEga Menu Elements -->
                             <div class="mega-menu-elements">
                                 <img src="{{ asset('assets/client/images/nav-img.png') }}" alt="" />
                                 <a href="#." class="btn btn-inverse">Shop Now</a>
                             </div>
                         </div>
                     </li>
                     <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                 </ul>
             </div>

             <!-- Nav Right -->
             <div class="nav-right">
                 <ul class="navbar-right">
                     <!-- USER INFO -->
                     <li>
                         <a href="{{ route('client.login') }}"><i class="lnr lnr-user"></i> </a>
                     </li>
                     <!-- USER BASKET -->
                     <li>
                         <a href="{{ route('shopping-cart') }}"><i class="lnr lnr-cart"></i><span
                                 class="c-no">2</span>
                         </a>
                     </li>
                     <!-- SEARCH BAR -->
                     <li>
                         <a href="javascript:void(0);" class="search-open"><i class="lnr lnr-magnifier"></i></a>
                         <div class="search-inside animated bounceInUp">
                             <i class="icon-close search-close"></i>
                             <div class="search-overlay"></div>
                             <div class="position-center-center">
                                 <div class="search">
                                     <form>
                                         <input type="search" placeholder="Search Shop" />
                                         <button type="submit"><i class="icon-"></i></button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
     <div class="clearfix"></div>
 </header>
