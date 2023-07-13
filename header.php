<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="header__container">

      <nav class="menu">
        <ul class="menu__list">
          <li class="menu__item">
            <a href="#about" class="menu__link">About</a>
          </li>
          <li class="menu__item">
            <a href="#services" class="menu__link">Services</a>
          </li>
          <li class="menu__item">
            <a href="#reviews" class="menu__link">Reviews</a>
          </li>
          <li class="menu__item">
            <a href="#contact" class="menu__link">Contact</a>
          </li>
        </ul>
      </nav>

      <div class="logo">
        <div class="logo__image-box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Prime air group" />
        </div>
        <div class="logo__text-box">
          <div class="logo__title">PrimeAirGroup</div>
          <div class="logo__subtitle">stay cool, stay fresh!</div>
        </div>
      </div>

      <div class="contact-box">
        <div class="contact-box__text">
          <a href="tel:+84 846 250 592" class="contact-box__tel">+84 846 250 592</a>
          <div class="contact-box__schedule">Everyday 8:00 - 20:00</div>
        </div>
        <a href="mailto:hello@gmail.com" class="contact-box__image-box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="Mail icon" />
        </a>
      </div>

    </div>
  </header>
