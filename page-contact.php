<?php
	/*
	Template Name: Contact Us Page
	Author: Asshurim Larita @ iBoostme..
	*/

	get_header();
	get_template_part( 'breadcrumbs' );
?>

	<div class="container">
		<div class="box">
			<h2 class="no-background void-top full-width"><span><b>Contact</b> Us</span></h2>

			<section class="map">
				<iframe frameborder="0" src="https://mapsengine.google.com/map/u/0/embed?mid=zB5T74wOKau0.kz4bPhrycyBk" width="100%" height="250"></iframe>
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

			<div class="space-md"></div>

			<div id="contact">

				<h2 class="single-line void-top full-width text-left"><span><b>Contact</b> form:</span></h2>

				<div class="spc-md"></div>

				<div class="row">


					<div class="col-md-7 form">

						<?=do_shortcode('[contact-form-7 id="111" title="Contact Form Us"]')?>

					</div>

					<div class="col-md-5 text-right">
						<img src="<?=asset('images/building.jpg')?>" alt="Metagra Trading Contact Form" style="padding-right: 40px;"/>
					</div>

				</div>

				<div class="spc-lg"></div>

			</div>
		</div>
	</div>


<? get_footer();