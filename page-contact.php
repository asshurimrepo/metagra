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
			<h2 class="no-background void-top"><span><b>Contact</b> Us</span></h2>

			<section class="map">
				<iframe frameborder="0" src="https://mapsengine.google.com/map/u/0/embed?mid=zB5T74wOKau0.kz4bPhrycyBk" width="100%" height="280"></iframe>
			</section>

			<div class="space-md"></div>

			<div id="contact">
				<div class="spc-md"></div>
				<div class="container">

					<div class="col-md-8 form">

						<?=do_shortcode('[contact-form-7 id="111" title="Contact Form Us"]')?>

					</div>

					<div class="col-md-4 text-right">

						<a target="_blank" href="https://twitter.com/#!/metagra" style="color: #ff7200; font-size: 40px; margin:0 6px;"><i class="fa fa-facebook-square"></i></a>
						<a target="_blank" href="https://www.facebook.com/pages/Metagra-Trading-DMCC/291839950958697" style="color: #ff7200; font-size: 40px; margin:0 6px;"><i class="fa fa-twitter-square"></i></a>

						<p>

						<h3>Email us</h3>
						<span class="italic lead">info@metagra.ae</span>

						<h3>Call us</h3>
						<span class="italic lead">+971 4369 9787</span>

						<h3>Address</h3>
						<span class="italic lead">Office 1402</span>
						<span class="italic lead">Palatinium Tower, JLT</span>
						<span class="italic lead">Dubai, UAE</span>

						</p>
					</div>
				</div>

				<div class="spc-lg"></div>

			</div>
		</div>
	</div>


<? get_footer();