<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login / Registration || Hurst</title>
    <meta name="description"
        content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
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
                            <div class="customer-login text-left form-control">
                                <h4 class="title-1 title-border text-uppercase mb-30">KHÁCH HÀNG ĐÃ ĐĂNG KÝ</h4>
                                <p class="text-gray">Nếu bạn có tài khoản của chúng tôi, vui lòng đăng nhập!</p>
                                <input type="text" placeholder="Email..." name="email">
                                <input type="password" placeholder="Mật khẩu">
                                <p><a href="#" class="text-gray">Quên mật khẩu?</a></p>
                                <button type="submit" data-text="login" class="button-one submit-button mt-15">Đăng
                                    nhập</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="customer-login text-left form-control	">
                                <h4 class="title-1 title-border text-uppercase mb-30">KHÁCH HÀNG MỚI</h4>
                                <p class="text-gray">Nếu bạn chưa có tài khoản, vui lòng đăng ký!</p>
                                <input type="text" placeholder="Tên đăng nhập..." name="name">
                                <input type="text" placeholder="Email..." name="email">
                                <input type="text" placeholder="Địa chỉ..." name="dia_chi">
                                <input type="text" placeholder="Số điện thoại..." name="so_dien_thoai">
                                <input type="password" placeholder="Mật khẩu...">
                                <input type="password" placeholder="Nhập lại mật khẩu...">
                                <p class="mb-0">
                                    <input type="checkbox" id="newsletter" name="newsletter" checked>
                                    <label for="newsletter"><span>Đăng ký nhận bản tin của chúng tôi!</span></label>
                                </p>
                                <button type="submit" data-text="regiter" class="button-one submit-button mt-15">Đăng
                                    ký</button>
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
    <?php
			require_once 'components/linkjs.php';
		?>
</body>

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->

</html>