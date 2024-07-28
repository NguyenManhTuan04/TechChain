@extends('layout.client')
@section('content')
   <!-- Content -->
   <div id="content">

    <!-- SUB BANNER -->
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>Shopping Cart</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
        </div>
    </section>


    <!-- PAGES INNER -->
    <section class="padding-top-100 padding-bottom-100 pages-in chart-page">
        <div class="container">

            <!-- Payments Steps -->
            <div class="shopping-cart text-center">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-left">Items</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-left"> <!-- Media Image -->
                                <a href="#." class="item-img"> <img class="media-object"
                                        src="{{ asset('assets/client/images/item-img-1-1.jpg') }}" alt=""> </a>
                                <!-- Item Name -->
                                <div class="media-body">
                                    <span>Rise Skinny Jeans</span>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </th>
                            <td><span class="price"><small>$</small>299</span></td>
                            <td>
                                <div class="quantity">
                                    <input type="number" min="1" max="100" step="1"
                                        value="1" class="form-control qty">
                                </div>
                            </td>
                            <td><span class="price"><small>$</small>299</span></td>
                            <td><a href="#."><i class="icon-close"></i></a></td>
                        </tr>
                        <tr>
                            <th class="text-left">
                                <!-- Media Image -->
                                <a href="#." class="item-img"> <img class="media-object"
                                        src="{{ asset('assets/client/images/item-img-1-4.jpg') }}" alt=""> </a>
                                <!-- Item Name -->
                                <div class="media-body">
                                    <span>Rise Skinny Jeans</span>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </th>
                            <td><span class="price"><small>$</small>299</span></td>
                            <td>
                                <div class="quantity">
                                    <input type="number" min="1" max="100" step="1"
                                        value="1" class="form-control qty">
                                </div>
                            </td>
                            <td><span class="price"><small>$</small>299</span></td>
                            <td><a href="#."><i class="icon-close"></i></a></td>
                        </tr>

                        <tr>
                            <th class="text-left"> <!-- Media Image -->
                                <a href="#." class="item-img"> <img class="media-object"
                                        src="{{ asset('assets/client/images/item-img-1-2.jpg') }}" alt=""> </a>
                                <!-- Item Name -->
                                <div class="media-body">
                                    <span>Rise Skinny Jeans</span>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </th>
                            <td><span class="price"><small>$</small>299</span></td>
                            <td>
                                <div class="quantity">
                                    <input type="number" min="1" max="100" step="1"
                                        value="1" class="form-control qty">
                                </div>
                            </td>
                            <td><span class="price"><small>$</small>299</span></td>
                            <td><a href="#."><i class="icon-close"></i></a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- PAGES INNER -->
    <section class="padding-top-100 padding-bottom-100 light-gray-bg shopping-cart small-cart">
        <div class="container">

            <!-- SHOPPING INFORMATION -->
            <div class="cart-ship-info margin-top-0">
                <div class="row">

                    <!-- DISCOUNT CODE -->
                    <div class="col-sm-7">
                        <h6>Discound Code</h6>
                        <form>
                            <input type="text" value=""
                                placeholder="ENTER YOUR CODE IF YOU HAVE ONE">
                            <button type="submit" class="btn btn-small btn-dark">APPLY CODE</button>
                        </form>
                        <div class="coupn-btn"> <a href="#." class="btn">continue shopping</a> <a
                                href="#." class="btn">update cart</a> </div>
                    </div>

                    <!-- SUB TOTAL -->
                    <div class="col-sm-5">
                        <h6>Grand Total</h6>
                        <div class="grand-total">
                            <div class="order-detail">
                                <p>Skinny Jeans <span>$598 </span></p>
                                <p>Shirts Skinny <span>$199 </span></p>
                                <p>Shoes White Pair <span> $139</span></p>

                                <!-- SUB TOTAL -->
                                <p class="all-total">TOTAL COST <span> $998</span></p>
                            </div>
                            <a href="#." class="btn margin-top-20">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
