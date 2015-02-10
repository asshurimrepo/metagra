<?php
	/*
	Template Name: Offices Page
	Author: Asshurim Larita @ iBoostme..
	*/

	get_header();
	get_template_part( 'breadcrumbs' );
?>
<div class="container">
	<div class="box">
		<h2 class="no-background void-top"><span>Office in <b>Ukraine</b></span></h2>

		<section class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2723.4205444988474!2d32.0404875!3d46.9534267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c5cbbac7a49b05%3A0xcb7dc46a404802a0!2sMyru+Ave%2C+4%2C+Mykolaiv%2C+Mykolaivs&#39;ka+oblast%2C+Ukraine!5e0!3m2!1sen!2sph!4v1420962639106" width="100%" height="250" frameborder="0" style="border:0"></iframe></iframe>
		</section>

		<div class="space-md"></div>

		<div class="info">
			<div class="row">

				<div class="col-md-4">
					<div class="col-md-3 text-center"><img src="<?=asset('images/tracker-logo.png')?>" alt="Street Address"/></div>
					<div class="col-md-9">
						<h4>Street Address</h4>
						<p>Office 1402, Platinium Tower, JLT,
							Dubai, UAE</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 text-center"><img src="<?=asset('images/phone-icon.png')?>" alt="Phone"/></div>
					<div class="col-md-9">
						<h4>Phone</h4>
						<p>Tel: +971 4 369 9787</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 text-center"><img src="<?=asset('images/email-icon.png')?>" alt="Email"/></div>
					<div class="col-md-9">
						<h4>Email</h4>
						<p>info@metagra-dmcc.ae</p>
					</div>
				</div>
			</div>
		</div>

		<div id="contact">
			<div class="spc-md"></div>


			<div class="row">

				<div class="col-md-8 form">

					<?=do_shortcode('[contact-form-7 id="111" title="Contact Form Us"]')?>

				</div>

				<div class="col-md-4 text-right">

					<p>

					<h3><i class="fa fa-envelope"></i> Email us</h3>
					<span class="italic lead">info@metagra.ae</span>

					<h3><i class="fa fa-phone"></i> Call us</h3>
					<span class="italic lead">Tel: +38 098 79 79 213</span><br>
					<span class="italic lead">Fax: +38 0512 765 764</span>

					<h3><i class="fa fa-angle-double-down"></i> Address</h3>
					<span class="italic lead">4a Mira prospekt,</span>
					<span class="italic lead">Mykolayiv,</span>
					<span class="italic lead">54034, Ukraine</span>

					</p>
				</div>
			</div>

			<div class="spc-lg"></div>

		</div>
	</div>
</div>




<? get_footer();