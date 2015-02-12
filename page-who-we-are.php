<?php
/*
Template Name: Who We Are Page
Author: Juni Brosas @ iBoostme
*/
get_header(); get_template_part('breadcrumbs');  have_posts(); the_post();

$args = [
    'include' => ['6', '330'],
];
$pages = get_pages( $args ); ?>

<section class="container">
    <div class="box" style="padding-left: 15px; padding-right: 15px;">

        <?php foreach( $pages as $page ) : ?>
            <article class="row list no-pad-sides">
                <figure class="col-md-5">
                    <?php if(has_post_thumbnail( $page->ID )): ?>
                        <?php echo get_the_post_thumbnail( $page->ID ); ?>
                    <?php else: ?>
                        <img src="<?=asset('images/image-empty.jpg') ?>" class="img-responsive" alt="Image Empty"/>
                    <?php endif; ?>
                </figure>

                <div class="summary col-md-7">
                    <h1 class="hidden-xs hidden-sm">
                        <?php
                        $title = get_the_title( $page->ID );
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

                    <div class="space-sm">
                        <?php $page->post_content ?>
                    </div>
                </div>

            </article>
        <?php endforeach; ?>

    </div>
</section>

<?php get_footer(); ?>