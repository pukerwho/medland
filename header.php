<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header" role="banner">
    <div class="pc-show">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="d-flex align-items-center justify-content-between">
              <div class="header__logo">
                Лого  
              </div>
              <div class="header__button">
                <div class="red-button callback">
                  <span>
                    Заказать
                  </span>
                </div>  
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header__phone">
      <a href="tel:8 800 123 45 67">
        8 800 123 45 67
      </a>
    </div>
    <!-- <div class="header__button">
      Заказать 
      <div class="header__button-line">
        <span></span>
        <svg viewBox="0 0 17.83 5"><polygon points="17.83 2.5 14.5 0 14.5 2 0 2 0 3 14.5 3 14.5 5 17.83 2.5"></polygon></svg>
      </div> -->
    </div>
  </header>
  <section id="content" role="main">