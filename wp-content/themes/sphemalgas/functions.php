<?php

// adding the CSS and JS files
function gt_setup(){
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Montserrat|Open+Sans|Oxygen');
  wp_enqueue_style('fontawesome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'gt_setup');
