<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="header__container">

      <!-- MENU ICON -->
      <div class="flex-wrapper">
        <div class="icon header__menu-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-icon.svg" alt="menu-icon" />
        </div>
      </div>
      <!-- MENU ICON END -->

      <nav class="menu header__menu">
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

      <a href="/" class="logo header__logo">
        <div class="logo__image-box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Prime air group" />
        </div>
        <div class="logo__text-box">
          <div class="logo__title">PrimeAirGroup</div>
          <div class="logo__subtitle">stay cool, stay fresh!</div>
        </div>
      </a>

      <div class="contact-box header__contact-box">
        <div class="contact-box__text">
          <a href="tel:+84846250592" class="contact-box__tel">+84 846 250 592</a>
          <div class="contact-box__schedule">Everyday 8 am - 8 pm</div>
        </div>
        <a href="mailto:call@primeairgroup.com" class="icon contact-box__mail-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail-small.svg" alt="Mail icon" />
        </a>
        <a class="contact-box__email" href="mailto:call@primeairgroup.com">call@primeairgroup.com</a>
        
      </div>

      <!-- MOBILE ICON 
        <a href="tel:+84846250592" class="icon header__menu-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile.svg" alt="mobile-icon" />
        </a>
       MOBILE ICON END -->

    </div>

  </header>
