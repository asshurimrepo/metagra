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

trace($pages);
?>
    <div id="featured-products"></div>
    <section class="container featured-products">
        <div class="box">
            <h2 class="no-background void-top full-width"><span>Products</span></h2>
            <div class="space-md"></div>

            <div class="row product-headers">
                <div class="col-xs-4 item">
                    <a href="#">Metal</a>
                </div>
                <div class="col-xs-4 item">
                    <a href="#">Oil Products</a>
                </div>
                <div class="col-xs-4 item">
                    <a href="#">Agriculture</a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();
