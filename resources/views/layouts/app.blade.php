<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> KNN </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/public_content/image/favicon-32x32.png') }}" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap icons -->
    <!-- <link rel="stylesheet" href="/dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap Docs -->

    <!-- Slick -->
    <link rel="stylesheet" href="/libs/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="/libs/slick/slick-theme.css">

    <!-- Rating -->
    <link rel="stylesheet" href="/libs/rating/rating.min.css" type="text/css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
    @livewireStyles
    <!-- Main style file -->
    <link rel="stylesheet" href="/dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <img style="max-width: 100px" src="{{ asset('public_content/image/loader_logo.png') }}" alt="logo">
        <div class="preloader-icon"></div>
    </div>
    <!-- ./ preloader -->

    <!-- sidebars -->

    <!-- notifications sidebar -->
    <div class="sidebar" id="notifications">
        <div class="sidebar-header d-block align-items-end">
            <div class="align-items-center d-flex justify-content-between py-4">
                Notifications
                <button data-sidebar-close>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-content">
            <div class="tab-content">
                <div class="tab-pane active" id="activities">
                    <div class="tab-pane-body">
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-person"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-bold d-flex justify-content-between">
                                            You joined a group
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Today
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-warning me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-hdd"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-bold d-flex justify-content-between">
                                            Storage is running low!
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Today
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-secondary me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-file-text"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            1 person sent a file
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Yesterday
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-success me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-download"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            Reports ready to download
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Yesterday
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            2 steps verification
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> 20 min ago
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane-footer">
                        <a href="#" class="btn btn-success">
                            <i class="bi bi-check2 me-2"></i> Make All Read
                        </a>
                        <a href="#" class="btn btn-danger ms-2">
                            <i class="bi bi-trash me-2"></i> Delete all
                        </a>
                    </div>
                </div>
                <div class="tab-pane" id="notes">
                    <div class="tab-pane-body">
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                    This month's report will be prepared.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Today
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                    An email will be sent to the customer.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Today
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 d-flex justify-content-between">
                                    The meeting will be held.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Yesterday
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                    Conversation with users.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Yesterday
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-warning d-flex justify-content-between">
                                    Payment refund will be made to the customer.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> 20 min ago
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 d-flex justify-content-between">
                                    Payment form will be activated.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> 20 min ago
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane-footer">
                        <a href="#" class="btn btn-primary btn-block">
                            <i class="bi bi-plus me-2"></i> Add Notes
                        </a>
                    </div>
                </div>
                <div class="tab-pane" id="alerts">
                    <div class="tab-pane-body">
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Signed in with a different device.
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Your billing information is not active.
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Your subscription has expired.
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Your storage space is running low
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane-footer">
                        <a href="#" class="btn btn-success">
                            <i class="bi bi-check2 me-2"></i> Make All Read
                        </a>
                        <a href="#" class="btn btn-danger ms-2">
                            <i class="bi bi-trash me-2"></i> Delete all
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ notifications sidebar -->

    <!-- settings sidebar -->
    <div class="sidebar" id="settings">
        <div class="sidebar-header">
            <div>
                <i class="bi bi-gear me-2"></i>
                Settings
            </div>
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <div class="sidebar-content">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault1">
                            Remember next visits
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault2">
                            Enable report generation.
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault3">
                            Allow notifications.
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4">
                            Hide user requests
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault5">
                            Speed up demands
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Hide menus
                        </label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar-action">
            <a href="#" class="btn btn-primary">All Settings</a>
        </div>
    </div>
    <!-- ./ settings sidebar -->

    <!-- search sidebar -->
    <div class="sidebar" id="search">
        <div class="sidebar-header">
            Search
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <div class="sidebar-content">
            <form class="mb-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search"
                        aria-describedby="button-search-addon">
                    <button class="btn btn-outline-light" type="button" id="button-search-addon">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <h6 class="mb-3">Last searched</h6>
            <div class="mb-4">
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Reports for 2021</a>
                    <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Current users</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Meeting notes</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
            </div>
            <h6 class="mb-3">Recently viewed</h6>
            <div class="mb-4">
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Todo list</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Pricing table</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Settings</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Users</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-action">
            <a href="#" class="btn btn-danger">All Clear</a>
        </div>
    </div>
    <!-- ./ search sidebar -->

    <!-- ./ sidebars -->

    <!-- menu -->
    <div class="menu">
        <div class="menu-header">
            <a href="/" class="menu-header-logo">
                <img style="max-width: 60px" src="{{ asset('public_content/image/loader_logo.png') }}"
                    alt="KNN Logo">
            </a>
            <a href="/" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <div class="avatar me-3">
                        <img src="{{ auth()->user()->profile_photo_url }}" class="rounded-circle" alt="image">
                    </div>
                    <div>
                        <div class="fw-bold">{{ auth()->user()->name }}</div>
                        <small class="text-muted">{{ auth()->user()->role->name }}</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="/user/profile" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-person dropdown-item-icon"></i> Profile
                    </a>
                    <form method="POST" class="dropdown-item d-flex align-items-center"
                        action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class=" text-danger">
                            <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                        </button>
                    </form>

                </div>
            </div>
            <ul>
                <li class="menu-divider">E-Commerce</li>
                <li>
                    <a href="/">
                        <span class="nav-link-icon">
                            <i class="bi bi-house"></i>
                        </span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="/orders">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Orders</span>
                    </a>

                </li>
                @can('modify_categories')
                    <li>
                        <a href="/categories">
                            <span class="nav-link-icon">
                                <i class="bi bi-boxes"></i>

                            </span>
                            <span>Categories</span>
                        </a>

                    </li>
                @endcan
                <li>
                    <a href="/products">
                        <span class="nav-link-icon">
                            <i class="bi bi-truck"></i>
                        </span>
                        <span>Products</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <!-- ./  menu -->

    <!-- layout-wrapper -->
    <div class="layout-wrapper">

        <!-- header -->
        <div class="header">
            <div class="menu-toggle-btn">
                <!-- Menu close button for mobile devices -->
                <a href="#">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <!-- Logo -->
            <a href="index.html" class="logo">
                <img style="max-width: 60px" src="{{ asset('public_content/image/loader_logo.png') }}"
                    alt="logo">
            </a>
            <!-- ./ Logo -->
            <div class="page-title">@stack('title')</div>
            <form class="search-form">
                <div class="input-group">
                    <button class="btn btn-outline-light" type="button" id="button-addon1">
                        <i class="bi bi-search"></i>
                    </button>
                    <input type="text" class="form-control" placeholder="Search..."
                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <a href="#" class="btn btn-outline-light close-header-search-bar">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
            </form>
            <div class="header-bar ms-auto">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-link-notify" data-count="2"
                            data-sidebar-target="#notifications">
                            <i class="bi bi-bell icon-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Header mobile buttons -->
            <div class="header-mobile-buttons">
                <a href="#" class="search-bar-btn">
                    <i class="bi bi-search"></i>
                </a>
                <a href="#" class="actions-btn">
                    <i class="bi bi-three-dots"></i>
                </a>
            </div>
            <!-- ./ Header mobile buttons -->
        </div>
        <!-- ./ header -->

        <!-- content -->
        <div class="content">

            @yield('content')
        </div>

        <!-- ./ content -->

        <!-- content-footer -->
        <footer class="content-footer">
            <div>© {{ now()->year }} Online Shopping </div>
            <div>
                <nav class="nav gap-4">
                    <a href="#" class="nav-link">Get Help</a>
                </nav>
            </div>
        </footer>
        <!-- ./ content-footer -->

    </div>
    <!-- ./ layout-wrapper -->

    <!-- Bundle scripts -->
    <script src="/libs/bundle.js"></script>

    <!-- Apex chart -->
    <script src="/libs/charts/apex/apexcharts.min.js"></script>

    <!-- Slick -->
    <script src="/libs/slick/slick.min.js"></script>
    @stack('modals')
    @stack('scripts')

    <!-- Examples -->
    @livewireScripts

    <!-- Main Javascript file -->
    <script src="/dist/js/app.min.js"></script>

    <script></script>
</body>

</html>
