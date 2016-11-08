<?php
/*
Plugin Name: Internet Explorer 404 Pages
Version: 0.1
Author: Eric Lewis
*/

add_filter('template_include', 'ie_404_template_include');

function ie_404_template_include($template) {
  if (!is_404()) {
    return $template;
  }
  return dirname(__FILE__) . '/template.php';
}
