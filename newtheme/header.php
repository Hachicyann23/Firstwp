<!doctype html>
<html <?php language_attributes();?>">
  <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="generator" content="Hugo 0.79.0">
    <title> <?php bloginfo('name') ?> | 
    <?php is_front_page() ? bloginfo('description')  : wp_title(); ?> 
  </title>

    <!--CSS ONLY--> 
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head();?>
    
  </head>
  <body>
  <header class="sticky-top">
<div class="container">
<?php wp_nav_menu (
	array(
		'theme_location' => 'top-menu',
		'menu_class' => 'custom-menu-class'
	));?> 
</div>
</header>
<div class="container">
	<div class="blog-header">
		<h1 class="blog-title"> <?php wp_title();?> </h1>

	</div>
</div>

