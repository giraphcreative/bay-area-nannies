<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=1" rel="stylesheet" type="text/css">
<link href="<?php bloginfo( "template_url" ) ?>/css/print.css" rel="stylesheet" type="text/css" media="print">

</head>
<body <?php body_class(); ?>>

<header>
	<div class="logo">
		<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img src="<?php bloginfo( "template_url" ) ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
		</a>
	</div>

	<img src="<?php bloginfo( 'template_url' ) ?>/img/header-branch.png" class="branch">

	<div class="social">
		<a href="https://www.instagram.com/bayareasupernanny/"><img src="<?php bloginfo( "template_url" ) ?>/img/social-instagram.png"></a>
		<!--<a href="#"><img src="<?php bloginfo( "template_url" ) ?>/img/social-youtube.png"></a>-->
		<a href="https://www.linkedin.com/in/cherrelle-williams-59561250"><img src="<?php bloginfo( "template_url" ) ?>/img/social-linkedin.png"></a>
		<!--<a href="#"><img src="<?php bloginfo( "template_url" ) ?>/img/social-google.png"></a>-->
		<a href="https://m.facebook.com/profile.php?id=279802892099777&tsid=0.10620086104609072&source=typeahead"><img src="<?php bloginfo( "template_url" ) ?>/img/social-facebook.png"></a>
		<!--<a href="#"><img src="<?php bloginfo( "template_url" ) ?>/img/social-twitter.png"></a>-->
	</div>	
</header>

<section class="content">
