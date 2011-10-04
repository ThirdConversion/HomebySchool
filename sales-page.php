<?php
/**
 * Template Name: Sales page
 */
get_header();
css('sales.css') ?>


<div id="content" class="col-full splash">
  <div id="main" class="fullwidth">
    <? while (have_posts()) {
         the_post();
         global $post;
         $school_name = $post->post_name; ?>
       <h1><? the_title() ?></h1>

       <div id=left>
         <? the_content() ?>
    <? wp_reset_postdata();
     } ?>
<!--
        <div>contact us</div>

        <h2>Featured Homes</h2>
        <ol><?
            $school_category = get_term_by('slug', $school_name, 'category');
            $featured_category = get_term_by('slug', 'featured', 'category');
            $the_query =
              new WP_Query(array('category__and' => array($school_category->term_id, $featured_category->term_id)));
            console($the_query);
            while ($the_query->have_posts()){ $the_query->the_post();
              echo '<li><a href="';
              the_permalink();
              echo '">';
              the_title();
              echo "</a>";
            } ?>
        </ol>
        -->
      </div>

    <div id=right>
    <img class="size-full wp-image-430" title="Discover the truth" src="http://fairfax.homebyschool.com/wp-content/uploads/2011/09/Buscar-01-color-e1317588780254.jpg" alt="Discover the truth about buying a home" width="199" height="156" align="center"/>
      <p>Discover the truth about buying a home in 7 easy steps
      </p>
      <div id=testimonials><h2>Testimonials</h2></div>
			<h3><em>"I never thought that buying a house could be complicated"</em></h3>
			But knowing the issues is half the battle and it can make the difference between a super-stressful experience and going through the process with peace of mind."
			<br>
			<img class="size-full wp-image-434" title="Happy Client" src="http://fairfax.homebyschool.com/wp-content/uploads/2011/09/Cap-16-fin-ret-color-e1317589486141.jpg" alt="" width="100" height="152" />
			Happy Client
			
    	</div>



  </div>
</div>
<? get_footer() ?>