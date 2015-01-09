<?php $gallery = get_field('gallery', $post_id); ?>
<div class="summary col-md-12">
	<?php foreach($gallery as $item): ?>
		<div class="featured-list gallery">
			<div class="text-center col-sm-6"> <figure style="background-image: url(<?=$item['image']?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3><?=$item['text']?></h3>  </div>
			</div>
	<?php endforeach; ?>
</div>