<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> @yield('title') </title>
    <!-- Bootstrap min css -->
    <link rel="stylesheet" href="/site/assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- bxSlider CSS file -->
    <link href="/site/assets/css/jquery.bxslider.css" rel="stylesheet" />
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="/site/assets/css/owl.carousel.css">
    <!-- Full Calender stylesheet -->
    <link rel="stylesheet" href="/site/assets/css/fullcalendar.css">
    <!-- Typo css -->
    <link rel="stylesheet" href="/site/assets/css/typo.css" type="text/css" media="all">
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="/site/assets/css/font-awesome.min.css" type="text/css" media="all">
    <!-- Ihover css -->
    <link href="/site/assets/css/ihover.css" rel="stylesheet">
    <!-- Widget css -->
    <link href="/site/assets/css/widget.css" rel="stylesheet">
    <!-- Style css -->
    <link rel="stylesheet" href="/site/assets/css/style.css" type="text/css" media="all">
    <!--RESPONSIVE MENU-->
    <link rel="stylesheet" href="/site/assets/css/jquery.sidr.dark.css" type="text/css" media="all">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/site/assets/css/responsive.css" type="text/css" media="all">
    <!-- Color css -->
    <link rel="stylesheet" href="/site/assets/css/color.css" type="text/css" media="all">
</head>
<body>
    <!-- Wrapper start -->
    <div id="wrapper">
    
        @yield('content')

        <!--kode-footer-text End-->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>&copy; <a href="#">Renan Machado</a> All Rights Reserved</p>
                    </div>
                </div>
            </div>
            <div class="back-to-top">
                <a href="#"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
        <!--copyright End-->
    </div>
    <!--Jquery Lib-->
    <script src="/site/assets/js/jquery.js"></script>
    <!--Bootstrap Javascript File-->
    <script src="/site/assets/js/bootstrap.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="/site/assets/js/jquery.bxslider.js"></script>
    <!-- OWL Javascript file -->
    <script src="/site/assets/js/owl.carousel.min.js"></script>
    <!--Image Filterable Gallery-->
    <script src="/site/assets/js/jquery-filterable.js"></script>
    <!--Number Count Script-->
    <script src="/site/assets/js/waypoints-min.js"></script>
    <!--Full Calender Script-->
    <script src="/site/assets/js/moment.min.js"></script>
    <script src="/site/assets/js/fullcalendar.min.js"></script>
    <!--Time Counter Script-->
    <script src="/site/assets/js/jquery.downCount.js"></script>
    <!--Internet Explore Script-->
    <script src="/site/assets/js/ie.js"></script>
    <!--GOOGLE MAP-->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <!--RESPONSIVE MENU-->
    <script src="/site/assets/js/jquery.sidr.min.js"></script>
    <!--Custom Scripts-->
    <script src="/site/assets/js/custom.js"></script>

    @yield('scripts')
        
</body>
</html>