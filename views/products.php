<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:44 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Shop || Hurst</title>
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
									<h2>SẢN PHẨM</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="#">TRANG CHỦ</a></li>
										<li>SẢN PHẨM</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADING-BANNER END -->
			<!-- PRODUCT-AREA START -->
			<div class="product-area pt-80 pb-80 product-style-2">
				<div class="container">
					<!-- Shop-Content End -->
					<div class="shop-content">
						<div class="row">
							<div class="col-md-12">
								<div class="product-option mb-30 clearfix">
									<!-- Categories start -->
									<div class="dropdown floatleft">
										<button class="option-btn" >
										Categories
										</button>
										<div class="dropdown-menu dropdown-width" >
											<!-- Widget-Categories start -->
											<aside class="widget widget-categories">
												<div class="widget-title">
													<h4>Categories</h4>
												</div>
												<div id="cat-treeview"  class="widget-info product-cat boxscrol2">
													<ul>
														<li><span>Jewelry</span>
															<ul>
																<li><a href="#">T-Shirts</a></li>
																
															</ul>
														</li>
													</ul>
												</div>
											</aside>
											<!-- Widget-categories end -->
										</div>
									</div>	
									<!-- Categories end -->
									<!-- Price start -->
									<div class="dropdown floatleft">
										<button class="option-btn" >
										Price
										</button>
										<div class="dropdown-menu dropdown-width" >
											<!-- Shop-Filter start -->
											<aside class="widget shop-filter">
												<div class="widget-title">
													<h4>Price</h4>
												</div>
												<div class="widget-info">
													<div class="price_filter">
														<div class="price_slider_amount">
															<input type="submit"  value="You range :"/> 
															<input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
														</div>
														<div id="slider-range"></div>
													</div>
												</div>
											</aside>
											<!-- Shop-Filter end -->
										</div>
									</div>	
									<!-- Price end -->
									<!-- Size start -->
									<div class="dropdown floatleft">
										<button class="option-btn">
										Size
										</button>
										<div class="dropdown-menu dropdown-width" >
											<!-- Widget-Size start -->
											<aside class="widget widget-size">
												<div class="widget-title">
													<h4>Size</h4>
												</div>
												<div class="widget-info size-filter clearfix">
													<ul>
														<li><a href="#">M</a></li>
														<li><a class="active" href="#">S</a></li>
														<li><a href="#">L</a></li>
														<li><a href="#">SL</a></li>
														<li><a href="#">XL</a></li>
													</ul>
												</div>
											</aside>
											<!-- Widget-Size end -->
										</div>
									</div>	
									<!-- Size end -->								
									<div class="showing text-end">
										<p class="mb-0 d-none d-md-block">Showing 01-09 of 17 Results</p>
									</div>
								</div>						
							</div>	
							<div class="col-md-12">
								<div class="row">
									<!-- Single-product start -->
									<div class="col-xl-3 col-md-4">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="assets/img/product/11.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-xl-3 col-md-4">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="assets/img/product/2.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-xl-3 col-md-4">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="assets/img/product/1.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
							</div>
							<div class="col-md-12">
								<!-- Pagination start -->
								<div class="shop-pagination  text-center">
									<div class="pagination">
										<ul>
											<li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
											<li><a href="#">01</a></li>
											<li><a class="active" href="#">02</a></li>
											<li><a href="#">03</a></li>
											<li><a href="#">04</a></li>
											<li><a href="#">05</a></li>
											<li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- Pagination end -->
							</div>
						</div>
					</div>
					<!-- Shop-Content End -->
				</div>
			</div>
			<!-- PRODUCT-AREA END -->
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

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:44 GMT -->
</html>
