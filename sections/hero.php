<section class="hero">

<div class="hero__body">

  <!-- FLYING PARTICLES -->
  <div id="particle-container">
    <?php for($i = 0; $i < 30; $i++){ ?>
      <div class="particle">
        <img width="24px" height="24px" src="<?php echo get_template_directory_uri(); ?>/assets/img/snowflake.svg" alt="Snowflake" />
      </div>
    <?php } ?>
  </div>

  <div class="hero__container">
    <h1 class="hero__title" data-aos="fade-up" data-aos-duration="1000">Take control your indoor climate</h1>
    <h3 class="hero__subtitle" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400">Transforming <span class="u-orange">hot days</span> into <span class="u-accent">cool bliss</span></h3>
    <div class="hero__image-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/air-conditioner.png" alt="Air Conditioner" />
    </div>
    <button type="button" class="button hero__button">
      Request a quote
    </button>
  </div>

</div>

</section>
