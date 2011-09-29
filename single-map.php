<?php
/**
 * Template Name: Single Map
 */
?>
<!doctype html>
<? while (have_posts()) { the_post(); ?>
<title><? the_title() ?></title>
<style>html,body{margin:0;padding:0;overflow:hidden}</style>
<body>
  <script>
  var height = innerHeight,
      width = innerWidth,<?
      $smKey = '5VXM-7GQG-XBCX-CV4Y';
      echo <<<EOT
      parameters = "map=google;smKey=$smKey;lat=38.8355;lon=-77.2890;zoom=11;";
EOT;
?></script>
  <script src="http://app.spatialMatch.com/embedSpatialMatch.js"></script>

<? } ?>
