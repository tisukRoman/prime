<div class="popup" id="popup-form">
  <div class="popup__box">

    <span class="popup__close-icon" id="close-form-popup">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.svg" alt="close icon" />
    </span>
    
    <div class="popup-form" data-aos="fade-up">
      <h2 class="title popup-form__title"><span>Request a quote</span></h2>
      <p class="popup-form__description">Please fill in the input fields below and we will contact you</p>
      <div class="contact__form popup-form__form">
          <?php echo apply_shortcodes('[contact-form-7 title="Request A Quote"]'); ?>
      </div>
    </div>

  </div>
</div>
