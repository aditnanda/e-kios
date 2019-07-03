<?php $nama = $this->session->userdata('nama');
$level = $this->session->userdata('level');
$email = $this->session->userdata('email');

?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>E-Kios | Elektronik Kios</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="E-Kios - Online Shop">
		<meta name="author" content="Aditya Nanda">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/skin-shop-2.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demos/demo-shop-2.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 106, 'stickySetTop': '0', 'stickyChangeLogo': false}" class=" transparent header-full-width">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="<?php echo base_url(); ?>">
										<img alt="E-Kios" width="111" height="50" src="<?php echo base_url(); ?>assets/img/demos/shop/logo-shop-white-small.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="row">
									<div class="header-nav-main">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
												<li class="dropdown active">
													<a class="dropdown-toggle" href="#">
														<?php
														if(!empty($nama)){
															echo $nama;
														}else{
															?>
															My Account
														<?php } ?>
													</a>
													<ul class="dropdown-menu">
														<?php
														if($level == 'admin'){
															?>
														<li class="dropdown-submenu">

															<a href="#">Panel Barang</a>
															<ul class="dropdown-menu">
																<li><a href="<?php echo base_url(); ?>barang/data" >Data Barang</a></li>
																<li><a href="<?php echo base_url(); ?>barang/input" >Input Barang</a></li>
															</ul>
														</li>
														<li><a href="<?php echo base_url(); ?>home/laporan" >Lihat Laporan</a></li>
														<?php } ?>
														<?php
														if(!empty($nama)){
															?>
															<li><a href="<?php echo base_url(); ?>home/logout">Log out</a></li>
															<?php
														}else{
															?>
															<li><a href="<?php echo base_url(); ?>home/login">Log in</a></li>
															<li><a href="<?php echo base_url(); ?>home/register">Register</a></li>
														<?php } ?>

													</ul>
												</li>
											</ul>
										</nav>
									</div>



									<div class="dropdowns-container">
										<div class="header-dropdown cur-dropdown">
											<a href="#">Rupiah <i class="fa fa-caret-down"></i></a>

											<ul class="header-dropdownmenu">
												<li><a href="#">Rupiah</a></li>
												<li><a href="#">USD</a></li>
											</ul>
										</div>

										<div class="header-dropdown lang-dropdown">
											<a href="#">Indonesia <i class="fa fa-caret-down"></i></a>

											<ul class="header-dropdownmenu">
												<li><a href="#">Indonesia</a></li>
												<li><a href="#">English</a></li>
											</ul>
										</div>

										<div class="cart-dropdown">
											<a href="#" class="cart-dropdown-icon">
												<i class="minicart-icon"></i>
												<span class="cart-info">
													<span class="cart-qty"><?php echo count($cart); ?></span>
													<span class="cart-text">item(s)</span>
												</span>
											</a>

											<div class="cart-dropdownmenu right">
												<div class="dropdownmenu-wrapper">
													<?php
		                        $total = 0;
		                        if(count($cart) > 0){
		                        foreach($cart as $item){
		                          $total += $item['subtotal'];
		                      ?>
													<div class="cart-products">
														<div class="product product-sm">
															<a href="<?php echo site_url('keranjang/hapus/'.$item['rowid']); ?>" class="btn-remove" title="Remove Product">
																<i class="fa fa-times"></i>
															</a>
															<figure class="product-image-area">
																<a href="#" title="Product Name" class="product-image">
																	<img class="portrait" src="<?php echo base_url('assets/barang/'.$item['gambar']) ?>" alt="Product Name">
																</a>
															</figure>
															<div class="product-details-area">
																<h2 class="product-name"><a href="demo-shop-2-product-details.html" title="Product Name"><?php echo $item['name']; ?></a></h2>

																<div class="cart-qty-price">
																	<?php echo $item['qty']; ?> X
																	<span class="product-price">Rp. <?php echo number_format($item['price'],0,',','.'); ?>,00</span>
																</div>

															</div>
														</div>

													</div>
												<?php }}else{echo'<tr><td colspan="6" style="align:center;"><br><h3><center>Keranjang Belanja Kosong.</center></h3></td></tr>'; } ?>
													<div class="cart-totals">
														Total: <span>Rp. <?php echo number_format($total,0,',','.'); ?>,00</span>
													</div>

													<div class="cart-actions">
														<a href="<?php echo base_url(); ?>keranjang" class="btn btn-primary">View Cart</a>
														<a href="<?php echo base_url(); ?>keranjang/checkout" class="btn btn-primary">Checkout</a>
													</div>
												</div>
											</div>
										</div>
									</div>

									<a href="#" class="mmenu-toggle-btn" title="Toggle menu">
										<i class="fa fa-bars"></i>
									</a>

									<div class="header-search">
										<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
										<form action="#" method="get">
											<div class="header-search-wrapper">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>

												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</div>
										</form>
									</div>

									<div class="top-menu-area">
										<a href="#">Links <i class="fa fa-caret-down"></i></a>
										<ul class="top-menu">

											<li><a href="#">My Wishlist</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="mobile-nav">
				<div class="mobile-nav-wrapper">
					<ul class="mobile-side-menu">
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">
								<?php
										if(!empty($nama)){
											echo $nama;
										}else{
											?>
											My Account
										<?php } ?>
								</a>
							<ul>
								<?php
								if($level == 'admin'){
									?>
								<li>

									<a href="#">Panel Barang</a>
									<span class="mmenu-toggle"></span>
									<ul>
										<li><a href="<?php echo base_url(); ?>barang/data" >Data Barang</a></li>
										<li><a href="<?php echo base_url(); ?>barang/input" >Input Barang</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url(); ?>home/laporan" >Lihat Laporan</a></li>
								<?php } ?>
								<?php
								if(!empty($nama)){
									?>
									<li><a href="<?php echo base_url(); ?>home/logout">Log out</a></li>
									<?php
								}else{
									?>
									<li><a href="<?php echo base_url(); ?>home/login">Log in</a></li>
									<li><a href="<?php echo base_url(); ?>home/register">Register</a></li>
								<?php } ?>
							</ul>
						</li>
						<li>
							<a href="demo-shop-2-about-us.html">About Us</a>
						</li>

						<li>
							<a href="demo-shop-2-contact-us.html">Contact Us</a>
						</li>

					</ul>
				</div>
			</div>

			<div id="mobile-menu-overlay"></div>

			<div role="main" class="main">

      <?php $this->load->view($content); ?>
      </div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h4>Akun Saya</h4>
							<ul class="links">
								<li>
									<i class="fa fa-caret-right"></i>
									<a href="demo-shop-2-about-us.html">About Us</a>
								</li>
								<li>
									<i class="fa fa-caret-right"></i>
									<a href="demo-shop-2-contact-us.html">Contact Us</a>
								</li>
								<li>
									<i class="fa fa-caret-right"></i>
									<a href="demo-shop-2-myaccount.html">Akun Saya</a>
								</li>
								<li>
									<i class="fa fa-caret-right"></i>
									<a href="#">Riwayat Pembelian</a>
								</li>

							</ul>
						</div>
						<div class="col-md-3">
							<div class="contact-details">
								<h4>Informasi Kontak</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Alamat:</strong><br> Candi, Sidoarjo</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Telepon:</strong><br> +6282331429578</p></li>
									<li><p><i class="fa fa-envelope-o"></i> <strong>Email:</strong><br> <a href="mailto:adityananda@nand-project.com">adityananda@nand-project.com</a></p></li>
									<li><p><i class="fa fa-clock-o"></i> <strong>Jam Kerja :</strong><br> Mon - Sun / 9:00AM - 8:00PM</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Fitur Utama</h4>
							<ul class="features">
								<li>
									<i class="fa fa-check"></i>
									<a href="#">Super Fast Template</a>
								</li>
								<li>
									<i class="fa fa-check"></i>
									<a href="#">Harga Lebih Murah</a>
								</li>
								<li>
									<i class="fa fa-check"></i>
									<a href="#">Layout Web Yang Modern</a>
								</li>
								<li>
									<i class="fa fa-check"></i>
									<a href="#">Online Shop Yang Powerfull</a>
								</li>
								<li>
									<i class="fa fa-check"></i>
									<a href="#">Mobile &amp; Retina Optimized</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Jadilah Yang Pertama</h4>
								<p class="newsletter-info">Dapatkan semua informasi terbaru tentang Penjualan, dan Penawaran. <br>Daftar untuk berlangganan info terbaru.</p>

								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger hidden" id="newsletterError"></div>


								<p>Masukkan alamat email anda:</p>
								<form id="newsletterForm" action="<?php echo base_url(); ?>assets/php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="submit">Submit</button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<a href="index.html" class="logo">
							<img alt="Porto Website Template" class="img-responsive" src="<?php echo base_url(); ?>assets/img/demos/shop/logo-footer-black.png">
						</a>

						<img alt="Payments" src="<?php echo base_url(); ?>assets/img/demos/shop/payments.png" class="footer-payment">
						<p class="copyright-text">Copyright © 2018 Nand Project. All Rights Reserved.</p>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/common/common.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/js/theme.js"></script>


		<script src="<?php echo base_url(); ?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php echo base_url(); ?>assets/js/views/view.contact.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/elevatezoom/jquery.elevatezoom.js"></script>

		<!-- Demo -->
		<script src="<?php echo base_url(); ?>assets/js/demos/demo-shop-2.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/js/theme.init.js"></script>

		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581b726c069c6315"></script>





		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>
