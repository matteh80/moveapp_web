<footer class="content-info" role="contentinfo">
    <div class="container menu">
        <div class="col-md-3 logo">
            <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/moveapplogo.png"
                     class="img-responsive"/>
            </a>
        </div>
        <div class="col-md-9 footer-menu">
            <?php dynamic_sidebar('sidebar-footer'); ?>
        </div>
    </div>
    <div class="row social">
        <div class="container">
            <a href="https://www.facebook.com/MoveAppSweden" class="col-md-6 fb" target="_blank">
                <div class="col-xs-2 image-container">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/fb_icon.png" class="img-responsive" />
                </div>
                <div class="col-xs-8 content">
                    <p id="fb-text"></p>
                </div>
                <div class="col-xs-2">
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </div>
            </a>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</footer>

