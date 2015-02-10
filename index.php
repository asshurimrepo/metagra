<?php get_header(); get_template_part('breadcrumbs');  have_posts(); the_post(); ?>

	<?php
	$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', $urlArray);
	$numSegments = count($segments);
	$currentSegment = $segments[$numSegments - 2];

	$title = get_the_title( $post_id );
	if($currentSegment == 'who-we-are'){
		$keyword = "Who";
		$title = str_ireplace($keyword, '<span style="color: #c7810d;">'.$keyword.'</span>', $str);
	}
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
				<h1 class="hidden-xs hidden-sm"><?php echo $title; ?></h1>
				<?php the_content(); ?>
			</div>
		</article>

	</section>

<?php get_footer(); ?>