<?php get_header(); ?>

	<section class="container">

		<article class="row list">
			<figure class="col-md-5"><?=get_the_post_thumbnail(get_the_ID())?></figure>
			<div class="summary col-md-7">
				<h1 class="hidden-xs hidden-sm"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</article>

	</section>

<?php get_footer(); ?>