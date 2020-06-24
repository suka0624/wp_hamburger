<?php
  function main_styles() {
    wp_enqueue_style('my-style', get_theme_file_uri('/style.css'));
  }
  add_action( 'wp_enqueue_scripts', 'main_styles' );