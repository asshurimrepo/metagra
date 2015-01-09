<?php
	/*
	Template Name: Product Page
	Author: Asshurim Larita @ iBoostme..
	*/
	get_header();

	get_template_part('breadcrumbs');
	$products = get_field('products');
?>





	<section class="container featured-products">
		<h2 class="no-background void-top"><span>Metal</span></h2>

		<article class="row list">
			<figure class="col-md-5"><?=get_the_post_thumbnail($products[0]->ID)?></figure>
			<div class="summary col-md-7">
				<h1 class="hidden-xs hidden-sm"><?=$products[0]->post_title?></h1>
				<?=$products[0]->post_content?>
			</div>
		</article>


		<div id="featured-list" class="owl-carousel featured-list">
			<?php foreach($products as $product) : ?>
				<div class="text-center"> <figure style="background-image: url(<?=thumbnail_src($products->ID)?>"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3><?=$product->post_title?></h3> <article class="small"><?=$product->post_excerpt?></article> </div>
			<?php endforeach; ?>
	</div>

	</section>


	<div class="space-lg"></div>

	<section class="container featured-products">
		<h2 class="no-background void-top"><span>Fuel Oil</span></h2>

		<article class="row list">
			<figure class="col-md-5"><img src="<?=asset('images/fuel-digging.jpg')?>" alt="#" /></figure>
			<div class="summary col-md-7">
				<h1 class="hidden-xs hidden-sm">Fuel Oil</h1>
				Understanding the constant changing current market demands and customers’ preferences for the best quality oil and other products. Our company has great reputation in the global market for offering international standard products that best suit the customers’ exact needs.
				Our ethical business policies and commitment towards complete satisfaction of customers, have helped us to carve a niche in the competitive market. These products are made using state-of-the-art machines and modern techniques. The complete production process is done under the supervision of highly qualified and experienced personnel. Before the production begins, they conduct thorough research on market requirements. It helps us to introduce the right product range at industry leading prices. Our company supplies various items to Air force, Ordinance Factory, Electricity Boards etc.
			</div>
		</article>


	</section>



	<section class="container">
		<h2 class="no-background void-top"><span>Agriculture</span></h2>
		<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<div class="space-md"></div>

		<div class="featured-list gallery">
			<div class="text-center col-sm-3"> <figure style="background-image: url(<?=asset('images/post-1.jpg')?>"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3>Sintering</h3>  </div>
			<div class="text-center col-sm-3"> <figure style="background-image: url(<?=asset('images/spotlight-placeholder.jpg')?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3>Meta - Roll</h3>  </div>
			<div class="text-center col-sm-3"> <figure style="background-image: url(<?=asset('images/metal.jpg')?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3>Coke Industry</h3>  </div>
			<div class="text-center col-sm-3"> <figure style="background-image: url(<?=asset('images/redflowers.jpg')?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3>Drill Pipes</h3>  </div>

			<div class="space-md col-xs-12"></div>

			<div class="text-center col-sm-3"> <figure style="background-image: url(<?=asset('images/post-1.jpg')?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3>Sintering</h3>  </div>
			<div class="text-center col-sm-3"> <figure style="background-image: url(<?=asset('images/spotlight-placeholder.jpg')?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3>Meta - Roll</h3>  </div>
			<div class="text-center col-sm-3"> <figure style="background-image: url(<?=asset('images/metal.jpg')?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3>Coke Industry</h3>  </div>
			<div class="text-center col-sm-3"> <figure style="background-image: url(<?=asset('images/redflowers.jpg')?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3>Drill Pipes</h3>  </div>
		</div>


	</section>


<?php get_footer();