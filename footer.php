<!--Footer-->
<footer>

	<!--Subscription-->
	<section class="subscription container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">


				<!--<div class="input-group input-group-lg">
					<input type="email" class="form-control" placeholder="Enter Email address">
                  <span class="input-group-btn">
                    <button class="btn btn-danger" type="button">SUBSCRIBE</button>
                  </span>
				</div>-->

				<?=do_shortcode('[contact-form-7 id="57" title="Contact form 1"]')?>

				<div class="space"></div>

				<p class="lead"><i class="fa fa-phone-square"></i> <em>Have a Question? Call us</em> <strong class="text-danger">+971 4369 9787</strong> <br> <small class="text-muted">Our phone lines are available 24/7</small></p>

			</div>
		</div>
	</section>


	<!--Links-->
	<section class="links row">
		<div class="container">


			<div class="col-md-4 col-md-offset-4">
				<h3>ABOUT METAGRA</h3>
				<ul class="list-unstyled">
					<li><a href="#"><i class="fa fa-question-circle"></i> About Metagra</a></li>
					<li><a href="#"><i class="fa fa-life-bouy"></i> Help Center</a></li>
					<li><a href="#"><i class="fa fa-database"></i> Products</a></li>
					<li><a href="#"><i class="fa fa-user"></i> Careers</a></li>
					<li><a href="#"><i class="fa fa-money"></i> Investments</a></li>
				</ul>
			</div>

			<div class="col-md-4">
				<h3>STAY CONNECTED</h3>
				<ul class="list-unstyled">
					<li><a target="_blank" href="https://twitter.com/#!/metagra"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a target="_blank" href="https://www.facebook.com/pages/Metagra-Trading-DMCC/291839950958697"><i class="fa fa-facebook"></i> Facebook</a></li>
					<li><a target="_blank" href="mailto:info@metagra.ae"><i class="fa fa-envelope"></i> Mail</a></li>
				</ul>
			</div>


		</div>
	</section>


	<!--footer bottom-->
	<section class="bottom">
		<div class="container">
			<small>Copyright Metagra &copy; 2014. All Rights Reserved</small>
		</div>
	</section>
</footer>

<?=link_js('jquery/jquery.min.js')?>
<?=link_js('bootstrap/js/bootstrap.min.js')?>
<?=link_js('owl-carousel/owl.carousel.js')?>
<?=link_js('js/featured.list.js')?>

<?php wp_footer(); ?>
</body>
</html>