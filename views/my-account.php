<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>My Account || Hurst</title>
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
									<h2>TÀI KHOẢN CỦA TÔI</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.html">TRANG CHỦ</a></li>
										<li>TÀI KHOẢN CỦA TÔI</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADING-BANNER END -->
			<!-- MY-ACCOUNT-AREA START -->
			<div class="my-account-area  pt-80 pb-80">
				<div class="container">	
					<div class="my-account">
						<div class="row">
							<div class="col-md-6">
								<div class="panel-group" id="accordion">
									<div class="panel mb-2">
										<div class="my-account-menu" >
											<a  data-bs-toggle="collapse" href="#my-info">
											My Personal Information
											</a>
										</div>
										<div id="my-info" class="panel-collapse collapse show" data-bs-parent="#accordion">
											<div class="panel-body">
												<div class="billing-details shop-cart-table">
													<input type="text" placeholder="Your name here...">
													<input type="text" placeholder="Email address here...">
													<input type="text" placeholder="Phone here...">
													<input type="text" placeholder="Company neme here...">
													<select class="custom-select mb-15">
														<option>Contry</option>
														<option>Bangladesh</option>
														<option>United States</option>
														<option>united Kingdom</option>
														<option>Australia</option>
														<option>Canada</option>
													</select>
													<select class="custom-select mb-15">
														<option>State</option>
														<option>Dhaka</option>
														<option>New York</option>
														<option>London</option>
														<option>Melbourne</option>
														<option>Ottawa</option>
													</select>
													<select class="custom-select mb-15">
														<option>Town / City</option>
														<option>Dhaka</option>
														<option>New York</option>
														<option>London</option>
														<option>Melbourne</option>
														<option>Ottawa</option>
													</select>
													<textarea placeholder="Your address here..." class="custom-textarea"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="panel mb-2">
										<div class="my-account-menu">
											<a class="collapsed"  data-bs-toggle="collapse"  href="#my-billing">
											My Billing address
											</a>
										</div>
										<div id="my-billing" class="panel-collapse collapse" data-bs-parent="#accordion">
											<div class="panel-body">
												<div class="billing-details shop-cart-table">
													<input type="text" placeholder="Your name here...">
													<input type="text" placeholder="Email address here...">
													<input type="text" placeholder="Phone here...">
													<input type="text" placeholder="Company neme here...">
													<select class="custom-select mb-15">
														<option>Contry</option>
														<option>Bangladesh</option>
														<option>United States</option>
														<option>united Kingdom</option>
														<option>Australia</option>
														<option>Canada</option>
													</select>
													<select class="custom-select mb-15">
														<option>State</option>
														<option>Dhaka</option>
														<option>New York</option>
														<option>London</option>
														<option>Melbourne</option>
														<option>Ottawa</option>
													</select>
													<select class="custom-select mb-15">
														<option>Town / City</option>
														<option>Dhaka</option>
														<option>New York</option>
														<option>London</option>
														<option>Melbourne</option>
														<option>Ottawa</option>
													</select>
													<textarea placeholder="Your address here..." class="custom-textarea"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="panel mb-2 mb-md-0">
										<div class="my-account-menu">
											<a class="collapsed"  data-bs-toggle="collapse"  href="#my-order">
											Order history and details
											</a>
										</div>
										<div id="my-order" class="panel-collapse collapse" data-bs-parent="#accordion">
											<div class="panel-body">
												<div class="our-order payment-details shop-cart-table">
													<table>
														<thead>
															<tr>
																<th><strong>Product</strong></th>
																<th class="text-end"><strong>Total</strong></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Dummy Product Name  x 2</td>
																<td class="text-end">$86.00</td>
															</tr>
															<tr>
																<td>Dummy Product Name  x 1</td>
																<td class="text-end">$69.00</td>
															</tr>
															<tr>
																<td>Cart Subtotal</td>
																<td class="text-end">$155.00</td>
															</tr>
															<tr>
																<td>Shipping and Handing</td>
																<td class="text-end">$15.00</td>
															</tr>
															<tr>
																<td>Vat</td>
																<td class="text-end">$00.00</td>
															</tr>
															<tr>
																<td>Order Total</td>
																<td class="text-end">$170.00</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>					
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel-group" id="accordion-2">
									<div class="panel mb-2">
										<div class="my-account-menu" >
											<a  data-bs-toggle="collapse" href="#my-payment-method">
											My Payment Method
											</a>
										</div>
										<div id="my-payment-method" class="panel-collapse collapse show" data-bs-parent="#accordion-2">
											<div class="panel-body">
												<div class="payment-method  shop-cart-table">
													<div class="payment-accordion">
														<!-- Accordion start  -->
														<h3 class="payment-accordion-toggle active">Direct Bank Transfer</h3>
														<div class="payment-content default">
															<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
														</div> 
														<!-- Accordion end -->
														<!-- Accordion start -->
														<h3 class="payment-accordion-toggle">Cheque Payment</h3>
														<div class="payment-content">
															<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
														</div>
														<!-- Accordion end -->
														<!-- Accordion start -->
														<h3 class="payment-accordion-toggle">PayPal</h3>
														<div class="payment-content">
															<p>Pay via PayPal; you can pay with your credit card if you don�t have a PayPal account.</p>
															<a href="#"><img alt="" src="img/payment/1.png"></a>
															<a href="#"><img alt="" src="img/payment/2.png"></a>
															<a href="#"><img alt="" src="img/payment/3.png"></a>
															<a href="#"><img alt="" src="img/payment/4.png"></a>
														</div>
														<!-- Accordion end --> 
														<button type="submit" data-text="place order" class="button-one submit-button mt-15">place order</button>			
													</div>															
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="my-account-menu my-account-menu-2" >
											<a  href="wishlist.html" >
											My Wishlist
											</a>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- MY-ACCOUNT-CART-AREA END -->
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

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->
</html>
