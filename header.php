!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>

<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?=link_css('bootstrap/css/bootstrap.min.css')?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
	<?=link_css('font-awesome/css/font-awesome.min.css')?>
	<?=link_css('style.css')?>

</head>
<body>
<!--Start Content-->




<!--Header-->
<header>

	<div class="container" id="logo">
		<a href="#"><img src="<?=asset('images/logo.png')?>" alt="Metagra | Your trading partner in Middle East and Europe"/></a>
	</div>

	<nav class="navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

				<ul class="nav navbar-nav">
					<li><a href="#">Who we are</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Our Expertise</a></li>
					<li><a href="#">Our Offices</a></li>
					<li><a href="#">Investment</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

</header>