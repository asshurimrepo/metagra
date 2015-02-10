<article class="row list">
    <?php if(has_post_thumbnail(get_the_ID())): ?>
    <figure class="col-md-5">
        <?php echo get_the_post_thumbnail(get_the_ID()); ?>
    </figure>
    <div class="summary col-md-7">
        <?php else: ?>
        <div class="summary col-md-12">
            <?php endif; ?>
            <h1 class="hidden-xs hidden-sm"><a style="color:#222222"  href="<?=get_permalink(get_the_ID())?>"><?php the_title(); ?></a></h1>
            <div class="summary col-md-12">
                <?php
                    $max = 270;
                    if( strlen( the_content() ) > $max ){
                        echo substr( the_content(), 0, 270).'...';
                    }
                 ?>
                <div class="controls">
                    <a class="btn btn-danger" href="<?=get_permalink($post->ID)?>">READ MORE</a>
                </div>
            </div>
        </div>
</article>
