
			<div class="paddings">
				<a href="<?php the_permalink();?>">
					<h2>
						<?php the_title();?>
					</h2>
				</a>
				<p><?php the_time('F j,Y g:i a');?> 
					by 	<a href="">
					<?php the_author();?>
						</a>
				</p>
				<div class="post-img">
					<?php if(has_post_thumbnail()) : ?>
					<?php the_post_thumbnail();?>
					<?php endif;?>
				</div>
				<?php the_excerpt();?>
					<a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
			</div>