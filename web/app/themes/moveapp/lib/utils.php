<?php

namespace Roots\Sage\Utils;

/**
 * Tell WordPress to use searchform.php from the templates/ directory
 */
function get_search_form() {
  $form = '';
  locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', __NAMESPACE__ . '\\get_search_form');

function get_page_id_by_slug($slug){
  global $wpdb;
  $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'page'");
  return $id;
}
