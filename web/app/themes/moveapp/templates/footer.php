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
            <a href="https://www.facebook.com/MoveAppSweden" class="col-md-5 fb" target="_blank">
                <div class="col-xs-2 image-container">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/fb_ikon.png" class="img-responsive" />
                </div>
                <div class="col-xs-9 content">
                    <p id="fb-text"></p>
                </div>
                <div class="col-xs-1">
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </div>
            </a>

            <a href="https://instagram.com/moveapp_training/" class="col-md-4 container instagram" target="_blank">
                <?php $image_url = get_latest_instagram(); ?>
                <div class="col-xs-4 image-container">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/instagram_ikon.png" class="img-responsive" />
                </div>
                <div class="col-xs-6 content" style="background-image: url(<?= $image_url; ?>)">

                </div>
                <div class="col-xs-2">
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </div>
            </a>

            <div class="col-md-3 social-right">
                <a href="https://www.linkedin.com/company/9502238" class="col-xs-4 image-container text-right" target="_blank">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/linkedin_ikon.png" class="img-responsive" />
                </a>
                <a href="https://www.youtube.com/channel/UCrVJutJBosnD7LGkR3r1Lpg" class="col-xs-4 image-container text-right" target="_blank">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/youtube_ikon.png" class="img-responsive" />
                </a>
            </div>

        </div>
    </div>
</footer>

<?php
function get_latest_instagram() {
    $localhost_token = "2082157067.8171fd1.2f4947db55324cd39875cf3b19c2c77c";
    $url = "https://api.instagram.com/v1/users/2082157067/media/recent?access_token=2082157067.8171fd1.2f4947db55324cd39875cf3b19c2c77c&count=1";
    $jsonData = json_decode((file_get_contents($url)));
    foreach ($jsonData->data as $key=>$value) {
        $url = $value->images->standard_resolution->url;
    }
    return $url;
};
?>

