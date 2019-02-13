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
            </div>
        </div>
    </div>
</header>
@yield('content')

<footer id="footer-area">
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
