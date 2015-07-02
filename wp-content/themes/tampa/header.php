<?php
$favicon = pls_get_option('pls-site-favicon');
$agent = PLS_Plugin_API::get_user_details();
$email = pls_get_option('pls-user-email');
$phone = pls_get_option('pls-user-phone');
$logo = pls_get_option('pls-site-logo');
$title = pls_get_option('pls-site-title');
$subtitle = pls_get_option('pls-site-subtitle');

$email = $email ? $email : $agent['user']['email'];
$phone = $phone ? $phone : $agent['user']['phone'];

?><!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>	<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>	<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php pls_document_title(); ?></title>
	<!-- SEO Tags -->
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="author" content="<?php echo pls_get_option('pls-user-name'); ?>">
	<meta property="og:site_name" content="<?php echo get_bloginfo( 'name' ) ?>" />
	<meta property="og:title" content="<?php pls_document_title(); ?>" />
	<meta property="og:url" content="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
	<meta itemprop="name" content="<?php echo get_bloginfo( 'name' ) ?>">

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php if ($favicon) { ?>
	<!-- Favicon -->
	<link href="<?php echo $favicon; ?>" rel="shortcut icon" type="image/x-icon" />
	<?php } ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div id="top-bg">

	<?php pls_do_atomic( 'open_body' ); ?>

	<div id="container">

	<?php pls_do_atomic( 'before_header' ); ?>
	<header>

		<?php if ($email || $phone) { ?>

		<section id="contact">

			<?php if ($email) { ?>
				<p class="email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
			<?php } ?>

			<?php if ($phone) { ?>
				<p class="phone"><?php echo $phone; ?></p>
			<?php } ?>

		</section><!--contact-->

		<?php } ?>

		<section id="slogan">

			<?php if ($logo) { ?>
				<div id="logo">
					<img src="<?php echo $logo ?>" alt="">
				</div>
			<?php } ?>

			<?php if ($title) { ?>
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo $title; ?></a></h1>
				
				<?php if ($subtitle) { ?>
					<h2><?php echo $subtitle; ?></h2>
				<?php } ?>
			<?php } ?>

			<?php if (!$logo && !$title){ ?>
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<h2><?php bloginfo( 'description' ); ?></h2>
			<?php } ?>

		</section><!--logo-->

		<div class="clr"></div>

		<?php PLS_Route::get_template_part( 'menu', 'primary' ); ?> 

	</header>