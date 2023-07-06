</main>
<footer>
  <div class="bg">
    <img src="<?= get_stylesheet_directory_uri() ?>/img/after-2.svg" alt="">
  </div>
  <div class="content-width content-mini">
    <div class="footer-content">
      <div class="content">
        <div class="left">

          <?php if ($field = get_field('logo_footer', 'option')): ?>
            <div class="logo-wrap">
              <a href="<?= get_home_url(); ?>">
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              </a>
            </div>
          <?php endif ?>
          
          <nav class="footer-menu">

            <?php wp_nav_menu( array(
              'theme_location'  => 'footer',
              'container'       => '',
              'items_wrap'      => '<ul>%3$s</ul>'
            )); ?>

            <?php wp_nav_menu( array(
              'theme_location'  => 'footer-2',
              'container'       => '',
              'items_wrap'      => '<ul>%3$s</ul>'
            )); ?>

            <?php wp_nav_menu( array(
              'theme_location'  => 'footer-3',
              'container'       => '',
              'items_wrap'      => '<ul>%3$s</ul>'
            )); ?>

            <div class="nice-select" tabindex="0">

              <?php custom_language_switcher() ?>

            </div>

          </nav>
        </div>
        <div class="right">

          <?php if ($field = get_field('link_footer', 'option')): ?>
            <div class="btn-wrap">
              <a href="<?= $field['url'] ?>" class="btn-default btn-black"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
            </div>
          <?php endif ?>

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

    <?php if ($field = get_field('address_header', 'option')): ?>
      <p><?= $field ?></p>
    <?php endif ?>

    <?php if ($field = get_field('phone_header', 'option')): ?>
      <p>
        <a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-8-1.svg" alt=""><span><?= $field ?></span>
        </a>
      </p>
    <?php endif ?>

    <?php if ($field = get_field('fax_header', 'option')): ?>
      <p>
        <a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-8-2.svg" alt=""><span><?= $field ?></span>
        </a>
      </p>
    <?php endif ?>

    <?php if ($field = get_field('email_header', 'option')): ?>
      <p>
        <a href="mailto:<?= $field ?>">
          <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-8-3.svg" alt=""><?= $field ?>
        </a>
      </p>
    <?php endif ?>

  </div>
</div>

</div>
</div>
<div class="bottom">
  <div class="content-width content-mini">

    <?php if( have_rows('links_footer', 'option') ): ?>

      <div class="item item-1">
        <ul>

          <?php while( have_rows('links_footer', 'option') ): the_row(); ?>

            <?php if ($field = get_sub_field('link')): ?>
              <li>
                <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
              </li>
            <?php endif ?>

          <?php endwhile; ?>

        </ul>
      </div>

    <?php endif; ?>

    <?php if ($field = get_field('copyright_footer', 'option')): ?>
      <div class="item item-2">
        <p><?= $field ?></p>
      </div>
    <?php endif ?>
    
    <?php if ($field = get_field('developer_footer', 'option')): ?>
      <div class="item item-3">
        <p>
          <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
        </p>
      </div>
    <?php endif ?>

  </div>
</div>
</footer>

<div class="fix-left">
  
  <ul>
    <li class="top-page">
      <a href="#">
        <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-10.svg" alt="">
      </a>
    </li>
    <li>
      <a href="<?php the_field('fixed_button_1', 'option') ?>">
        <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-9.svg" alt="">
      </a>
    </li>
  </ul>

</div>

<div class="fix-right">
  <ul>
    <li class="top-page">
      
    </li>
    <li>
      <a href="<?php the_field('fixed_button_2', 'option') ?>">
        <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-11.svg" alt="">
      </a>
    </li>
  </ul>
</div>
<?php wp_footer(); ?>
</body>
</html>