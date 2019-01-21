<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>如何学习，如何学习爱，如何学习技术，如何学习做人，王文礼博客</title>

    <meta name="keywords" content="如何学会爱，怎么学习，如何学习技术，如何学习做人，如何成长" >
    <meta name="description" content="世界上没有后悔药，生命对于我们只有一次，只有吃过亏的人才会接受前人的教诲，人类最大的好处就是学会了传承文明，会学习，做不到最好，但是我一直在努力-王文礼博客" >


  
  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('/template/plugins/jquery-ui/jquery-ui.min.css ') }} " rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{ asset('/template/plugins/bootstrap/dist/css/bootstrap.min.css') }} " rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('/template/plugins/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{ asset('/template/plugins/slick-carousel/slick/slick.css') }} " rel="stylesheet">
  <link href="{{ asset('/template/plugins/slick-carousel/slick/slick-theme.css') }} " rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{ asset('/template/plugins/fancybox/jquery.fancybox.pack.css') }} " rel="stylesheet">
  <link href="{{ asset('/template/plugins/jquery-nice-select/css/nice-select.css') }} " rel="stylesheet">
  <link href="{{ asset('/template/plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css') }} " rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('/template/css/style.css') }} " rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{ asset('/template/img/favicon.png') }} " rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <meta name="baidu-site-verification" content="Lr12RVz0ET" />



</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navigation">
					<a class="navbar-brand" href="{{ url('/') }}">
						<img src="{{ asset('/template/images/logo.png') }}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="{{ url('/xuexiai') }}">学习爱</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/xuejishu') }}">学习技术</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="{{ url('/xuezuoren') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="category.html">学习做人</a>
									<a class="dropdown-item" href="single.html">Single Page</a>
									<a class="dropdown-item" href="store-single.html">Store Single</a>
									<a class="dropdown-item" href="dashboard.html">Dashboard</a>
									<a class="dropdown-item" href="user-profile.html">User Profile</a>
									<a class="dropdown-item" href="submit-coupon.html">Submit Coupon</a>
									<a class="dropdown-item" href="blog.html">Blog</a>
									<a class="dropdown-item" href="single-blog.html">Single Post</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="index.html">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link add-button" href="#"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>



    @yield('shouye')





</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2016. All Rights Reserved.如何学习网<a href="http://wangwenli.cc" target="_blank" title="学习网">学习网</a> - Collect from <a href="http://wangwenli.cc" title="学习" target="_blank">学习网</a></p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="{{ asset('/template/plugins/jquery/jquery.min.js') }} "></script>
  <script src="{{ asset('/template/plugins/jquery-ui/jquery-ui.min.js') }} "></script>
  <script src="{{ asset('/template/plugins/tether/js/tether.min.js') }} "></script>
  <script src="{{ asset('/template/plugins/raty/jquery.raty-fa.js') }} "></script>
  <script src="{{ asset('/template/plugins/bootstrap/dist/js/popper.min.js') }} "></script>
  <script src="{{ asset('/template/plugins/bootstrap/dist/js/bootstrap.min.js') }} "></script>
  <script src="{{ asset('/template/plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js') }} "></script>
  <script src="{{ asset('/template/plugins/slick-carousel/slick/slick.min.js') }} "></script>
  <script src="{{ asset('/template/plugins/jquery-nice-select/js/jquery.nice-select.min.js') }} "></script>
  <script src="{{ asset('/template/plugins/fancybox/jquery.fancybox.pack.js') }} "></script>
  <script src="{{ asset('/template/plugins/smoothscroll/SmoothScroll.min.js') }} "></script>
  
  <script src="{{ asset('/template/js/scripts.js"></script>

</body>

</html>



