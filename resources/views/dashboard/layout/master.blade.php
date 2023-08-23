<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/owl.carousel.css">
    <link rel="stylesheet" href="dashboard/css/owl.theme.css">
    <link rel="stylesheet" href="dashboard/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="dashboard/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="dashboard/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="dashboard/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="dashboard/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="front/img/logo_baongoc_new.png" style="width : 180px; height : 90px" alt="" /></a>
         
            </div>
			<div class="nalika-profile">
				{{-- <div class="profile-dtl">
					<a href="#"><img src="img/notification/4.jpg" alt="" /></a>
					<h2>Lakian <span class="min-dtn">Das</span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div> --}}
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Quản lý sản phẩm</span>
								</a>

                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Phản hồi</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Thống kê</span></a> 
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Quản lý danh mục</span></a> 
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non">Quản lí tin tức</span></a>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Quản lý đơn hàng</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Body --}}

        @yield('body')


    <!-- jquery
		============================================ -->
    <script src="dashboard/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="dashboard/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="dashboard/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="dashboard/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="dashboard/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="dashboard/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="dashboard/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="dashboard/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="dashboard/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="dashboard/js/metisMenu/metisMenu.min.js"></script>
    <script src="dashboard/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="dashboard/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="dashboard/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="dashboard/js/calendar/moment.min.js"></script>
    <script src="dashboard/js/calendar/fullcalendar.min.js"></script>
    <script src="dashboard/js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="dashboard/js/flot/jquery.flot.js"></script>
    <script src="dashboard/js/flot/jquery.flot.resize.js"></script>
    <script src="dashboard/js/flot/curvedLines.js"></script>
    <script src="dashboard/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="dashboard/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="dashboard/js/main.js"></script>
</body>

</html>