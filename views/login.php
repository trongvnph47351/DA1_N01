<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Login / Registration || Hurst</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		
		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<!-- animate css -->
		<link rel="stylesheet" href="./assets/css/animate.min.css">
		<!-- jquery-ui.min css -->
		<link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
		<!-- meanmenu css -->
		<link rel="stylesheet" href="./assets/css/meanmenu.min.css">
		<!-- nivo-slider css -->
		<link rel="stylesheet" href="./assets/lib/css/nivo-slider.css">
		<link rel="stylesheet" href="./assets/lib/css/preview.css">
		<!-- slick css -->
		<link rel="stylesheet" href="./assets/css/slick.min.css">
		<!-- lightbox css -->
		<link rel="stylesheet" href="./assets/css/lightbox.min.css">
		<!-- material-design-iconic-font css -->
		<link rel="stylesheet" href="./assets/css/material-design-iconic-font.css">
		<!-- All common css of theme -->
		<link rel="stylesheet" href="./assets/css/default.css">
		<!-- style css -->
		<link rel="stylesheet" href="./assets/css/style.min.css">
        <!-- shortcode css -->
        <link rel="stylesheet" href="./assets/css/shortcode.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="./assets/css/responsive.css">
		<!-- modernizr css -->
		<script src="./assets/js/vendor/modernizr-3.11.2.min.js"></script>
	</head>
	<body>	
		<!-- WRAPPER START -->
		<div class="wrapper bg-dark-white">

			<!-- HEADER-AREA START -->
			<?php 
				require_once 'components/header.php';
			?>
			<!-- HEADER-AREA END -->
			<!-- Mobile-menu start -->
			<div class="mobile-menu-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 d-block d-md-none">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">TRANG CHỦ</a>
											<ul>
												<li><a href="index.html">TRANG CHỦ</a></li>
											</ul>
										</li>
										<li><a href="shop.html">SẢN PHẨM</a></li>
										<li><a href="shop-sidebar.html">DANH MỤC</a></li>
										<li><a href="blog.html">TIN TỨC</a></li>
										<li><a href="contact.html">LIÊN HỆ</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-menu end -->
			<!-- HEADING-BANNER START -->
			<div class="heading-banner-area overlay-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="heading-banner">
								<div class="heading-banner-title">
									<h2>ĐĂNG NHẬP</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.html">TRANG CHỦ</a></li>
										<li>ĐĂNG NHẬP</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADING-BANNER END -->
			<!-- SHOPPING-CART-AREA START -->
			<div class="login-area  pt-80 pb-80">
				<div class="container">
					<form action="#">	
						<div class="row">
							<div class="col-lg-6">
								<div class="customer-login text-left">
									<h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
									<p class="text-gray">If you have an account with us, Please login!</p>
									<input type="text" placeholder="Email here..." name="email">
									<input type="password" placeholder="Password">
									<p><a href="#" class="text-gray">Forget your password?</a></p>
									<button type="submit" data-text="login" class="button-one submit-button mt-15">login</button>
								</div>					
							</div>
							<div class="col-lg-6">
								<div class="customer-login text-left">
									<h4 class="title-1 title-border text-uppercase mb-30">new customers</h4>
									<p class="text-gray">If you have an account with us, Please login!</p>
									<input type="text" placeholder="Your name here..." name="name">
									<input type="text" placeholder="Email address here..." name="email">
									<input type="password" placeholder="Password">
									<input type="password" placeholder="Confirm password">
									<p class="mb-0">
										<input type="checkbox" id="newsletter" name="newsletter" checked>
										<label for="newsletter"><span>Sign up for our newsletter!</span></label>
									</p>
									<button type="submit" data-text="regiter" class="button-one submit-button mt-15">regiter</button>
								</div>					
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- SHOPPING-CART-AREA END -->
			<!-- FOOTER START -->
			<?php
				require_once 'components/footer.php';
			?>
			<!-- FOOTER END -->
		</div>
		<!-- WRAPPER END -->

		<!-- all js here -->
	<!-- jquery latest version -->
	<script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
		<script src="./assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
		<!-- bootstrap js -->
		<script src="./assets/js/bootstrap.bundle.min.js"></script>
		<!-- jquery.meanmenu js -->
		<script src="./assets/js/jquery.meanmenu.js"></script>
		<!-- slick.min js -->
		<script src="./assets/js/slick.min.js"></script>
		<!-- jquery.treeview js -->
		<script src="./assets/js/jquery.treeview.js"></script>
		<!-- lightbox.min js -->
		<script src="./assets/js/lightbox.min.js"></script>
		<!-- jquery-ui js -->
		<script src="./assets/js/jquery-ui.min.js"></script>
		<!-- jquery.nivo.slider js -->
		<script src="./assets/lib/js/jquery.nivo.slider.js"></script>
		<script src="./assets/lib/home.js"></script>
		<!-- jquery.nicescroll.min js -->
		<script src="./assets/js/jquery.nicescroll.min.js"></script>
		<!-- countdon.min js -->
		<script src="./assets/js/countdon.min.js"></script>
		<!-- wow js -->
		<script src="./assets/js/wow.min.js"></script>
		<!-- plugins js -->
		<script src="./assets/js/plugins.js"></script>
		<!-- main js -->
		<script src="./assets/js/main.min.js"></script>
	</body>

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->
</html>
