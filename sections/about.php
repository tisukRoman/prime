<section class="about" id="about">
  <div class="about__container">
    <div class="about__image-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" alt="about" />
    </div>
    <div class="about__content">
      <h2 class="title about__title">Who <span>we are</span></h2>
      <p class="about__description">
        Your trusted partner in USA's air conditioning solutions. We specialize in designing, manufacturing, and distributing top-quality AC units for homes and businesses. Experience our innovative, energy-efficient products for ultimate comfort and reliability. Join <a href="/" class="u-accent">PrimeAirGroup</a> today!
      </p>

        <div class="about__cards">

            <div class="about-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
              <div class="about-card__content">
                <div class="about-card__image-box">
                  <?php
                    $img_2x = get_template_directory_uri() . "/assets/img/seven-years-experience@2x.png";
                    $img_1x = get_template_directory_uri() . "/assets/img/seven-years-experience.png";
                    $srcset = $img_2x . " 2x";
                  ?>
                  <img srcset="<?php echo $srcset; ?>" src="<?php echo $img_2x; ?>" alt="Seven Years Experience" />
                </div>
                <div class="about-card__text">
                  <h4 class="about-card__title about-card__title--accent">7 years</h4>
                  <h4 class="about-card__title">experience</h4>
                </div>
              </div>
            </div>

            <div class="about-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="300">
              <div class="about-card__content">
                <div class="about-card__image-box">
                  <?php
                    $img_2x = get_template_directory_uri() . "/assets/img/professional-services@2x.png";
                    $img_1x = get_template_directory_uri() . "/assets/img/professional-services.png";
                    $srcset = $img_2x . " 2x";
                  ?>
                  <img srcset="<?php echo $srcset; ?>" src="<?php echo $img_1x; ?>" alt="Professional team" />
                </div>
                <div class="about-card__text">
                  <h4 class="about-card__title about-card__title--accent">Professional</h4>
                  <h4 class="about-card__title">team</h4>
                </div>
              </div>
            </div>

          <div class="about-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="600">
            <div class="about-card__content">
              <div class="about-card__image-box">
                <?php
                  $img_2x = get_template_directory_uri() . "/assets/img/experience@2x.png";
                  $img_1x = get_template_directory_uri() . "/assets/img/experience.png";
                  $srcset = $img_2x . " 2x";
                ?>
                <img srcset="<?php echo $srcset; ?>" src="<?php echo $img_1x; ?>" alt="Free Estimate" />
              </div>
              <div class="about-card__text">
                <h4 class="about-card__title">free</h4>
                <h4 class="about-card__title about-card__title--accent">estimate</h4>
              </div>
            </div>
          </div>

          <div class="about-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="900">
            <div class="about-card__content">
              <div class="about-card__image-box">
                <?php
                  $img_2x = get_template_directory_uri() . "/assets/img/support@2x.png";
                  $img_1x = get_template_directory_uri() . "/assets/img/support.png";
                  $srcset = $img_2x . " 2x";
                ?>
                <img srcset="<?php echo $srcset; ?>" src="<?php echo $img_1x; ?>" alt="Customer Support" />
              </div>
              <div class="about-card__text">
                <h4 class="about-card__title">customer</h4>
                <h4 class="about-card__title about-card__title--accent">support</h4>
              </div>
            </div>
          </div>

        </div>

      <button class="button about__button">Connect with us</button>
    </div>
  </div>
</section>
