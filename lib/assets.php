<?php

function prime_assets(){
  wp_enqueue_style( 'prime-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
}

add_action('wp_enqueue_scripts', 'prime_assets');
