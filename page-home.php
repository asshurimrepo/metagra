<?php
	/*
	Template Name: HOME Page
	Author: Asshurim Larita @ iBoostme..
	*/
	get_header();


	$posts = get_field('posts');
?>

<!--Section: Spotlight-->
<section id="spotlight">
	<img src="<?=asset('images/spotlight-placeholder.jpg')?>" />
</section>




<section id="blog" class="container">

	<?php foreach($posts as $post): ?>


	<h2 class="no-background"><span><?=$post->post_title?></span></h2>

	<article class="row list">
		<figure class="col-md-5"><img src="<?=asset('images/post-1.jpg')?>" alt="#" /></figure>
		<div class="summary col-md-7">
			<?=$post->post_excerpt?>
			<div class="controls">
				<a class="btn btn-danger" href="#">READ MORE</a>
			</div>
		</div>
	</article>

	<?php endforeach; ?>



</section>




<!--Why-->
<section id="why" class="inverse">
	<div class="container">
		<h2 class="no-background"><span>Why <b>Metagra</b>?</span></h2>


		<div class="row items">
			<div class="col-md-3 col-sm-6 text-center">
				<figure><img src="<?=asset('images/why-1.png')?>" class="img-responsive"/></figure>
				20 years of consolidated experience in grain markets locally and internationally.
			</div>

			<div class="col-md-3 col-sm-6 text-center">
				<figure><img src="<?=asset('images/why2.png')?>" class="img-responsive"/></figure>
				Strong relation with clients and suppliers.
			</div>

			<div class="col-md-3 col-sm-6 text-center">
				<figure><img src="<?=asset('images/why-3.png')?>" class="img-responsive"/></figure>
				A long time experience in Humanitarian and food aid supplies.
			</div>

			<div class="col-md-3 col-sm-6 text-center">
				<figure><img src="<?=asset('images/why-4.png')?>" class="img-responsive"/></figure>
				Strong knowledge about Logistics.
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>