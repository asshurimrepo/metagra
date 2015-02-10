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
					$title = get_the_title();
					if($currentSegment == 'who-we-are'){
						$keyword = "Who";
						echo '<span style="font-weight: normal; text-transform: capitalize;">'.str_ireplace($keyword, '<span class="emp-orange">'.$keyword.'</span>', $title).'</span>';
					}else if($currentSegment == 'what-we-do'){
						$keyword = "What";
						echo '<span style="font-weight: normal; text-transform: capitalize;">'.str_ireplace($keyword, '<span class="emp-orange">'.$keyword.'</span>', $title).'</span>';
					}else
					{
						the_title();
					}
					?>
				</h1>
				<?php the_content(); ?>
			</div>
		</article>

	</section>

<?php get_footer(); ?>