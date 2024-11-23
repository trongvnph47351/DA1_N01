<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Shopping Cart || Hurst</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		
		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<?php
			require_once 'components/linkcss.php';
		?>
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
									<h2>GIỎ HÀNG</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.html">TRANG CHỦ</a></li>
										<li>GIỎ HÀNG</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADING-BANNER END -->
			<!-- SHOPPING-CART-AREA START -->
			<div class="shopping-cart-area  pt-80 pb-80">
				<div class="container">	
					<div class="row">
						<div class="col-lg-12">
							<div class="shopping-cart">
								<!-- Nav tabs -->
								<?php
									require_once 'components/navtab.php';
								?>
								<!-- Tab panes -->
								<div class="tab-content">
									<!-- shopping-cart start -->
									<div class="tab-pane active" id="shopping-cart">
										<form action="#">
											<div class="shop-cart-table">
												<div class="table-content table-responsive">
													<table>
														<thead>
															<tr>
																<th class="product-thumbnail">Tên sản phẩm</th>
																<th class="product-price">Giá</th>
																<th class="product-quantity">Số lượng</th>
																<th class="product-subtotal">Tổng</th>
																<th class="product-remove">Loại bỏ</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="product-thumbnail  text-left">
																	<!-- Single-product start -->
																	<div class="single-product">
																		<div class="product-img">
																			<a href="single-product.html"><img src="img/product/2.jpg" alt="" /></a>
																		</div>
																		<div class="product-info">
																			<h4 class="post-title"><a class="text-light-black" href="#">Tên sản phẩm</a></h4>
																			<p class="mb-0">Size :     SL</p>
																		</div>
																	</div>
																	<!-- Single-product end -->												
																</td>
																<td class="product-price">$56.00</td>
																<td class="product-quantity">
																	<div class="cart-plus-minus">
																		<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
																	</div>
																</td>
																<td class="product-subtotal">$112.00</td>
																<td class="product-remove">
																	<a href="#"><i class="zmdi zmdi-close"></i></a>
																</td>
															</tr>
															<tr>
																<td class="product-thumbnail  text-left">
																	<!-- Single-product start -->
																	<div class="single-product">
																		<div class="product-img">
																			<a href="single-product.html"><img src="img/product/6.jpg" alt="" /></a>
																		</div>
																		<div class="product-info">
																			<h4 class="post-title"><a class="text-light-black" href="#">dummy product name</a></h4>
																			<p class="mb-0">Size :     SL</p>
																		</div>
																	</div>
																	<!-- Single-product end -->												
																</td>
																<td class="product-price">$56.00</td>
																<td class="product-quantity">
																	<div class="cart-plus-minus">
																		<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
																	</div>
																</td>
																<td class="product-subtotal">$112.00</td>
																<td class="product-remove">
																	<a href="#"><i class="zmdi zmdi-close"></i></a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="customer-login mt-30">
														<h4 class="title-1 title-border text-uppercase">Mã giảm giá</h4>
														<p class="text-gray">Nhập vào mã giảm giá của bạn (nếu bạn có)</p>
														<input type="text" placeholder="Enter your code here.">
														<button type="submit" data-text="apply coupon" class="button-one submit-button mt-15">Nhập Mã</button>
													</div>
												</div>
												<div class="col-md-6">
													<div class="customer-login payment-details mt-30">
														<h4 class="title-1 title-border text-uppercase">Chi Tiết Hóa Đơn</h4>
														<table>
															<tbody>
																<tr>
																	<td class="text-left">Cart Subtotal</td>
																	<td class="text-end">$155.00</td>
																</tr>
																<tr>
																	<td class="text-left">Cart Subtotal</td>
																	<td class="text-end">$15.00</td>
																</tr>
																<tr>
																	<td class="text-left">Vat</td>
																	<td class="text-end">$00.00</td>
																</tr>
																<tr>
																	<td class="text-left">Order Total</td>
																	<td class="text-end">$170.00</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</form>		
									</div>
									<!-- shopping-cart end -->
								</div>
							</div>
						</div>
					</div>
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
		<?php
			require_once 'components/linkjs.php';
		?>
	</body>

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->
</html>
