
<!--Footer-->
<footer>

	<!--Subscription-->
	<!--<section class="subscription container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">


				<div class="input-group input-group-lg">
					<input type="email" class="form-control" placeholder="Enter Email address">
                  <span class="input-group-btn">
                    <button class="btn btn-danger" type="button">SUBSCRIBE</button>
                  </span>
				</div>

				<?/*=do_shortcode('[contact-form-7 id="57" title="Contact form 1"]')*/?>

				<div class="space"></div>

				<p class="lead"><i class="fa fa-phone-square"></i> <em>Have a Question? Call us</em> <strong class="text-danger">+971 4369 9787</strong> <br> <small class="text-muted">Our phone lines are available 24/7</small></p>

			</div>
		</div>
	</section>-->

	<section>
		<div class="space-md"></div>
		<div class="container">
			<div class="sp pattern back-top"><span class="back-to-top">Top</span></div>
		</div>
	</section>
	<!--Links-->
	<section class="links row">
		<div class="container">
			<div class="col-md-5 subscription">
				<?/*=do_shortcode('[contact-form-7 id="57" title="Contact form 1"]')*/?>
				<?php /*echo do_shortcode('[smlsubform prepend="" showname=true nametxt="Name:" nameholder="Name..." emailtxt="Email:" emailholder="Email Address..." showsubmit=true submittxt="Submit" jsthanks=false thankyou="Thank you for subscribing to our mailing list"]'); */?>
				<div id="email-subscribers-2"><h2>Subscription Widget</h2>
					<link rel="stylesheet" media="screen" type="text/css" href="http://preview.iboostme.com/metagra/wp-content/plugins/email-subscribers/widget/es-widget.css">
					<script language="javascript" type="text/javascript" src="http://preview.iboostme.com/metagra/wp-content/plugins/email-subscribers/widget/es-widget.js"></script>
					<div>
						<div class="es_msg"><span id="es_msg"></span></div>
						<div class="input-group input-group-lg">
							<span>
								<input class="es_textbox_class form-control " name="es_txt_email" id="es_txt_email" onkeypress="if(event.keyCode==13) es_submit_page('http://preview.iboostme.com/metagra')" value="" type="email" placeholder="Enter your email address">
							</span>
							<span class="input-group-btn">
								<button class="btn btn-danger" name="es_txt_button" id="es_txt_button"  onclick="return es_submit_page('http://preview.iboostme.com/metagra')" type="submit">SUBSCRIBE</button>
							</span>
						</div>
						<input name="es_txt_name" id="es_txt_name" value="" type="hidden">
						<input name="es_txt_group" id="es_txt_group" value="Subscription" type="hidden">
					</div>
				</div>
				<?php /*if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) */?>
				<!--<div>
					<script src="http://www.gopiplus.com/work/wp-content/plugins/email-posts-to-subscribers/widget/widget.js" type="text/javascript" language="javascript"></script>
					<div style="padding-bottom:3px;padding-left:8px;color:#F00;"> <span id="elp_msg"></span> </div>
					<div class="input-group input-group-lg">
						<span>
							<input class="form-control" name="elp_txt_email" id="elp_txt_email" onkeypress="if(event.keyCode==13) elp_submit_page('http://www.gopiplus.com/work')" type="email" placeholder="Enter your email address" >
						</span>
						<span class="input-group-btn">
							<button class="btn btn-danger" type="submit"  name="elp_txt_button" id="elp_txt_button" onclick="return elp_submit_page('http://www.gopiplus.com/work')" >SUBSCRIBE</button>
						</span>
					</div>
				</div>-->
				<!--<form class="sml_subscribe" method="post">
					<input class="sml_hiddenfield" name="sml_subscribe" type="hidden" value="1">
					<script>window.onload = function() { alert('Thank you for subscribing to our mailing list'); }</script>
					<p class="sml_name">
						<label class="sml_namelabel" for="sml_name">Name:</label>
						<input class="sml_nameinput" placeholder="Name..." name="sml_name" type="text" value="">
					</p>
					<p class="sml_email">
						<label class="sml_emaillabel" for="sml_email">Email:</label>
						<input class="sml_emailinput" name="sml_email" placeholder="Email Address..." type="text" value="">
					</p>
					<p class="sml_submit">
						<input name="submit" class="btn sml_submitbtn" type="submit" value="Submit">
					</p>
				</form>-->
				<!--<form class="sml_subscribe" method="post">
					<input class="sml_hiddenfield" name="sml_subscribe" type="hidden" value="1">
					<p class="sml_thankyou"></p>
					<div class="input-group input-group-lg">
						<span>
							<input type="email" class="form-control sml_emailinput" name="sml_email" placeholder="Enter your email address" type="text" value="">
						</span>
						<span class="input-group-btn">
							<button class="btn btn-danger" type="submit">SUBSCRIBE</button>
						</span>
					</div>
				</form>-->

				<div class="space"></div>
				<p class="contact">Contact Us <span class="number emp">+971 4369 9787</span></p>
			</div>

			<div class="col-md-3 col-sm-6 pull-right">
				<h3 class="ucwords"><span class="thin">Stay</span> Connected</h3>
				<ul class="list-unstyled list-items">
					<li><a target="_blank" href="https://twitter.com/#!/metagra"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a target="_blank" href="https://www.facebook.com/pages/Metagra-Trading-DMCC/291839950958697"><i class="fa fa-facebook"></i> Facebook</a></li>
					<li><a target="_blank" href="mailto:info@metagra.ae"><i class="fa fa-envelope"></i> Mail</a></li>
				</ul>
			</div>

			<div class="col-md-3 col-sm-6 pull-right">
				<h3 class="ucwords"><span class="thin">About</span> Metagra</h3>
				<ul class="list-unstyled list-items">
					<li><a href="<?=get_permalink(6)?>"><i class="fa fa-question"></i> About Metagra</a></li>
					<li><a href="<?=get_permalink(8)?>"><i class="fa fa-database"></i> Products</a></li>
					<li><a href="<?=get_permalink(10)?>"><i class="fa fa-star"></i> Our Expertise</a></li>
					<li><a href="<?=get_permalink(14)?>"><i class="fa fa-money"></i> Investments</a></li>
				</ul>
			</div>
		</div>
	</section>


	<!--footer bottom-->
	<section class="bottom">
		<div class="container copyright">
			<small>Copyright Metagra &copy; 2015. All Rights Reserved</small>
		</div>
	</section>
</footer>

<?=link_js('jquery/jquery.min.js')?>
<?=link_js('bootstrap/js/bootstrap.min.js')?>
<?=link_js('owl-carousel/owl.carousel.js')?>
<?=link_js('js/jquery.smartmenus.js')?>
<?=link_js('js/jquery.smartmenus.bootstrap.js')?>
<?=link_js('js/featured.list.js')?>
<?=link_js('js/main.js')?>
<?php wp_footer(); ?>
</body>
</html>