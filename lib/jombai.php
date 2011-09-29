<?php
/**
 * Includes activation trigger on elements for Spatial Match.
 * This function turns this markup into a clickable link with a popup.
 * <img src="..." data-url="bookmark/to/load" />
 */
function include_overlay_ui(){
  echo <<<EOT
console.log('ok');
$('[href*="/special-map/"]').click(function overlay_ui(){

});
EOT;
}

// Add custom post type: Map
add_action('init', 'create_type_map');
function create_type_map(){
  $labels = array(
    'name' => __('Maps'),
    'singular_name' => __('Map'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New Map'),
    'edit_item' => __('Edit Map'),
    'new_item' => __('New Map'),
    'view_item' => __('View Map'),
    'search_items' => __('Search Map'),
    'not_found' => __('No maps found'),
    'not_found_in_trash' => __('No maps found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => true,
    'hierarchical' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'supports' => array('title'),
    'taxonomies' => array()
  );
  register_post_type('map', $args);
}

// Add custom post type: School
add_action('init', 'create_type_school');
function create_type_school(){
  $labels = array(
    'name' => __('School'),
    'singular_name' => __('School'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New School'),
    'edit_item' => __('Edit School'),
    'new_item' => __('New School'),
    'view_item' => __('View School'),
    'search_items' => __('Search School'),
    'not_found' => __('No schools found'),
    'not_found_in_trash' => __('No schools found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug'=> 'boundary', 'with_front'=> false),
    'hierarchical' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'custom-fields'),
    'taxonomies' => array('category')
  );
  register_post_type('school', $args);
}

// Add custom post type: Agent
add_action('init', 'create_type_agent');
function create_type_agent(){
  $labels = array(
    'name' => __('Agents'),
    'singular_name' => __('Agent'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New Agent'),
    'edit_item' => __('Edit Agent'),
    'new_item' => __('New Agent'),
    'view_item' => __('View Agent'),
    'search_items' => __('Search Agents'),
    'not_found' => __('No agents found'),
    'not_found_in_trash' => __('No agents found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'has_archive' => true,
    'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
    'taxonomies' => array()
  );
  register_post_type('agent', $args);
}

/**
 * Logging console.
 * Will encode the arguments as JSON objects and pass to the scripting console
 * on the browser client.
 */
function console(){
  $args = json_encode(func_get_args());
  echo "
  <script>console.log($args)</script>";
}

/**
 * Insert stylesheet from template directory/css using a script.
 * This allows for separation of templates and stylesheets, as a <link> tag is
 * only allowed in the document <head> but the stylesheet conditionally rendered.
 * @param $url The url of the stylesheet in template_directory/css/ to include.
 */
function css($url) {
  if ($url == '') return;
  else $url = get_bloginfo('template_directory')."/css/$url";

  echo <<<EOT
<script>(function(head, css){
  css.rel = 'stylesheet';
  css.href = '$url';
  head.appendChild(css);
})(document.getElementsByTagName('head')[0], document.createElement('link'))</script>
EOT;
}