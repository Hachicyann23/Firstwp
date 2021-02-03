<?php get_header();?>
<main class="container">
  
  <div class="row">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>

	<div class="container pt-5 pb-5 ">

	<h1> <?php single_cat_title();?> </h1>

	<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="paddings">
	<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
	<p><?php the_time('F j,Y g:i a');?> by <a href=""><?php the_author();?></a></p>

	<?php the_excerpt();?>
	<a href="<?php the_permalink();?>" class="btn btn-success">Read More</a></div>
	<?php endwhile;endif;?>
	</div>
    </div>

<?php get_footer();?>
