<?php get_header(); get_template_part('breadcrumbs');  have_posts(); the_post(); ?>

	<?php
	$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', $urlArray);
	$numSegments = count($segments);
	$currentSegment = $segments[$numSegments - 2];


	?>

	<section class="container">

		<article class="row list box no-pad-sides">
			<?php if(has_post_thumbnail(get_the_ID())): ?>
				<figure class="col-md-5 no-pad-left">
					<?php echo get_the_post_thumbnail(get_the_ID()); ?>
				</figure>
				<div class="summary col-md-7">
			<?php else: ?>
				<div class="summary col-md-12">
			<?php endif; ?>
				<h1 class="hidden-xs hidden-sm">
					<?php

					if($currentSegment == 'who-we-are'){
						echo get_the_title();
						the_title();
						/*$title = get_the_title( get_the_ID() );
						$keyword = "Who";
						echo '<span style="font-weight: normal">'.str_ireplace($keyword, '<span style="font-weight:bold; color: #c7810d;">'.$keyword.'</span>', $str).'</span>';*/
					}else {
						the_title();
					}
					?>
				</h1>
				<?php the_content(); ?>
			</div>
		</article>

	</section>

<?php get_footer(); ?>