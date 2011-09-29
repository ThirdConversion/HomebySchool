<?php /* This is the default loop Loop - included in index.php, archive.php */ ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<?php edit_post_link('edit','<span class="the_edit_link">','</span>') ?>
	<h2 class="title">
		<?php if(!is_single()) { ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
		<?php } // end if ?>
				<?php the_title(); ?>
		<?php if(!is_single()) { ?>
			</a>
		<?php } // end if ?>
	</h2>
	<p class="post-meta">
		<span class="the_time">
			<?php the_time('F j, Y'); ?>
		</span> 

<?php /* Don't display categories
<?php _e('in','standardtheme'); ?> 
		<span class="the_category">
			<?php the_category(', '); ?>
		</span> <?php _e('with','standardtheme'); ?> 
		<span class="the_comment_link">
			<?php comments_popup_link(__('0 Comments','standardtheme'), __('1 Comment','standardtheme'), __('% Comments','standardtheme')); ?>
		</span>
end of Don't display categories */?>

	</p>
	<div id="content-<?php the_ID(); ?>" class="entry">
		<span class="thumbnail">
			<a class="fade" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<?php standard_post_thumbnails(is_page() || is_single()); ?>
			</a>
		</span>
		<div class="content">
			<?php the_content(__('Continue Reading...','standardtheme')); ?>
		</div>
		<div class="clear"></div>
	</div>
</div>