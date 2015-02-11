<?php
/*
Template Name: Product Menu Page
Author: Juni Brosas @ iBoostme
*/

get_header();
$args = [
    'parent' => 8
];
$pages = get_pages( $args );

// get the pages of the products
foreach($pages as $page ){
    $title = $page->post_title;
    $url = get_page_link($page->ID);
}
?>
    <div id="featured-products"></div>
    <section class="container featured-products">
        <div class="box">
            <h2 class="no-background void-top full-width"><span>Products</span></h2>
            <div class="space-md"></div>

            <div class="row product-headers">
                <?php foreach($pages as $page ){
                    $title = $page->post_title;
                    $url = get_page_link($page->ID); ?>

                    <div class="col-xs-4 item">
                        <a href="<?=$url?>"><?=$title?></a>
                    </div>

                <?php }?>
            </div>
        </div>
    </section>
<?php get_footer();
