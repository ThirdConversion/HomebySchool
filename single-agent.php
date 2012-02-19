<?php /* this is single.php */ ?>
<?php get_header(); ?>
	<div id="content" class="col-full">
		<div id="main" class="col-<?php echo main_content_orientation(); ?> agent-page">
			<?php standard_sharers(); ?>
			<?php standard_breadcrumbs(); ?>
			<?php if (have_posts()) : $count = 0;
				while (have_posts()) : the_post(); $count++;
					//get_template_part( 'loop', get_post_format() );
					//standard_author_box();
					//comments_template('', true);
				endwhile;
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
			<br />
			<h1 class="title"><?php the_title(); ?></h1>
			<?php if ( get_post_meta($post->ID, '_tw_agent_team_name', true) ) { ?>
				<p><strong><?php echo get_post_meta($post->ID, '_tw_agent_team_name', true); ?></strong></p>
			<?php } ?>
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<img src="<?php echo $image[0]; ?>" class="profile" />
			<?php endif; ?>
			<div class="agentDesc">
				<?php echo wpautop(get_post_meta($post->ID, '_tw_agent_bio', true)); ?>
			</div>
			<div id="google-map">
				<h3>Agent Location</h3>
				<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo get_post_meta($post->ID, '_tw_agent_google_map', true); ?>&zoom=<?php echo get_post_meta($post->ID, '_tw_agent_zoom_level', true); ?>&size=200x200&markers=color:red%7Clabel:A%7C<?php echo get_post_meta($post->ID, '_tw_agent_google_map', true); ?>&sensor=false" />
			</div>
			<div id="agent-details">
				<h3>Agent Details</h3>
				<p><strong>Metro Area:</strong> <?php echo get_post_meta($post->ID, '_tw_agent_metro_area', true); ?></p>
				<p><strong>Counties/Cities:</strong> <?php echo get_post_meta($post->ID, '_tw_agent_county_city', true); ?></p>
				<div class="schools"><strong>School Districts:</strong>
				<ul>
					<?php $schools = explode(",", get_post_meta($post->ID, '_tw_agent_school_districts', true)); ?>
					<?php foreach ($schools as $school) { ?>
						<li><?php echo $school; ?></li>
					<?php } ?>
				</ul></div>
			</div>
		</div>
	<div id="sidebar" class="col-right">
		<div id="contact-3" class="widget">
			<h3>Contact <?php the_title(); ?></h3>
			<?php 
				add_filter('gform_field_value_agent', 'tw_agent_population');
				function tw_agent_population($value){ return the_title('','',false); }
				add_filter('gform_field_value_agent_email', 'tw_agent_email_population');
				function tw_agent_email_population($value){ global $post; return get_post_meta($post->ID, '_tw_agent_email', true); }
				add_filter('gform_field_value_agent_phone', 'tw_agent_phone_population');
				function tw_agent_phone_population($value){ global $post; return get_post_meta($post->ID, '_tw_agent_phone', true); }
				gravity_form(1, false, true, false, null, true, 10); 
			?>
		</div>
	</div>
	</div>
<?php get_footer(); ?>