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


        <h2>Contact Us</h2>
        <p class=glass>
          <? //include 'contact-form.php' ?>
        </p>

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
    </div>

    <div id=right>

<!-- [MB]This section needs Javascript Philosopher magic -->
      <h2>Find a Home</h2>
      <a class="glass" href="/special-map/?layer%3Alifestyle%3Aelementary%5Fschools%5Fpublic%2Etoggle=on&amp;layer%3Alistings%2Etoggle=on&amp;layer%3Alifestyle%3Ahigh%5Fschools%5Fpublic%2Etoggle=on&amp;layer%3Alistings%2EpropTypes=Patio%20Home%2CSemi%2DDetached%2CAttach%2FRow%20Hse%2CMid%2DRise%205%2D8%20Floors%2COther%2CDuplex%2CHi%2DRise%209%2B%20Floors%2CGarden%201%2D4%20Floors%2CTownhouse%2CDetached&amp;layer%3Alifestyle%3Amiddle%5Fschools%5Fpublic%2Edistance=0%2E1&amp;map%2Eview=Road&amp;map%2Ezoom=13&amp;app%3Ahomes%3Afilter%2Egeography=4e3c5c75%2Df354%2Ddfe4%2D2523%2Dac1038150ed7%7C4e5ea951%2Da4ff%2Dc3c4%2Db5c3%2Dac103816aec8%3AcustomArea&amp;layer%3Alifestyle%3Amiddle%5Fschools%5Fpublic%2Etoggle=on&amp;map%2Ecenter=38%2E889414%2C%2D77%2E318267&amp;layer%3Alifestyle%3Aelementary%5Fschools%5Fpublic%2Edistance=0%2E1&amp;layer%3Alifestyle%3Agrocery%2Etoggle=on&amp;layer%3Alifestyle%3Ahospitals%2Etoggle=on&amp;area%3Acustom%3A4e3c5c75%2Df354%2Ddfe4%2D2523%2Dac1038150ed7%7C4e5ea951%2Da4ff%2Dc3c4%2Db5c3%2Dac103816aec8%2Etoggle=on&amp;layer%3Alifestyle%3Ahigh%5Fschools%5Fpublic%2Edistance=0%2E1#sm-anchor" target="_blank"><img class="aligncenter size-full wp-image-333" title="Home_search_icon" src="http://fairfax.homebyschool.com/wp-content/uploads/2011/09/Home_search_icon.png" alt="Find a home" width="65" height="65" />
        Click for The Only Interactive Map where you can
        Find a Home by School Boundary
        <button class="css3button">Find a Home</button>
      </a>

      <h2>Contact Us</h2>
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