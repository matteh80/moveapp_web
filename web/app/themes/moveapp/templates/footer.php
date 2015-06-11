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
            <div class="row">

<!--                FACEBOOK-->
                <a href="https://www.facebook.com/MoveAppSweden" class="col-xs-12 col-md-6 fb" target="_blank">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 content">
                            <p id="fb-text"></p>
                        </div>
                        <i class="col-xs-2 fa fa-chevron-right"></i>
                    </div>
                </a>

<!--                INSTAGRAM-->
                <?php $image_url = get_latest_instagram(); ?>
                <a href="https://instagram.com/moveapp_training/" class="col-xs-4 col-sm-8 col-md-4 instagram" target="_blank">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 col-md-8 col-md-offset-2 instagram-pic content" style="background-image: url(<?= $image_url; ?>)"></div>
                        <i class="col-sm-1 col-md-2 fa fa-chevron-right"></i>
                    </div>
                </a>

<!--                LINKEDIN-->
                <a href="https://www.linkedin.com/company/9502238" class="col-xs-4 col-sm-2 col-md-1 linkedin text-right" target="_blank">
                    <div class="row"></div>
                </a>

<!--                YOUTUBE-->
                <a href="https://www.youtube.com/channel/UCrVJutJBosnD7LGkR3r1Lpg" class="col-xs-4 col-sm-2 col-md-1 youtube text-right" target="_blank">
                    <div class="row"></div>
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

