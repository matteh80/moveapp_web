<header class="banner" role="banner">
    <div class="container">
        <a class="brand col-md-4" href="<?= esc_url(home_url('/')); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/moveapplogo.png" class="img-responsive"/>
        </a>

        <div id="button-wrapper" class="col-md-4 col-md-offset-4">
            <div class="login-wrap">
                <button class="login"><?= __('Logga in', 'sage'); ?></button>
                <div id="login-wrapper" class="col-md-2 col-md-offset-8">
                    <form id="login-form">
                        <div class="form-group">
                            <input type="email" class="form-control" id="username" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" id="btn_login" class="btn btn-default text-center">Submit</button>
                    </form>
                </div>
            </div>





            <a href="http://app.moveapp.se/register/">
                <button class="register"><?= __('Nytt konto', 'sage'); ?></button>
            </a>
        </div>
    </div>

    <nav role="navbar navbar-default">
        <div class="container">
            <div class="social">
                <i class="fa fa-facebook-official"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>


            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img
                        src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/moveapplogo.png"
                        class="img-responsive"/></a>
            </div>
            <?php
            if (has_nav_menu('primary_navigation')) :
                //wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'primary_navigation',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker())
                );
            endif;
            ?>
        </div>
    </nav>
</header>

