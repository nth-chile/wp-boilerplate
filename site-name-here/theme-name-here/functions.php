<?php

function enqueue_scripts_and_styles() {
  wp_enqueue_style("theme-style", get_stylesheet_directory_uri(), array(), "1");
}

add_action( "wp_enqueue_scripts", "enqueue_scripts_and_styles" );