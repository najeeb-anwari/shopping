<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@stack('title')</title>
    <!-- Favicon Icon Css -->
    <link rel="icon" type="image/png" sizes="32x32" href="/public_content/image/favicon-32x32.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="/public_content/css/animate.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="/public_content/css/animate.css" type="text/css">
    <!-- Font Css -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"
    rel="stylesheet">
    <link href="/public_content/css/ionicons.min.css" type="text/css" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Owl Css -->
    <link href="/public_content/css/owl.carousel.min.css" type="text/css" rel="stylesheet">
    <link href="/public_content/css/owl.theme.default.min.css" type="text/css" rel="stylesheet">
    <!-- Magnific Popup Css -->
    <link href="/public_content/css/magnific-popup.css" type="text/css" rel="stylesheet">
    <!-- Price Filter Css -->
    <link href="/public_content/css/jquery-ui.css" type="text/css" rel="stylesheet">
    <!-- Scrollbar Css -->
    <link href="/public_content/css/mCustomScrollbar.min.css" type="text/css" rel="stylesheet">
    <!-- Select2 Css -->
    <link href="/public_content/css/select2.min.css" type="text/css" rel="stylesheet">
    <!-- main css -->
    <link href="/public_content/css/responsive.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    @stack('styles')
    <link rel="stylesheet" href="/dist/css/app.min.css">
    <link href="/public_content/css/style.css" type="text/css" rel="stylesheet">

</head>

<body>
    <!-- LOADER -->
    <div id="preloader">
        <div class="loading_wrap">
            <img src="/public_content/image/loader_logo.png" alt="logo">
        </div>
    </div>
    <!-- LOADER -->
    <div class="menu-wrap">
        <nav id="sidebar">
            <div id="dismiss">
                <i class="ion-close-round"></i>
            </div>
            @php

                $categories = App\Models\Category::all();
            @endphp
            <ul class="list-unstyled components">
                @foreach($categories as $category)
                <li>

                    <a href="/categories/{{ $category->id}}/products">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>

        </nav>
    </div>
    <!-- Start Header Section -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="header_list text-md-left text-center">
                            <li><a href="tel:+ 00 123 456 789"><i class="fa fa-phone"></i>+ 00 123 456 789</a></li>
                            <li><a href="mailto:info@gmail.com"><i class="fa fa-envelope-o"></i>info@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="header_list text-md-right text-center">
                            @guest
                            <li><a href="/login">Login</a>
                            </li>
                            <li><a href="/register">Register</a>
                            </li>
                            @endguest
                            @auth
                            @can('buyer_access')
                            <li><a href="/wishlist">Wishlist</a></li>
                            <li><a href="/dashboard">Dashboard</a></li>

                            @elsecan('seller_access')
                            <li><a href="/dashboard">Dashboard</a></li>
                            @elsecan('admin_access')
                            <li><a href="/dashboard">Dashboard</a></li>
                            @endcan
                            <li>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    My Account
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a href="/user/profile" class="dropdown-item d-flex align-items-center">
                                            <i class="bi bi-person dropdown-item-icon"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" class="dropdown-item d-flex align-items-center justify-content-between" action="{{ route('logout') }}">
                                            @csrf
                                            <button  type="submit" class="btn text-danger ">
                                                <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </li>

                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mdl">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hm-inner d-sm-flex align-items-center justify-content-between">
                            <div class="header-logo">
                                <a href="/"><img src="/public_content/image/loader_logo.png" alt="logo"></a>
                            </div>
                            <form action="/search" class="header-form">
                                <input name="query" class="search-box" placeholder="Search Product..." required
                                    type="search">
                                <button type="submit">Search</button>
                            </form>
                            <div class="header-right">
                                @can('modify_cart')
                                    @livewire('components.cart-counter')
                                @endcan
                                <div class="d-lg-none mm_icon">
                                    <div class="form-captions" id="search">
                                        <button type="submit" class="submit-btn-2"><i class="fa fa-search"></i></button>
                                    </div>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation"><i
                                            class="fa fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-btm  border-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg categories_menu navbar-light">
                            <button type="button" id="sidebarCollapse" class="categories-btn">
                                <i class="ion-ios-list-outline"></i><span>All Categories </span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a href="/">Home</i></a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about">About us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->


        @yield('content')


    <!-- Start Facility Section-->
    <section class="facility-section pb_large pt_large bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 facility-box box-1">
                    <div class="facility-inner">
                        <div class="fb-icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="fb-text">
                            <h5>FREE DELIVERY</h5>
                            <span>Worldwide</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 facility-box box-2">
                    <div class="facility-inner">
                        <div class="fb-icon">
                            <i class="fa fa-headphones"></i>
                        </div>
                        <div class="fb-text">
                            <h5>24/ 7 SUPPORT</h5>
                            <span>Customer Support</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 facility-box box-3">
                    <div class="facility-inner">
                        <div class="fb-icon">
                            <i class="fa fa-cc-mastercard"></i>
                        </div>
                        <div class="fb-text">
                            <h5>PAYMENT</h5>
                            <span>Secure System</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 facility-box box-4">
                    <div class="facility-inner">
                        <div class="fb-icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="fb-text">
                            <h5>TRUSTED</h5>
                            <span>enuine Products</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Facility Section-->

    @livewire('layouts.footer')

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Jquery js -->
    <script src="/public_content/js/jquery.min.js" type="text/javascript"></script>
    <script src="/libs/jquery.js" type="text/javascript"></script>
    <script src="/public_content/js/jquery-migrate-1.4.1.min.js" type="text/javascript"></script>
    <script src="/public_content/js/jquery-migrate-3.4.0.min.js" type="text/javascript"></script>
    <!-- popper.min js -->

    <script src="/public_content/js/popper.min.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Magnific Popup js -->
    <script src="/public_content/js/jquery.magnific-popup.min.js" type="text/javascript"></script>

    <!-- Owl js -->
    <script src="/public_content/js/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Countdown js -->
    <script src="/public_content/js/countdown.min.js" type="text/jscript"></script>
    <!-- Counter js -->
    <script src="/public_content/js/jquery.countup.js" type="text/javascript"></script>
    <!-- waypoint js -->
    <script src="/public_content/js/waypoint.js" type="text/javascript"></script>
    <!-- Select2 js -->
    <script src="/public_content/js/select2.min.js" type="text/javascript"></script>
    <!-- Price Slider js -->
    <script src="/public_content/js/jquery-price-slider.js" type="text/javascript"></script>
    <!-- jquery.elevatezoom js -->
    <script src='/public_content/js/jquery.elevatezoom.js' type="text/javascript"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src='/public_content/js/imagesloaded.pkgd.min.js' type="text/javascript"></script>
    <!-- isotope.min js -->
    <script src='/public_content/js/isotope.min.js' type="text/javascript"></script>
    <!-- jquery.fitvids js -->
    <script src='/public_content/js/jquery.fitvids.js' type="text/javascript"></script>
    <!-- mCustomScrollbar.concat.min js -->
    <script src="/public_content/js/mCustomScrollbar.concat.min.js" type="text/javascript"></script>
    <!-- Custom css -->
    <script src="/public_content/js/custom.js" type="text/javascript"></script>
    <script src="{{ mix('js/app.js') }}" ></script>
    <script>






        window.addEventListener('action-performed', event => {
            Swal.fire({

                icon: `${event.detail.actionIcon}`,
                title: `${event.detail.actionTitle}`,
                text: `${event.detail.actionText}`,

                showConfirmButton: true,

                });
        })
    </script>
    @stack('modals')
    @livewireScripts
    @stack('scripts')

</body>

</html>
