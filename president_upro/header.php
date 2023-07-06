<!doctype html>
<html <?php language_attributes() ?><?php if(get_locale() == 'en_US') echo ' dir=ltr' ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="top-line">
      <div class="content-width">
        <div class="logo-wrap">
          <div class="open-menu">
            <a href="#">
              <span></span>
              <span></span>
              <span></span>
              <!--<img src="<?/*= get_stylesheet_directory_uri() */?>/img/menu.svg" alt="">-->
            </a>
          </div>

          <?php if (get_field('logo_header', 'option') || get_field('mobile_logo_header', 'option')): ?>
          <a href="<?= get_home_url(); ?>">

            <?php if ($field = get_field('logo_header', 'option')): ?>
              <img src="<?= $field['url'] ?>" alt="Logo">
            <?php endif ?>

            <?php if ($field = get_field('mobile_logo_header', 'option')): ?>
              <img src="<?= $field['url'] ?>" class="mob-logo" alt="Logo">
            <?php endif ?>

          </a>
        <?php endif ?>   
        
      </div>
      <nav class="top-menu">

        <?php wp_nav_menu( array(
          'theme_location'  => 'header',
          'container'       => '',
          'items_wrap'      => '<ul>%3$s</ul>'
        )); ?>

        <div class="nav-wrap ">
          <div class="nice-select" tabindex="0">

            <?php custom_language_switcher() ?>

          </div>
        </div>
        <div class="search-wrap">
          <a href="#" class="open-search"><img src="<?= get_stylesheet_directory_uri() ?>/img/search.svg" alt=""></a>
          
          <?php get_search_form() ?>

        </div>
      </nav>
    </div>
  </div>
</header>

<div class="menu-responsive" id="menu-responsive" style="display: none">
  <div class="top">
    <div class="close-menu">
      <a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/img/close-menu.svg" alt=""></a>
    </div>
  </div>
  <div class="wrap-block">
    <div class="bg">
      <img src="<?= get_stylesheet_directory_uri() ?>/img/bg-6.svg" alt="">
    </div>

    <?php if ($field = get_field('mobile_menu_logo_header', 'option')): ?>
      <div class="logo-wrap">
        <a href="<?= get_home_url(); ?>">
          <?= wp_get_attachment_image($field['ID'], 'full') ?>
        </a>
      </div>
    <?php endif ?>

    <div class="search-wrap">
      <?php get_search_form() ?>
    </div>
    <div class="wrap-content">
      <nav class="wrap-menu">
        <div class="item">

          <?php wp_nav_menu( array(
            'theme_location'  => 'header-mobile',
            'container'       => '',
            'items_wrap'      => '<ul class="menu">%3$s</ul>'
          )); ?>

        </div>
        <div class="item">

          <?php wp_nav_menu( array(
            'theme_location'  => 'header-mobile-2',
            'container'       => '',
            'items_wrap'      => '<ul class="menu">%3$s</ul>'
          )); ?>

        </div>
        <div class="item">

          <?php wp_nav_menu( array(
            'theme_location'  => 'header-mobile-3',
            'container'       => '',
            'items_wrap'      => '<ul class="menu">%3$s</ul>'
          )); ?>

          <div class="nice-select" tabindex="0">

            <?php custom_language_switcher() ?>

          </div>
        </div>
      </nav>
      <div class="wrap-contact">
        <ul class="contact-list">

          <?php if ($field = get_field('address_header', 'option')): ?>
            <li>
              <p><?= $field ?></p>
            </li>
          <?php endif ?>
          
          <?php if ($field = get_field('phone_header', 'option')): ?>
            <li>
              <a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>">
                <i class="far fa-phone"></i><?= $field ?>
              </a>
            </li>
          <?php endif ?>
          
          <?php if ($field = get_field('fax_header', 'option')): ?>
            <li>
              <a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>">
                <i class="far fa-fax"></i><?= $field ?>
              </a>
            </li>
          <?php endif ?>
          
          <?php if ($field = get_field('email_header', 'option')): ?>
            <li>
              <a href="mailto:<?= $field ?>">
                <i class="far fa-envelope"></i><?= $field ?>
              </a>
            </li>
          <?php endif ?>
          
        </ul>

        <?php if( have_rows('socials_header', 'option') ): ?>

          <ul class="soc">

            <?php while( have_rows('socials_header', 'option') ): the_row(); ?>

              <?php if (get_sub_field('icon_image') || get_sub_field('icon_awesome')): ?>
              <li>
                <a href="<?php the_sub_field('url') ?>" target="_blank">

                  <?php if (get_sub_field('icon_type') == 'Image' && get_sub_field('icon_image')): ?>
                  <?= wp_get_attachment_image(get_sub_field('icon_image')['ID'], 'full', false, array('class' => 'img-svg')) ?>
                <?php endif ?>

                <?php if (get_sub_field('icon_type') == 'Fontawesome' && get_sub_field('icon_awesome')): ?>
                <i class="<?php the_sub_field('icon_awesome') ?>"></i>
              <?php endif ?>

            </a>
          </li>
        <?php endif ?>

      <?php endwhile; ?>

    </ul>

  <?php endif; ?>

</div>
</div>
</div>
</div>
<main>