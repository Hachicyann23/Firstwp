<?php get_header();?>
<main class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="pb-4 mb-4 font-italic border-bottom"><?php the_title();?></h2>
	<div class="container pt-5 pb-5 ">
	<h1> <?php single_cat_title();?> </h1>
	<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="post-img"><?php the_post_thumbnail('thumnail');?></div>
	<p><?php the_time('F j,Y g:i a');?> by <a href=""><?php the_author();?></p></a>
	<?php the_content();?>
	<hr>
	<?php comments_template();?>
	<?php endwhile;endif;?>
	</div>
    </div>



<?php get_footer();?>
