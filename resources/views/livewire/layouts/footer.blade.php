<!-- Start Footer Section -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-box box-1">
                        <h6 class="fb-title">ABOUT US</h6>
                        <div class="fb-iner">
                            <p>Welcome to our online store! We’re passionate about providing high-quality products and
                                exceptional customer service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 order-md-last">
                    <div class="footer-box box-4">
                        <h6 class="fb-title">CONTACT INFO</h6>
                        <div class="fb-iner">
                            <ul>
                                <li><i class="ion-ios-location-outline"></i>
                                    <p>KNN, Kabul, Afghanistan</p>
                                </li>
                                <li><i class="ion-ios-telephone-outline"></i>
                                    <p>+93202399923</p>
                                </li>
                                <li><i class="ion-ios-email-outline"></i><a href="#">info@knn.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="footer-box box-2">
                        <h6 class="fb-title">CATEGORIES</h6>
                        <div class="fb-iner">
                            <ul class="footer-links">
                                @foreach ($categories as $category)
                                    <li><a href="/categories/{{ $category->id }}/products">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                                <li><a href="/products" class="text-dark"><i class="bi bi-eye-fill"></i> See More . .
                                        .</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="footer-box box-3">
                        <h6 class="fb-title">MY ACCOUNT</h6>
                        <div class="fb-iner">
                            <ul class="footer-links">
                                @auth
                                    <li><a href="/orders">Orders</a></li>
                                    <li><a href="/wishlist">Wishlist</a></li>
                                @endauth
                                @guest
                                    <li><a href="/login">Log In</a></li>
                                    <li><a href="/register">Register</a></li>
                                @endguest

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright">
                        <p>Copyright © {{ now()->year }}. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-social text-md-right">
                        <ul>
                            <li><a href="index_2.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="index_2.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="index_2.html#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="index_2.html#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="index_2.html#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->
