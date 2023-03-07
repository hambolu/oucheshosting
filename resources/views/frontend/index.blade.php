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
						<div class="logo"><a href="/">
                        <img src="frontend/images/logo.png" width="180px" alt="" srcset="">
                        </a></div>
						<nav class="main_nav ml-auto mr-auto">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li class="active"><a href="/">Home</a></li>
								<li><a href="/about">About us</a></li>
								<li><a href="/services">Services</a></li>
								<li><a href="/blog">News</a></li>
								<li><a href="/contact">Contact</a></li>
							</ul>
						</nav>
						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								<div class="login log_reg_text"><a href="/login">Login</a></div>
								<div class="register log_reg_text"><a href="/register">Register</a></div>
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
				<div class="login log_reg_text"><a href="/login">Login</a></div>
				<div class="register log_reg_text"><a href="/register">Register</a></div>
			</div>
		</div>
		<nav class="menu_nav">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/about">About us</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/blog">News</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background"></div>
		<div class="background_image background_city" style="background-image:url(frontend/images/city.png)"></div>
		<div class="cloud cloud_1"><img src="frontend/images/cloud.png" alt=""></div>
		<div class="cloud cloud_2"><img src="frontend/images/cloud.png" alt=""></div>
		<div class="cloud cloud_3"><img src="frontend/images/cloud_full.png" alt=""></div>
		<div class="cloud cloud_4"><img src="frontend/images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">The Best Hosting Offers</div>
							<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="domain_search_form_container">
							<form action="{{ route('search') }}" id="domain_search_form" class="domain_search_form d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="d-flex flex-row align-items-center justify-content-start">
									<input type="text" name="domain_name" class="domain_search_input" placeholder="yourdomain" required="required">

                                    <button class="domain_search_button d-flex flex-row align-items-center justify-content-center"><img src="frontend/images/search.png" alt="">Search</button>
								</div>
                               
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col magic_fade_in">
					<div class="section_title text-center"><h2>How to get started</h2></div>
				</div>
			</div>
			<div class="row intro_row">
				<div class="intro_dots magic_fade_in" style="background-image:url(images/dots.png)"></div>

				<!-- Intro Item -->
				<div class="col-lg-4 intro_col magic_fade_in">
					<div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
							<div class="intro_icon"><img src="frontend/images/icon_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div class="intro_item_content">
							<div class="intro_item_title">Buy your Domain</div>
							<div class="intro_item_text">
								<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->
				<div class="col-lg-4 intro_col magic_fade_in">
					<div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
							<div class="intro_icon"><img src="frontend/images/icon_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div class="intro_item_content">
							<div class="intro_item_title">Get your Hosting</div>
							<div class="intro_item_text">
								<p>Ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->
				<div class="col-lg-4 intro_col magic_fade_in">
					<div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
							<div class="intro_icon"><img src="frontend/images/icon_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div class="intro_item_content">
							<div class="intro_item_title">Set your Website</div>
							<div class="intro_item_text">
								<p>Suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col text-center">
					<div class="intro_button text-center trans_200 ml-auto mr-auto"><a href="#">Start from $9.90/month</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="frontend/images/services.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col magic_fade_in">
					<div class="section_title text-center"><h2>Our Services</h2></div>
				</div>
			</div>
			<div class="row services_row">

				<!-- Service -->
				<div class="col-lg-4 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="frontend/images/icon_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>Cloud Backup</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="frontend/images/icon_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>Data Migration</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="frontend/images/icon_6.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>VPS Hosting</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Pricing -->

	<div class="pricing">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="pricing_container d-flex flex-row align-items-start justify-content-start flex-wrap">

						<!-- Pricing Item -->
						<div class="pricing_item text-center magic_fade_in">
							<div class="pricing_title">Starter Pack</div>
							<div class="pricing_content">
								<div class="package_price">$ 9.90<span>/Month</span></div>
								<div class="pricing_list">
									<ul>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>50 GB Disk Space</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>1 sub-domain</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>5 E-mail Accounts</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/x.png" alt="">
											<span>24/7 Support</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/x.png" alt="">
											<span>Control Panel</span>
										</li>
									</ul>
								</div>
								<div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
							</div>
						</div>

						<!-- Pricing Item -->
						<div class="pricing_item text-center magic_fade_in">
							<div class="pricing_title">Basic Pack</div>
							<div class="pricing_content">
								<div class="package_price">$ 19.90<span>/Month</span></div>
								<div class="pricing_list">
									<ul>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>70 GB Disk Space</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>3 sub-domain</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>7 E-mail Accounts</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/x.png" alt="">
											<span>24/7 Support</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/x.png" alt="">
											<span>Control Panel</span>
										</li>
									</ul>
								</div>
								<div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
							</div>
						</div>

						<!-- Pricing Item -->
						<div class="pricing_item text-center magic_fade_in">
							<div class="pricing_title">Premium Pack</div>
							<div class="pricing_content">
								<div class="package_price">$ 39.90<span>/Month</span></div>
								<div class="pricing_list">
									<ul>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>90 GB Disk Space</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>5 sub-domain</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>10 E-mail Accounts</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>24/7 Support</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/x.png" alt="">
											<span>Control Panel</span>
										</li>
									</ul>
								</div>
								<div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
							</div>
						</div>

						<!-- Pricing Item -->
						<div class="pricing_item text-center magic_fade_in">
							<div class="pricing_title">Pro Pack</div>
							<div class="pricing_content">
								<div class="package_price">$ 59.90<span>/Month</span></div>
								<div class="pricing_list">
									<ul>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>120 GB Disk Space</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>7 sub-domain</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>15 E-mail Accounts</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>24/7 Support</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="frontend/images/ok.png" alt="">
											<span>Control Panel</span>
										</li>
									</ul>
								</div>
								<div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="choice">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Choice Image -->
				<div class="col-lg-6 choice_col magic_fade_in">
					<div class="choice_image"><img src="frontend/images/choice.png" alt=""></div>
				</div>

				<!-- Choice Content -->
				<div class="col-lg-6 choice_col magic_fade_in">
					<div class="choice_content">
						<div class="section_title magic_fade_in"><h2>Why Choose us?</h2></div>
						<div class="choice_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
						</div>
						<div class="choice_list">
							<ul class="d-flex flex-row align-items-start justify-content-between">
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="frontend/images/icon_7.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title">Marketing</div>
								</li>
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="frontend/images/icon_8.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title">Stats</div>
								</li>
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="frontend/images/icon_9.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title">Servers</div>
								</li>
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="frontend/images/icon_10.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title">Quality</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-between justify-content-center magic_fade_in">
						<div class="cta_title">Start building your website now!</div>
						<div class="cta_price"><span>from</span>$9.90<span>/month</span></div>
						<div class="cta_button"><a href="#">Start Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->


@include('frontend.layouts.footerjs')
</body>
</html>
