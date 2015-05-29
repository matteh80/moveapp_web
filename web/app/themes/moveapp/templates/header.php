<header class="banner" role="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" class="img-responsive" />
    </a>
    <div id="button-wrapper">
      <button class="btn">Logga in</button>
      <button class="btn">Nytt konto</button>
    </div>
  </div>
    <nav role="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" class="img-responsive" /></a>
        </div>
        <?php
        if (has_nav_menu('primary_navigation')) :
          //wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary_navigation',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
          );
        endif;
        ?>
      </div>
    </nav>
</header>
