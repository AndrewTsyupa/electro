@inject('categoryProvider', 'App\Providers\CategoryProvider')

    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Electro Shoppe Stores - Bootstrap 3 Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700"
          rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400"
          rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    {{--<link href="/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    <!-- CSS Summernote-->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">--}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>

    <!--[if lt IE 9]>
    <script src="/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.png">
    <link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
    <link rel="shortcut icon" href="images/fav.png">

</head>
<body>
<!-- Header Section Starts -->
<header id="header-area">
    <!-- Header Top Starts -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Header Links Starts -->
                <div class="col-sm-8 col-xs-12">
                    <div class="header-links">
                        <ul class="nav navbar-nav pull-left">
                            <li>
                                <a href="/">
                                    <i class="fa fa-home hidden-lg hidden-md" title="Home"></i>
                                    <span class="hidden-sm hidden-xs">
											Home
										</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/list_admin">
                                    <i class="fa fa-shopping-cart hidden-lg hidden-md" title="Shopping Cart"></i>
                                    <span class="hidden-sm hidden-xs">
											Admin
										</span>
                                </a>
                            </li>
                            <li>
                                <a href="/shoping">
                                    <i class="fa fa-shopping-cart hidden-lg hidden-md" title="Shopping Cart"></i>
                                    <span class="hidden-sm hidden-xs">
											Shopping Cart
										</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Header Links Ends -->
                <!-- Currency & Languages Starts -->
                <div class="col-sm-4 col-xs-12">
                    <div class="pull-right">
                        <!-- Currency Starts -->
                        <div class="btn-group">
                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                Currency
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="pull-right dropdown-menu">
                                <li><a tabindex="-1" href="#">Pound </a></li>
                                <li><a tabindex="-1" href="#">US Dollar</a></li>
                                <li><a tabindex="-1" href="#">Euro</a></li>
                            </ul>
                        </div>
                        <!-- Currency Ends -->
                        <!-- Languages Starts -->
                        <div class="btn-group">
                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                Language
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="pull-right dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="#">English</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#">French</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Languages Ends -->
                    </div>
                </div>
                <!-- Currency & Languages Ends -->
            </div>
        </div>
    </div>
    <!-- Header Top Ends -->
    <!-- Main Header Starts -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <!-- Search Starts -->
                <div class="col-md-3">
                    <div id="search">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Search">
                            <span class="input-group-btn">
								<button class="btn btn-lg" type="button">
									<i class="fa fa-search"></i>
								</button>
							  </span>
                        </div>
                    </div>
                </div>
                <!-- Search Ends -->
                <!-- Logo Starts -->
                <div class="col-md-6">
                    <div id="logo">
                        <a href="/"><img src="/images/logo.png" title="Spice Shoppe" alt="Spice Shoppe"
                                         class="img-responsive"/></a>
                    </div>
                </div>
                <!-- Logo Starts -->
                <!-- Shopping Cart Starts -->
                <div class="col-md-3" id="korzina-dropdown">
                    @include('layouts._korzina_dropdown')
                </div>
                <!-- Shopping Cart Ends -->
            </div>
        </div>
    </div>
    <!-- Main Header Ends -->
    <!-- Main Menu Starts -->
    <nav id="main-menu" class="navbar" role="navigation">
        <div class="container">
            <!-- Nav Header Starts -->
            <div class="navbar-header">
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-cat-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Nav Header Ends -->
            <!-- Navbar Cat collapse Starts -->
            <div class="collapse navbar-collapse navbar-cat-collapse">


                <ul class="nav navbar-nav ">

                    @foreach($categoryProvider->category() as $category )
                        <li class="bloc-category-navbar">
                            <a class="name_category" href="{{ url('/category/'.$category->id)}}">{{$category->name}}</a>
                        </li>
                    @endforeach

                    <li class="dropdown">
                        <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown"
                           data-hover="dropdown" data-delay="10">
                            Pages
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($categoryProvider->pages() as $page)
                                <li><a tabindex="-1" href="{{ url($page->url)}}">{{$page->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Navbar Cat collapse Ends -->
        </div>
    </nav>
    <!-- Main Menu Ends -->
</header>
@yield('content')
<footer id="footer-area">
    <!-- Footer Links Starts -->
    <div class="footer-links">
        <!-- Container Starts -->
        <div class="container">
            <!-- Information Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Information</h5>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <!-- Information Links Ends -->
            <!-- My Account Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>My Account</h5>
                <ul>
                    <li><a href="#">My orders</a></li>
                    <li><a href="#">My merchandise returns</a></li>
                    <li><a href="#">My credit slips</a></li>
                    <li><a href="#">My addresses</a></li>
                    <li><a href="#">My personal info</a></li>
                </ul>
            </div>
            <!-- My Account Links Ends -->
            <!-- Customer Service Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Service</h5>
                <ul>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Specials</a></li>
                </ul>
            </div>
            <!-- Customer Service Links Ends -->
            <!-- Follow Us Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Follow Us</h5>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">RSS</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>
            <!-- Follow Us Links Ends -->
            <!-- Contact Us Starts -->
            <div class="col-md-4 col-sm-12 last">
                <h5>Contact Us</h5>
                <ul>
                    <li>My Company</li>
                    <li>
                        1247 LB Nagar Road, Hyderabad, Telangana - 35
                    </li>
                    <li>
                        Email: <a href="#"></a>
                    </li>
                </ul>
                <h4 class="lead">
                    Tel: <span>1(234) 567-9842</span>
                </h4>
            </div>
            <!-- Contact Us Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Footer Links Ends -->
    <!-- Copyright Area Starts -->
    <div class="copyright">
        <!-- Container Starts -->
        <div class="container">
            <!-- Starts -->
            <p class="pull-left">
                &copy; 2019 Electro Shoppe Stores. Designed By Andy <a href="http://sainathchillapuram.com">Sainath
                    Chillapuram</a>
            </p>
            <!-- Ends -->
            <!-- Payment Gateway Links Starts -->
            <ul class="pull-right list-inline">
                <li>
                    <img src="images/payment-icon/cirrus.png" alt="PaymentGateway"/>
                </li>
                <li>
                    <img src="images/payment-icon/paypal.png" alt="PaymentGateway"/>
                </li>
                <li>
                    <img src="images/payment-icon/visa.png" alt="PaymentGateway"/>
                </li>
                <li>
                    <img src="images/payment-icon/mastercard.png" alt="PaymentGateway"/>
                </li>

            </ul>
            <!-- Payment Gateway Links Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Copyright Area Ends -->
</footer>
<!-- Footer Section Ends -->
<!-- JavaScript Files -->

<script src="/js/bootstrap.bundle.js"></script>
<script src="/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/tovar.js"></script>
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>