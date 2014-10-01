<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title>
<?php bloginfo('name'); ?>
<?php wp_title()?>
</title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.css" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/script/jquery-2.1.1.min.js" ></script>
<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo('template_url'); ?>/small_screen.css" />
<link rel="stylesheet" media="screen and (min-width: 768px)" href="<?php bloginfo('template_url'); ?>/big_screen.css" />
<?php wp_head(); ?>
</head>

<body class="container-fluid">
<div class="row">
		<header class="header col-sm-3">
						<div class="firstTitle"> <a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
										<?php bloginfo('name'); ?>
										</a> 
						</div>
						<div class="description">
														<?php bloginfo( 'description' ); ?>
						</div>
							
						<div class="row">
										<div class="col-sm-12 ">
														<img class="profile img-circle img-responsive" alt="you and me" src="<?php bloginfo('template_url'); ?>/img/profile2.jpg"/>
										</div>
						</div>
						<?php wp_nav_menu('theme_location=header&container_id=categorylist'); ?>
		</header>
