<?php
/**
 * Template Name: Single School
 */
get_header();
css('schools.css') ?>


<div id="content" class="col-full splash">
  <div id="main" class="fullwidth">
    <? while (have_posts()) { the_post();

         global $post;
         $school_name = $post->post_name;
         $pyramid_slug = preg_replace(array('/high-school(-\d)?/', '/middle-school(-\d)?/', '/elementary-school(-\d)?/'),
           array('hs', 'ms', 'es'), $school_name); ?>

       <h1><? the_title() ?></h1>

       <div id=left>
         <? /*the_meta();*/ the_content() ?>
    <? } ?>


        <? $query = new WP_Query(array(
            'tax_query'=> array(
              array('taxonomy'=>'post_tag', 'terms'=>'featured-home', 'field'=>'slug'),
              array('taxonomy'=>'category', 'terms'=>$pyramid_slug, 'field'=>'slug')
            ),
            'posts_per_page' => 15
          ));
          if ($query->have_posts()) { ?>
            <h2>Featured Homes</h2>
            <ul id=featured><? while ($query->have_posts()) { $query->the_post();
                echo '<li><a href="';
                the_permalink(); echo '">';
                the_post_thumbnail(array(100,100)); the_title(); echo "</a>";
                the_excerpt();
              }
              wp_reset_postdata() ?>
            </ul>
         <? } ?>


        <h2>Questions? Contact Us</h2>
        <!-- <p  class="glass" >  --> 
          <? //include 'contact-form.php' ?>
          <? include 'hcard-marina-brito.php' ?>
        </p>
    </div>

    <div id=right>

      <h2>Find a Home</h2>
      <? $map = get_post_meta($post->ID, 'Map', true); ?>
      <a class="glass" href="<?= $map ?>" target="_blank"><img class="aligncenter size-full wp-image-560" title="Home_search_icon" src="http://fairfax.homebyschool.com/wp-content/uploads/2011/11/Magnifying-Glass-150x96.png" alt="Find a home" />
        Search ALL</br>
        Homes for Sale</br>
        by School Boundary
        <button class="css3button">Find a Home</button>
      </a>

      <h2>Questions? Contact Us</h2>
      <? include 'hcard-marina-brito.php' ?>


      <? $query = new WP_Query(array(
        'tax_query' => array(
            array('taxonomy'=>'post_tag', 'terms'=>'related', 'field'=>'slug'),
            array('taxonomy'=>'category', 'terms'=>$pyramid_slug, 'field'=>'slug')
         ),
        'posts_per_page' => 5
      ));
      if ($query->have_posts()) { ?>
        <h2>Articles</h2>
        <ul><?  while ($query->have_posts()) { $query->the_post();
                  echo '<li><a href="';
                  the_permalink(); echo '">';
                  the_post_thumbnail(); the_title(); echo "</a>";
                }
                wp_reset_postdata();?>
        </ul>
      <? } ?>


      <? $query = new WP_Query(array(
        'tax_query' => array(
            array('taxonomy'=>'post_tag', 'terms'=>'stats', 'field'=>'slug'),
            array('taxonomy'=>'category', 'terms'=>$pyramid_slug, 'field'=>'slug')
         ),
        'posts_per_page' => 5
      ));
      if ($query->have_posts()) { ?>
        <h2>Statistics</h2>
        <ul><?  while ($query->have_posts()) { $query->the_post();
                  echo '<li><a href="';
                  the_permalink(); echo '">';
                  the_post_thumbnail(); the_title(); echo "</a>";
                }
                wp_reset_postdata();?>
        </ul>
      <? } ?>


      <? $query = new WP_Query(array(
        'tax_query' => array(
            array('taxonomy'=>'post_tag', 'terms'=>'neighborhood', 'field'=>'slug'),
            array('taxonomy'=>'category', 'terms'=>$pyramid_slug, 'field'=>'slug')
         ),
        'posts_per_page' => 5
      ));
      if ($query->have_posts()) { ?>
        <h2>Neighborhood</h2>
        <ul><?  while ($query->have_posts()) { $query->the_post();
                  echo '<li><a href="';
                  the_permalink(); echo '">';
                  the_post_thumbnail(); the_title(); echo "</a>";
                }
                wp_reset_postdata();?>
        </ul>
      <? } ?>

      <? $categories = wp_get_post_categories($post->ID) ?>

<!-- [MB] This section is commented out for now because it doesn't hide itself when there aren't any posts
      <h2>Schools in this Pyramid</h2>
      <ul><?
        foreach ($categories as $catID) {
          $category = get_category($catID);
          $related_school = preg_replace(array('/hs$/i', '/ms$/i', '/es$/i'),
            array('high-school', 'middle-school', 'elementary-school'), $category->slug);

          if (preg_match("/$related_school/", $school_name)) continue;

          echo '<li><a href="/school/'.$related_school.'">'.$category->name.'</a>';
        } ?>
      </ul> -->

    </div>



  </div>
</div>
<? get_footer() ?>