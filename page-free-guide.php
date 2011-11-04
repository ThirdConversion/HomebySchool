<?php
get_header(); ?>

<script>(function(head, css){
  css.rel = 'stylesheet';
  css.href = '<?php bloginfo('template_directory'); ?>/css/freeguide.css';
  head.appendChild(css);
})(document.getElementsByTagName('head')[0], document.createElement('link'))</script>
<div id="content" class="col-full splash">
  <div id="main" class="fullwidth" style="width:600px;">
		<?php the_post(); ?>
		<?php the_content(); ?>
  </div>
</div>
<?php get_footer(); ?>