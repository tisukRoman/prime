<?php

function prime_assets(){
  wp_enqueue_style( 'prime-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'prime-vendor-script', get_template_directory_uri() . '/assets/js/vendor.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'prime-custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery', 'prime-vendor-script'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'prime_assets');
