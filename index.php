<?php get_header(); ?>

<main class="main">

<?php
  get_template_part('sections/hero');
  get_template_part('sections/contact');
  get_template_part('sections/about');
  get_template_part('sections/services');
  get_template_part('sections/reviews');

  get_template_part('components/popup', 'form');
  get_template_part('components/popup', 'menu');
?>

</main>

<?php get_footer(); ?>
