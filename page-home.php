<?php
	/*
	Template Name: HOME Page
	Author: Asshurim Larita @ iBoostme..
	*/
	get_header();


	$posts = get_field('posts');
	$highlights = get_field('highlights');
?>

<!--Section: Spotlight-->
<section id="spotlight">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<!-- START Worden Top Gainers Ticker Widget -->
				<script src="http://widgets.freestockcharts.com/js/jquery-1.3.1.min.js" type="text/javascript"></script> <script src="http://widgets.freestockcharts.com/script/WBIHorizontalTicker2.js?ver=12334" type="text/javascript"></script> <link href="http://widgets.freestockcharts.com/WidgetServer/WBITickerblue.css" rel="stylesheet" type="text/css" />
				<script>
					var gainTicker = new WBIHorizontalTicker('gainers');
					gainTicker.start();
				</script> <!-- End Scrolling Ticker Widget -->

			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?=do_shortcode('[rev_slider homeslider]')?>
			</div>
		</div>
	</div>
</section>


<section id="blog" class="container">
	<article class="row list">
	<?php foreach($posts as $post): ?>

		<div class="col-md-6">
			<h2 class="single-line md">
				<span><?=$post->post_title;?></span>
			</h2>
			<figure class="col-md-12 border-frame"><?=get_the_post_thumbnail($post->ID)?></figure>
			<div class="summary col-md-12">
				<?php echo substr( $post->post_excerpt, 0, 270).'...'; ?>
				<div class="controls">
					<a class="btn btn-danger" href="<?=get_permalink($post->ID)?>">READ MORE</a>
				</div>
			</div>
		</div>

	<?php endforeach; ?>

	</article>



</section>




<!--Why-->
<div id="why" class="inverse">
	<div class="container">
		<h2 class="single-line md void-top"><span>Why <b class="emp">Metagra?</b></span></h2>

		<div class="row items">

		<?foreach($highlights as $highlight):?>

			<div class="col-md-3 col-sm-6 text-center ">
				<div class="feature">
					<figure><img src="<?=$highlight['image']?>" class="img-responsive"/></figure>
					<?=$highlight['text']?>
				</div>
			</div>

		<?php endforeach; ?>

		</div>

	</div>

</div>

<?php get_footer(); ?>



