<?php
	/*
	Template Name: HOME Page
	Author: Asshurim Larita @ iBoostme..
	*/
	get_header();


	$posts = get_field('posts');
	$highlights = get_field('highlights');
?>

<!--Section: Spotlight-->
<section id="spotlight">
	<?=do_shortcode('[rev_slider homeslider]')?>
</section>


<section id="blog" class="container">

	<?php foreach($posts as $post): ?>


	<h2 class="no-background"><span><?=$post->post_title?></span></h2>

	<article class="row list">
		<figure class="col-md-5"><?=get_the_post_thumbnail($post->ID)?></figure>
		<div class="summary col-md-7">
			<?=$post->post_excerpt?>
			<div class="controls">
				<a class="btn btn-danger" href="<?=get_permalink($post->ID)?>">READ MORE</a>
			</div>
		</div>
	</article>

	<?php endforeach; ?>



</section>




<!--Why-->
<div id="why" class="inverse">
	<div class="container">
		<h2 class="no-background"><span>Why <b>Metagra</b>?</span></h2>


		<div class="row items">

		<?foreach($highlights as $highlight):?>

			<div class="col-md-3 col-sm-6 text-center">
				<figure><img src="<?=$highlight['image']?>" class="img-responsive"/></figure>
				<?=$highlight['text']?>
			</div>

		<?php endforeach; ?>

		</div>

	</div>
</div>

<?php get_footer(); ?>