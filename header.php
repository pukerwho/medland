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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140429702-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-140429702-2');
    gtag('config', 'AW-734354753');
  </script>
  <!-- Event snippet for Кликнули на кнопку conversion page
  In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
  <script>
  function gtag_report_conversion(url) {
    var callback = function () {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-734354753/6RZuCNfbiqUBEMG6ld4C',
        'event_callback': callback
    });
    return false;
  }
  </script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
     (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

     ym(53985127, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
     });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/53985127" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
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
                <img src="<?php bloginfo('template_url') ?>/img/logo-medland.png" alt="">
              </div>
              <div class="header__button">
                <div class="red-button callback" onclick="return gtag_report_conversion()">
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
      <a href="tel:88005053732">
        8 800 505 37 32
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