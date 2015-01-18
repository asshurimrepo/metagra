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
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="base_url" content="<?= site_url() ?>"/>
	<title><?php bloginfo( 'name' ); ?>  <?php wp_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?= link_css( 'bootstrap/css/bootstrap.min.css' ) ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet'
	      type='text/css'>
	<?= link_css( 'font-awesome/css/font-awesome.min.css' ) ?>
	<?= link_css( 'style.css' ) ?>
	<?= link_css( 'owl-carousel/owl.carousel.css' ) ?>
	<?= link_css( 'owl-carousel/owl.theme.css' ) ?>


	<?php wp_head(); ?>
</head>
<body>
<!--Start Content-->


<?php global $main_nav; ?>
<!--Header-->
<header>

<!--	<pre>--><?php //var_dump( $main_nav ); ?><!--</pre>-->

	<div class="container" id="logo">
		<a href="<?= get_site_url() ?>"><img class="img-responsive" src="<?= asset( 'images/logo.png' ) ?>"
		                                     alt="Metagra | Your trading partner in Middle East and Europe"/></a>
	</div>

	<div class="container">
		<nav class="navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

					<ul class="nav navbar-nav">

						<?php foreach ( $main_nav as $nav ): ?>

							<?php if ( ! $nav->menu_item_parent ): ?>
								<li class="<?= is_active( $nav->object_id ) ?>">
									<a href="<?= $nav->url ?>"><?= $nav->title ?></a>

									<ul class="dropdown-menu" role="menu">
										<?php foreach ( $main_nav as $s_nav ): if($s_nav->menu_item_parent == $nav->ID): ?>
											<li><a href="<?= $s_nav->url ?>"><?= $s_nav->title ?></a></li>
										<?php endif; endforeach; ?>
									</ul>
								</li>
							<?php endif; ?>

						<?php endforeach; ?>

					</ul>
					<div class="col-sm-3 col-md-3 pull-right">
						<form class="navbar-form" role="search">
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" placeholder="Search" name="q">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- /.navbar-collapse -->
			</div>
		</nav>
	</div>
</header>