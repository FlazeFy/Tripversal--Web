<style>
	.deneb_footer .widget_wrapper {
		background-repeat: no-repeat;
		background-size: cover;
		padding-top: 50px;
		padding-bottom: 50px;
		border-radius:40px 40px 0px 0px;
		background:#4169e1;
	}
	@media (max-width: 767px) {
		.deneb_footer .widget_wrapper .widget {
			margin-bottom: 40px;
		}
	}
	.deneb_footer .widget_wrapper .widget .widget_title {
		margin-bottom: 30px;
		color:white;
	}
	.deneb_footer .widget_wrapper .widget .widget_title h4 {
		font-weight: bold;
	}
	.deneb_footer .widget_wrapper .widget .widget_title h4:after {
		content: "";
		display: block;
		max-width: 38px;
		height: 2px;
		margin-top: 5px;
	}
	.deneb_footer .widget_wrapper .widegt_about p {
		margin-bottom: 20px;
	}
	.deneb_footer .widget_wrapper .widget_link ul li {
		margin-bottom: 5px;
	}
	.deneb_footer .widget_wrapper .widget_link ul li a {
		text-transform: capitalize;
		color: white;
	}
	.deneb_footer .widget_wrapper .widget_link ul li a:hover,
	.deneb_footer .widget_wrapper .widget_link ul li a:focus {
		color: #4169e1;
	}
	.deneb_footer .widget_wrapper .widget_contact .contact_info .single_info {
		max-width: 250px;
		display: flex;
		flex-wrap: wrap;
		margin-bottom: 20px;
	}
	.deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .icon {
		font-size: 12px;
		color: white;
		margin-right: 10px;
	}
	.deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p {
		color: white;
	}
	.deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p span {
		display: block;
	}
	.deneb_cta .cta_wrapper {
		padding: 20px;
		max-width: 970px;
		border-radius: 15px;
		margin: auto;
		margin-bottom: -185px;
		position: relative;
		background:#414141;
		z-index: 1;
	}
	.deneb_cta .cta_wrapper:after {
		background-position: bottom;
		width: 100%;
		height: 100%;
		position: absolute;
		bottom: 0;
		left: 0;
		z-index: -1;
	}
	.deneb_cta .cta_wrapper .cta_content h3 {
		color: #fff;
		font-weight: bold;
	}
	@media (max-width: 767px) {
		.deneb_cta .cta_wrapper .cta_content h3 {
			font-size: 24px;
		}
	}
	.deneb_cta .cta_wrapper .cta_content p {
		color: #fff;
	}
</style>

<section class="deneb_cta mt-5">
	<div class="container">
		<div class="cta_wrapper">
			<div class="cta_content">
				<div class="row">
					<div class="col-md-4">
						<img src="http://localhost/Tripversal/assets/icon/JoinUs.png" alt='logo'
							style='width:100%; margin-top:-100px;'>
					</div>
					<div class="col-md-8">
						<h3>Want to be a part of our driver or guide?</h3>
						<p>Curabitur libero eros, efficitur sit amet sodales tincidunt, aliquet et leo sed ut nibh feugiat, auctor enim quis.</p>
						<a href="#" class="btn btn-primary">Join Us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<footer class="deneb_footer">
	<div class="widget_wrapper" style="">
		<div class="container">
			<div class="row mt-5">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="widget widegt_about">
						<div class="widget_title">
							<h2>Tripversal</h2>
						</div>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget widget_link">
						<div class="widget_title">
							<h4>Links</h4>
						</div>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget widget_contact">
						<div class="widget_title">
							<h4>Contact Us</h4>
						</div>
						<div class="contact_info">
							<div class="single_info">
								<div class="icon">
									<i class="fas fa-phone-alt text-white"></i>
								</div>
								<div class="info">
									<p>0811 4882 001</p>
								</div>
							</div>
							<div class="single_info">
								<div class="icon">
									<i class="fas fa-envelope text-white"></i>
								</div>
								<div class="info">
									<p>flazen.edu@gmail.com</p>
								</div>
							</div>
							<div class="single_info">
								<div class="icon">
									<i class="fas fa-map-marker-alt text-white"></i>
								</div>
								<div class="info">
									<p>Bandung</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="text-center text-white">Copyright &copy; 2022 All rights reserved.</p>
	</div>
</footer>
