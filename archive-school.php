<?php
/**
 * Template Name: School page
 */
get_header();
css('schools.css') ?>


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
      </div>

    <div id=right>
      <div id=contact>contact info</div>
    </div>



  </div>
</div>
<? get_footer() ?>