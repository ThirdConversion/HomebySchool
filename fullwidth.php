<?php /* Template Name: Full */ ?>
<?php get_header(); ?>
	<div id="content" class="col-full">
		<div id="main" class="fullwidth">
			<?php if (have_posts()) : $count = 0; ?>
				<?php while (have_posts()) : the_post(); $count++; ?>
					<div id="post-<?php the_ID(); ?>" >
						<?php edit_post_link('edit','<span class="the_edit_link">','</span>') ?>
						<h1 class="title">
								<?php the_title(); ?>
						</h1>
						<?php the_content(); ?>
						<div class="clear"></div>
					</div>
				<?php endwhile; 
			else: ?>
				<div class="post">
					<h2 class="title">
						<?php _e('Sorry!','standardtheme'); ?>
					</h2>
					<p>
						<?php _e('Whoops! Something broke. Please try again!','standardtheme'); ?>
					</p>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>