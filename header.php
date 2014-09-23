<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title>
<?php bloginfo('name'); ?>
<?php wp_title()?>
</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>

<body>
<header class="header">
		<div class="firstTitle"> 
				<a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
				<?php bloginfo('name'); ?>
				</a> 
		</div>
		<div class="description">
				<?php bloginfo( 'description' ); ?>
		</div>
		<?php wp_nav_menu('theme_location=header&container_id=categorylist'); ?>
</header>
<div style="clear:both"></div>
