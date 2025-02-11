@extends('layout.client')
@section('content')

   <!-- Content -->
   <div id="content">
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>Checkout your order</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li class="active">CHECKOUT</li>
                </ol>
            </div>
        </div>
    </section>



    <!--======= PAGES INNER =========-->
    <section class="chart-page padding-top-100 padding-bottom-100">
        <div class="container">

            <!-- Payments Steps -->
            <div class="shopping-cart">

                <!-- SHOPPING INFORMATION -->
                <div class="cart-ship-info">
                    <div class="row">

                        <!-- ESTIMATE SHIPPING & TAX -->
                        <div class="col-sm-7">
                            <h6>Billing Information</h6>
                            <form>
                                <ul class="row">

                                    <!-- Name -->
                                    <li class="col-md-6">
                                        <label> *FIRST NAME
                                            <input type="text" name="first-name" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <!-- LAST NAME -->
                                    <li class="col-md-6">
                                        <label> *LAST NAME
                                            <input type="text" name="last-name" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-md-6">
                                        <!-- COMPANY NAME -->
                                        <label>COMPANY NAME
                                            <input type="text" name="company" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-md-6">
                                        <!-- ADDRESS -->
                                        <label>*ADDRESS
                                            <input type="text" name="address" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <!-- TOWN/CITY -->
                                    <li class="col-md-6">
                                        <label>*TOWN/CITY
                                            <input type="text" name="town" value=""
                                                placeholder="">
                                        </label>
                                    </li>

                                    <!-- COUNTRY -->
                                    <li class="col-md-6">
                                        <label> COUNTRY
                                            <input type="text" name="contry-state" value=""
                                                placeholder="">
                                        </label>
                                    </li>

                                    <!-- EMAIL ADDRESS -->
                                    <li class="col-md-6">
                                        <label> *EMAIL ADDRESS
                                            <input type="text" name="contry-state" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <!-- PHONE -->
                                    <li class="col-md-6">
                                        <label> *PHONE
                                            <input type="text" name="postal-code" value=""
                                                placeholder="">
                                        </label>
                                    </li>

                                    <!-- PHONE -->
                                    <li class="col-md-6">
                                        <button type="submit" class="btn">continue</button>
                                    </li>

                                    <!-- CREATE AN ACCOUNT -->
                                    <li class="col-md-6">
                                        <div class="checkbox margin-0 ">
                                            <input id="checkbox1" class="styled" type="checkbox">
                                            <label for="checkbox1"> Ship to a different address </label>
                                        </div>
                                    </li>
                                </ul>
                            </form>

                            <!-- SHIPPING info -->
                            <h6 class="margin-top-50">Shipping information</h6>
                            <form>
                                <ul class="row">

                                    <!-- Name -->
                                    <li class="col-md-6">
                                        <label> *FIRST NAME
                                            <input type="text" name="first-name" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <!-- LAST NAME -->
                                    <li class="col-md-6">
                                        <label> *LAST NAME
                                            <input type="text" name="last-name" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-md-6">
                                        <!-- COMPANY NAME -->
                                        <label>COMPANY NAME
                                            <input type="text" name="company" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <li class="col-md-6">
                                        <!-- ADDRESS -->
                                        <label>*ADDRESS
                                            <input type="text" name="address" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <!-- TOWN/CITY -->
                                    <li class="col-md-6">
                                        <label>*TOWN/CITY
                                            <input type="text" name="town" value=""
                                                placeholder="">
                                        </label>
                                    </li>

                                    <!-- COUNTRY -->
                                    <li class="col-md-6">
                                        <label> COUNTRY
                                            <input type="text" name="contry-state" value=""
                                                placeholder="">
                                        </label>
                                    </li>

                                    <!-- EMAIL ADDRESS -->
                                    <li class="col-md-6">
                                        <label> *EMAIL ADDRESS
                                            <input type="text" name="contry-state" value=""
                                                placeholder="">
                                        </label>
                                    </li>
                                    <!-- PHONE -->
                                    <li class="col-md-6">
                                        <label> *PHONE
                                            <input type="text" name="postal-code" value=""
                                                placeholder="">
                                        </label>
                                    </li>

                                    <!-- PHONE -->
                                    <li class="col-md-6">
                                        <button type="submit" class="btn">SUBMIT</button>
                                    </li>
                                </ul>
                            </form>
                        </div>

                        <!-- SUB TOTAL -->
                        <div class="col-sm-5">
                            <h6>Your Order</h6>
                            <div class="order-place">
                                <div class="order-detail">
                                    <p>Rise Skinny Jeans <span>$598 </span></p>
                                    <p>Shipping <span>$199 </span></p>
                                    <p>VAT <span> $139</span></p>

                                    <!-- SUB TOTAL -->
                                    <p class="all-total">TOTAL COST <span> $998</span></p>
                                </div>
                                <div class="pay-meth">
                                    <ul>
                                        <li>
                                            <div class="radio">
                                                <input type="radio" name="radio1" id="radio1"
                                                    value="option1" checked>
                                                <label for="radio1"> DIRECT BANK TRANSFER </label>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                                erat turpis, pellentesque non leo eget, pulvinar pretium arcu.
                                                Mauris porta elit non.</p>
                                        </li>
                                        <li>
                                            <div class="radio">
                                                <input type="radio" name="radio1" id="radio2"
                                                    value="option2">
                                                <label for="radio2"> CASH ON DELIVERY</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio">
                                                <input type="radio" name="radio1" id="radio3"
                                                    value="option3">
                                                <label for="radio3"> CHEQUE PAYMENT </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio">
                                                <input type="radio" name="radio1" id="radio4"
                                                    value="option4">
                                                <label for="radio4"> PAYPAL </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input id="checkbox3-4" class="styled" type="checkbox">
                                                <label for="checkbox3-4"> I’VE READ AND ACCEPT THE <span
                                                        class="color"> TERMS & CONDITIONS </span> </label>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#." class="btn  btn-dark pull-right margin-top-30">PLACE
                                        ORDER</a>
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
