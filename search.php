<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section class="container">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>
				<div class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
				</div>
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
				else :
					// If no content, include the "No posts found" template.
					?>
					<div class="page-header">
						<h1 class="page-title">No Results Found</h1>
					</div>
				<?php
				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();
