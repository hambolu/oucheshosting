<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.header')
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_400">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<div class="logo"><a href="#">Host<span>Space</span></a></div>
						<nav class="main_nav ml-auto mr-auto">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About us</a></li>
								<li class="active"><a href="services.html">Services</a></li>
								<li><a href="blog.html">News</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								<div class="login log_reg_text"><a href="#">Login</a></div>
								<div class="register log_reg_text"><a href="#">Register</a></div>
							</div>
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="log_reg">
			<div class="log_reg_content d-flex flex-row align-items-center justify-content-end">
				<div class="login log_reg_text"><a href="#">Login</a></div>
				<div class="register log_reg_text"><a href="#">Register</a></div>
			</div>
		</div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="blog.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background"></div>
		<div class="background_image background_city" style="background-image:url(images/city_3.png)"></div>
		<div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_3"><img src="images/cloud_full_2.png" alt=""></div>
		<div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Services</div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="index.html">Home</a></li>
									<li>Services</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Domain Search -->

	<div class="domain_search">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="domain_search_form_container d-flex flex-column align-items-center justify-content-center">
						<form action="#" id="domain_search_form" class="domain_search_form d-flex flex-md-row flex-column align-items-center justify-content-start">
							<div class="d-flex flex-row align-items-center justify-content-start">
								<input type="text" class="domain_search_input" placeholder="yourdomain" required="required">
								<div class="domain_search_dropdown d-flex flex-row align-items-center justify-content-start">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
									<div class="domain_search_selected">.io</div>
									<ul>
										<li>.io</li>
										<li>.com</li>
										<li>.net</li>
									</ul>
								</div>
							</div>
							<button class="domain_search_button d-flex flex-row align-items-center justify-content-center"><img src="images/search.png" alt="">Search</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center magic_fade_in"><h2>Our Services</h2></div>
				</div>
			</div>
			<div class="row services_row">

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="images/icon_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>Cloud Backup</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="images/icon_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>Data Migration</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="images/icon_6.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>VPS Hosting</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="images/icon_12.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>Domain Names</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="images/icon_13.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>Performance</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="images/icon_14.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>Traffic Control</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Tabs -->

	<div class="tabs_section">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/tabs.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap magic_fade_in">
						<div class="tab">hostings</div>
						<div class="tab active">domains</div>
						<div class="tab">cloud computing</div>
						<div class="tab">resellers</div>
						<div class="tab">storing resources</div>
					</div>

					<!-- Panel -->
					<div class="tab_panels magic_fade_in">
						<div class="tab_panel">
							<div class="tab_panel_content d-flex flex-row align-items-start justify-content-start">
								<div class="row">
									<div class="col-lg-5">
										<div class="tab_image_container">
											<div class="tab_image"><img src="images/tabs_image.jpg" alt=""></div>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="tab_content">
											<div class="tab_title">Choose your hosting</div>
											<div class="tab_text">
												<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel active">
							<div class="tab_panel_content d-flex flex-row align-items-start justify-content-start">
								<div class="row">
									<div class="col-lg-5">
										<div class="tab_image_container">
											<div class="tab_image"><img src="images/tabs_image.jpg" alt=""></div>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="tab_content">
											<div class="tab_title">Choose your domain</div>
											<div class="tab_text">
												<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel">
							<div class="tab_panel_content d-flex flex-row align-items-start justify-content-start">
								<div class="row">
									<div class="col-lg-5">
										<div class="tab_image_container">
											<div class="tab_image"><img src="images/tabs_image.jpg" alt=""></div>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="tab_content">
											<div class="tab_title">Cloud Computing</div>
											<div class="tab_text">
												<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel">
							<div class="tab_panel_content d-flex flex-row align-items-start justify-content-start">
								<div class="row">
									<div class="col-lg-5">
										<div class="tab_image_container">
											<div class="tab_image"><img src="images/tabs_image.jpg" alt=""></div>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="tab_content">
											<div class="tab_title">Resellers</div>
											<div class="tab_text">
												<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel">
							<div class="tab_panel_content d-flex flex-row align-items-start justify-content-start">
								<div class="row">
									<div class="col-lg-5">
										<div class="tab_image_container">
											<div class="tab_image"><img src="images/tabs_image.jpg" alt=""></div>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="tab_content">
											<div class="tab_title">Storing Resources</div>
											<div class="tab_text">
												<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Support -->

	<div class="support">
		<div class="background_image support_background"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="support_content magic_fade_in">
						<div class="support_title"><span>24/7</span>Online Support</div>
						<div class="support_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condiment. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="support_price">from <span>$9.90</span> /month</div>
						<div class="button trans_200"><a href="#">Start now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->


@include('frontend.layouts.footerjs')

</body>
</html>
