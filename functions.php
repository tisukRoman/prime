<?php

function prime_assets(){
  // aos library
  wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all');
  wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);


  wp_enqueue_style( 'prime-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'prime-jquery-script', get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'prime-vendor-script', get_template_directory_uri() . '/assets/js/vendor.js', array('prime-jquery-script'), '1.0.0', true );
  wp_enqueue_script( 'prime-custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('prime-jquery-script', 'prime-vendor-script'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'prime_assets');
