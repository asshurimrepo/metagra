<?php
	/*
	Template Name: Product Page
	Author: Asshurim Larita @ iBoostme..
	*/
	get_header();

	get_template_part('breadcrumbs');
	$products = get_field('products');
	$featured_product_gallery = get_field('featured_product_gallery');
?>
	<div id="featured-products"></div>
	<section class="container featured-products">
		<div class="box">
			<h2 class="no-background void-top full-width"><span>Products</span></h2>
			<div class="space-md"></div>



			<article class="row list  no-pad-sides">
				<div class="pre-loader"><span><?=preloader()?></span></div>
				<div class="ajax-content">
					<figure class="col-md-5"><?=get_the_post_thumbnail($products[0]->ID)?></figure>
					<div class="summary col-md-7">
						<h1 class="hidden-xs hidden-sm"><?=$products[0]->post_title?></h1>
						<?=$products[0]->post_content?>
					</div>
				</div>
			</article>

			<div id="featured-list" class="owl-carousel featured-list">
				<?php foreach($products as $product) : ?>
					<div class="text-center" style="padding-top: 1px;"><figure style="background-image: url(<?=thumbnail_src($product->ID)?>)"><a data-id="<?=$product->ID?>" href="#featured"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3><?=$product->post_title?></h3> <article class="small"><?=$product->post_excerpt?></article> </div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>


	<div class="space-lg"></div>

	<section class="container featured-products">
		<div class="box">
			<h2 class="no-background void-top full-width"><span>Fuel Oil</span></h2>
			<div class="space-md"></div>
			<article class="row list">
				<figure class="col-md-5"><img src="<?=asset('images/fuel-digging.jpg')?>" alt="#" /></figure>
				<div class="summary col-md-7">
					<h1 class="hidden-xs hidden-sm">Fuel Oil</h1>
					Understanding the constant changing current market demands and customers’ preferences for the best quality oil and other products. Our company has great reputation in the global market for offering international standard products that best suit the customers’ exact needs.
					Our ethical business policies and commitment towards complete satisfaction of customers, have helped us to carve a niche in the competitive market. These products are made using state-of-the-art machines and modern techniques. The complete production process is done under the supervision of highly qualified and experienced personnel. Before the production begins, they conduct thorough research on market requirements. It helps us to introduce the right product range at industry leading prices. Our company supplies various items to Air force, Ordinance Factory, Electricity Boards etc.
				</div>
			</article>
		</div>
	</section>

	<div class="space-lg"></div>

	<section class="container">
		<div class="box">
			<h2 class="no-background void-top full-width"><span><?=get_field('featured_product_title')?></span></h2>
			<p class="text-center"><?=get_field('featured_product_description')?></p>

			<div class="space-md"></div>

			<div class="row featured-list gallery">
				<?php foreach($featured_product_gallery as $i=>$item): ?>
					<div class="text-center col-sm-3 item"> <figure style="background-image: url(<?=$item['image']?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3><?=$item['text']?></h3>  </div>
					<?php if($i%4 == 3): ?>
						<div class="space-md col-xs-12"></div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>


<?php get_footer();