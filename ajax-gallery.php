<?php $gallery = get_field('gallery', $post_id); ?>

<div class="summary col-md-12">
	<div class="featured-list gallery">

	<?php foreach($gallery as $item): ?>
			<div class="text-center col-sm-6"> <figure style="background-image: url(<?=$item['image']?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3><?=$item['text']?></h3>  </div>
	<?php endforeach; ?>

	</div>

</div>