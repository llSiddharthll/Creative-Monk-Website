<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Laralink">
	<!-- Favicon Icon -->
	<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.png">
	<!-- Site Title -->
	<title>
		Creative Monk
	</title>
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/plugins/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/plugins/slick.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/plugins/lightgallery.min.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/plugins/animate.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/new.css">
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/portfolio.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
		integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" >
	<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
		integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<style type="text/tailwindcss">
		@theme {
		--shadow-custom:  0px 0px 0px rgba(255, 105, 0, 0.1),
	0px 0px 1px rgba(255, 105, 0, 0.2), 0px 0px 1px rgba(255, 105, 0, 0.3),
	0px 0px 3px rgba(255, 105, 0, 0.4), 0px 0px 4px rgba(255, 105, 0, 0.5),
	0px 0px 6px rgba(255, 105, 0, 0.6), 0px 0px 8px rgba(255, 105, 0, 0.7),
	0px 0px 10px rgba(255, 105, 0, 0.8), 0px 0px 13px rgba(255, 105, 0, 0.9),
	0px 0px 16px rgba(255, 105, 0, 1);
	  }
	</style>
	<script>
	    const lightbox = GLightbox({ selector: ".cs-lightbox-link" });
	</script>
</head>

<body>

	<div class="cs-preloader cs-center">
		<div class="cs-preloader_in"></div>
	</div>
	<header class="cs-site_header cs-style1 text-uppercase cs-sticky_header">
		<div class="cs-main_header">
			<div class="container">
				<div class="cs-main_header_in">
					<div class="cs-main_header_left">
						<a class="cs-site_branding" href="<?php echo home_url("/") ?>">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon.png"
								alt="Logo">
						</a>
					</div>
					<div class="cs-main_header_center">
						<div class="cs-nav cs-primary_font cs-medium">
							<ul class="cs-nav_list">
								<li class="">
									<a href="<?php echo esc_url(home_url('/index.php')); ?>">Home</a>
								</li>
								<li>
									<a href="<?php echo esc_url(home_url('/index.php/about')); ?>">About</a>
								</li>
								<li>
									<a href="<?php echo esc_url(home_url('/index.php/portfolio')); ?>">Portfolio</a>
								</li>
								<li>
									<a href="<?php echo esc_url(home_url('/index.php/case-study')); ?>">Case Study</a>
								</li>
								<li class="menu-item-has-children">
									<a>OUR LOCATIONS</a>
									<ul>
										<li class="menu-item-has-children">
											<a href="#">Zirakpur</a>
											<ul class="m-2">
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/social-media-agency-in-zirakpur')); ?>">Social
														Media Agency in
														Zirakpur</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/seo-agency-in-zirakpur')); ?>">SEO
														Agency in Zirakpur</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/pay-per-click-company-in-zirakpur')); ?>">PPC
														Agency in
														Zirakpur</a>
												</li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Mohali</a>
											<ul class="m-2">
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/social-media-agency-in-mohali')); ?>">Social
														Media Agency in
														Mohali</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/seo-agency-in-mohali')); ?>">SEO
														Agency in Mohali</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/pay-per-click-company-in-mohali')); ?>">PPC
														Agency in
														Mohali</a>
												</li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Chandigarh</a>
											<ul class="m-2">
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/social-media-agency-in-chandigarh')); ?>">Social
														Media Agency
														in Chandigarh</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/seo-agency-in-chandigarh')); ?>">SEO
														Agency in Chandigarh</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/pay-per-click-company-in-chandigarh')); ?>">PPC
														Agency in
														Chandigarh</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="<?php echo esc_url(home_url('/index.php/services')); ?>">WHAT WE DO</a>
									<ul style="width: fit-content;">
										<li class="menu-item-has-children">
											<a href="#">Design</a>
											<ul class="m-2">
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/brand-design')); ?>">Brand
														Design</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/packaging-design-company-in-chandigarh')); ?>">Packaging
														Design</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/ui-ux-designing')); ?>">UI/UX
														Design</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/print-designing')); ?>">Print
														Design</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/social-media')); ?>">Social
														Media</a>
												</li>
												<li>
													<a
														href="<?php echo esc_url(home_url('/index.php/graphic-designing')); ?>">Graphic
														Designing</a>
												</li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Code</a>
											<ul class="m-2">
												<li>
													<a href="<?php echo esc_url(home_url('/index.php/laravel-web-development')); ?>">Laravel Website</a>
												</li>
												<li>
													<a href="<?php echo esc_url(home_url('/index.php/php-web-development')); ?>">PHP Web Development</a>
												</li>
												<!-- <li>
													<a href="<?php echo esc_url(home_url('/index.php/custom-web-development')); ?>">Custom Web Development</a>
												</li>
												<li>
													<a href="#">Flutter</a>
												</li> -->
												<li class="menu-item-has-children">
													<a href="#">CMS</a>
													<ul class="m-2">
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/wordpress-development')); ?>">Wordpress</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/wix-development')); ?>">WIX</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/shopify-development')); ?>">Shopify</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Market</a>
											<ul class="m-2">
												<li class="menu-item-has-children">
													<a href="<?php echo esc_url(home_url('/index.php/social-media-marketing')); ?>">Social Media Marketing</a>
													<ul class="m-2">
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/instagram-marketing')); ?>">Instagram Marketing</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/telegram-marketing')); ?>">Telegram Marketing</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/whatsapp-marketing')); ?>">Whatsapp Marketing</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/linked-in-marketing')); ?>">Linked-In Marketing</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/facebook-marketing')); ?>">Facebook Marketing</a>
														</li>
													</ul>
												</li>
												<li class="menu-item-has-children">
													<a href="<?php echo esc_url(home_url('/index.php/paid-ads')); ?>">Paid Ads</a>
													<ul class="m-2">
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/native-ads')); ?>">Native Ads</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/snapchat-ads')); ?>">Snapchat Ads</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/linked-in-ads')); ?>">Linked-In Ads</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/social-media-ads')); ?>">Social Media Ads</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/remarketing')); ?>">ReMarketing</a>
														</li>
														<li>
															<a href="<?php echo esc_url(home_url('/index.php/google-ads')); ?>">Google Ads</a>
														</li>
													</ul>
												</li>
												<li class="">
													<a href="<?php echo esc_url(home_url('/index.php/content-marketing')); ?>">Content Marketing</a>
													
												</li>
												<li class="">
													<a href="<?php echo esc_url(home_url('/index.php/search-engine-optimization')); ?>">Search Engine Optimization</a>
													
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="">
									<a href="<?php echo esc_url(home_url('/index.php/blogs')); ?>">Our Blogs</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="cs-main_header_right">
						<div class="cs-toolbox">
							<span class="cs-icon_btn">
								<span class="cs-icon_btn_in">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="cs-side_header">
		<button class="cs-close"></button>
		<div class="cs-side_header_overlay"></div>
		<div class="cs-side_header_in">
			<div class="cs-side_header_shape"></div>
			<a class="cs-site_branding" href="index.html">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon.png" alt="Logo">
			</a>
			<div class="cs-side_header_box">
				<h2 class="cs-side_header_heading"> Do you have a project in your <br> mind? Keep connect us. </h2>
			</div>
			<div class="cs-side_header_box">
				<h3 class="cs-side_header_title cs-primary_color">Contact Us</h3>
				<ul class="cs-contact_info cs-style1 cs-mp0">
					<li>
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z"
								fill="#FF4A17" />
						</svg>
						<span>+44 454 7800 112</span>
					</li>
					<li>
						<svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z"
								fill="#FF4A17" />
						</svg>
						<span>infotech@arino.com</span>
					</li>
					<li>
						<svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z"
								fill="#FF4A17" />
						</svg>
						<span>50 Wall Street Suite, 44150 <br>Ohio, United States </span>
					</li>
				</ul>
			</div>
			<div class="cs-side_header_box">
				<h3 class="cs-side_header_title cs-primary_color">Subscribe</h3>
				<div class="cs-newsletter cs-style1">
					<form action="#" class="cs-newsletter_form">
						<input type="email" class="cs-newsletter_input" placeholder="example@gmail.com">
						<button class="cs-newsletter_btn">
							<span>Send</span>
						</button>
					</form>
					<div class="cs-newsletter_text"> At vero eos et accusamus et iusto odio as part dignissimos ducimus
						qui blandit. </div>
				</div>
			</div>
			<div class="cs-side_header_box">
				<div class="cs-social_btns cs-style1">
							<a href="https://www.linkedin.com/company/creativemonkindia?originalSubdomain=in" class="cs-center">
								<svg width="15" height="15" viewBox="0 0 15 15" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M4.04799 13.7497H1.45647V5.4043H4.04799V13.7497ZM2.75084 4.2659C1.92215 4.2659 1.25 3.57952 1.25 2.75084C1.25 2.35279 1.40812 1.97105 1.68958 1.68958C1.97105 1.40812 2.35279 1.25 2.75084 1.25C3.14888 1.25 3.53063 1.40812 3.81209 1.68958C4.09355 1.97105 4.25167 2.35279 4.25167 2.75084C4.25167 3.57952 3.57924 4.2659 2.75084 4.2659ZM13.7472 13.7497H11.1613V9.68722C11.1613 8.71903 11.1417 7.4774 9.81389 7.4774C8.46652 7.4774 8.26004 8.5293 8.26004 9.61747V13.7497H5.67132V5.4043H8.15681V6.54269H8.19308C8.53906 5.887 9.38421 5.19503 10.6451 5.19503C13.2679 5.19503 13.75 6.92215 13.75 9.16546V13.7497H13.7472Z"
										fill="white" />
								</svg>
							</a>
							<a href="#" class="cs-center">
								<svg width="13" height="11" viewBox="0 0 13 11" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M11.4651 2.95396C11.4731 3.065 11.4731 3.17606 11.4731 3.2871C11.4731 6.67383 8.89535 10.5761 4.18402 10.5761C2.73255 10.5761 1.38421 10.1557 0.25 9.42608C0.456226 9.44986 0.654494 9.4578 0.868655 9.4578C2.06629 9.4578 3.16879 9.0533 4.04918 8.36326C2.92291 8.33946 1.97906 7.60183 1.65386 6.5866C1.81251 6.61038 1.97112 6.62624 2.1377 6.62624C2.36771 6.62624 2.59774 6.59451 2.81188 6.53901C1.63802 6.30105 0.757595 5.26996 0.757595 4.02472V3.99301C1.09864 4.18336 1.49524 4.30233 1.91558 4.31818C1.22554 3.85814 0.773464 3.07294 0.773464 2.1846C0.773464 1.70872 0.900344 1.27249 1.12244 0.891774C2.38355 2.44635 4.27919 3.46156 6.40481 3.57262C6.36516 3.38226 6.34136 3.184 6.34136 2.9857C6.34136 1.57388 7.4835 0.423828 8.90323 0.423828C9.64086 0.423828 10.3071 0.733156 10.7751 1.23284C11.354 1.1218 11.9093 0.907643 12.401 0.614185C12.2106 1.20906 11.8061 1.70875 11.2748 2.02598C11.7903 1.97049 12.29 1.82769 12.75 1.62942C12.4011 2.13702 11.9648 2.5891 11.4651 2.95396V2.95396Z"
										fill="white" />
								</svg>
							</a>
							<a href="https://www.youtube.com/@creativemonk8259" class="cs-center">
								<svg width="13" height="9" viewBox="0 0 13 9" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12.4888 1.48066C12.345 0.939353 11.9215 0.513038 11.3837 0.368362C10.4089 0.105469 6.5 0.105469 6.5 0.105469C6.5 0.105469 2.59116 0.105469 1.61633 0.368362C1.07853 0.513061 0.65496 0.939353 0.5112 1.48066C0.25 2.4618 0.25 4.50887 0.25 4.50887C0.25 4.50887 0.25 6.55595 0.5112 7.53709C0.65496 8.0784 1.07853 8.48695 1.61633 8.63163C2.59116 8.89452 6.5 8.89452 6.5 8.89452C6.5 8.89452 10.4088 8.89452 11.3837 8.63163C11.9215 8.48695 12.345 8.0784 12.4888 7.53709C12.75 6.55595 12.75 4.50887 12.75 4.50887C12.75 4.50887 12.75 2.4618 12.4888 1.48066V1.48066ZM5.22158 6.36746V2.65029L8.48861 4.50892L5.22158 6.36746V6.36746Z"
										fill="white" />
								</svg>
							</a>
						</div>
			</div>
		</div>
	</div>