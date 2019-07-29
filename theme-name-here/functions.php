<?php

function enqueue_scripts_and_styles() {
  wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . '/style.css', array(), "1");
  wp_enqueue_script("theme-script", get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), "1");
}

add_action( "wp_enqueue_scripts", "enqueue_scripts_and_styles" );