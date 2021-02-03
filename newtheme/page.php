<?php get_header();?>
<main class="container">
<div class="row">
<div class="col-md-8">
<div class="container pt-5 pb-5 ">
<h1> <?php single_cat_title();?> </h1>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<?php get_template_part('content.page');?>
<?php endwhile;endif;?>
</div>
</div>
<?php get_footer();?>
