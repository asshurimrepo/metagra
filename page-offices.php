<?php
	/*
	Template Name: Offices Page
	Author: Asshurim Larita @ iBoostme..
	*/

	get_header();
	get_template_part( 'breadcrumbs' );
?>

	<h2 class="no-background void-top"><span>Office in <b>Ukraine</b></span></h2>

	<section class="map">
		<iframe frameborder="0" src="https://mapsengine.google.com/map/u/0/embed?mid=zB5T74wOKau0.kz4bPhrycyBk" width="100%" height="480"></iframe>
	</section>

	<div class="space-md"></div>

	<div id="contact">
		<div class="spc-md"></div>
		<div class="container">

			<div class="col-md-8 form">

				<?=do_shortcode('[contact-form-7 id="111" title="Contact Form Us"]')?>

			</div>

			<div class="col-md-4 text-right">

				<p>

				<h3><i class="fa fa-envelope"></i> Email us</h3>
				<span class="italic lead">info@metagra.ae</span>

				<h3><i class="fa fa-phone"></i> Call us</h3>
				<span class="italic lead">Tel: +38 098 79 79 213</span>
				<span class="italic lead">Fax: +38 0512 765 764</span>

				<h3><i class="fa fa-angle-double-down"></i> Address</h3>
				<span class="italic lead">4a Mira prospekt</span>
				<span class="italic lead">Mykolayiv</span>
				<span class="italic lead">54034, Ukraine</span>

				</p>
			</div>
		</div>

		<div class="spc-lg"></div>

	</div>


<? get_footer();