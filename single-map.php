<?php
/**
 * Template Name: Single Map
 */
if ( is_user_logged_in() ) {
?>
<!doctype html>
<? while (have_posts()) { the_post(); ?>
<title><? the_title() ?></title>
<style>html,body{margin:0;padding:0;overflow:hidden}</style>
<body>
	<div style="width:100%;height:40px;background-color:white;position:absolute;top:0;left:0;">
		<a href="http://fairfax.homebyschool.com/" style="display:block;float:left;border:0;"><img src="http://fairfax.homebyschool.com/wp-content/themes/StandardTheme_260/uploads/MARBRI-110513-Home-by-School-header-logo.jpg" height="24" style="padding:10px 10px 3px 10px;border:0;" /></a><span style="color: #598D3F;font: italic 18px/48px Georgia,'Times New Roman',serif;letter-spacing: -0.8px;">Find a Home by School District in Fairfax County, VA</span>
		<a href="http://fairfax.homebyschool.com/county-map/" style="display:block;float:right;font: 16px/34px Verdana;color:#a5a5a5;text-decoration:none;padding-right:10px;padding-top:6px;">&laquo; BACK TO COUNTY MAP</a>
	</div>
	<div style="position:absolute;top:40px;left:0;">
  <script>
  if (document.body && document.body.offsetWidth) {
   width = document.body.offsetWidth;
   height = document.body.offsetHeight - 80;
  }
  if (document.compatMode=='CSS1Compat' &&
    document.documentElement &&
    document.documentElement.offsetWidth ) {
   width = document.documentElement.offsetWidth;
   height = document.documentElement.offsetHeight - 80;
  }
  if (window.innerWidth && window.innerHeight) {
   width = window.innerWidth;
   height = window.innerHeight - 80;
  }
	<?$smKey = '5VXM-7GQG-XBCX-CV4Y';
      echo <<<EOT
      var parameters = "map=google;smKey=$smKey;lat=38.8355;lon=-77.2890;zoom=11;";
EOT;
?></script>
  <script src="http://app.spatialMatch.com/embedSpatialMatch.js"></script>
	<div style="width:100%;height:40px;background-color:white;">
		<div style="color:a5a5a5;font-size:12px;width:310px;float:left;padding-left:10px;">&copy; 2012 Third Conversion, LLC | Equal Housing Opportunity | RE/MAX Premier 13135 Lee J. Hwy #115 Fairfax, VA 22033</div>
		<div style="display:block;float:right;padding-right:10px;font:16px Verdana;">
			Questions? Contact Us: <a href="mailto:marina@homebyschool.com" style="text-decoration:none;color:#00aeef;">marina@homebyschool.com</a>
			<span style="color:#00aeef;">(703) 480-6575</span>
		</div>
	</div>

	</div>

<? }
} else { ?>
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
	<?php get_footer(); ?><?
}
?>