<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.4&appId=332897300242814";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
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
                <div class="col-md-8">
                    <div class="fb-page hidden-xs" data-href="https://www.facebook.com/MoveAppSweden" data-width="500" data-height="160"
                         data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                         data-show-facepile="true" data-show-posts="false">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/facebook"><a
                                    href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                        </div>
                    </div>
                    <div class="fb-page hidden-sm hidden-md hidden-lg" style="margin: 0 auto" data-href="https://www.facebook.com/MoveAppSweden" data-width="300"
                         data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                         data-show-facepile="false" data-show-posts="false">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/MoveAppSweden"><a
                                    href="https://www.facebook.com/MoveAppSweden">MoveApp</a></blockquote>
                        </div>
                    </div>
                </div>


                <div class="text-center col-md-4 right-social">
                    <!--                INSTAGRAM-->
                    <a href="https://instagram.com/moveapptraining/" class="col-xs-4 instagram text-center"
                       target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/instagram_ikon.png"
                             class="img-responsive">
                    </a>

                    <!--                LINKEDIN-->
                    <a href="https://www.linkedin.com/company/9502238" class="col-xs-4 linkedin text-center"
                       target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/linkedin_ikon.png"
                             class="img-responsive">
                    </a>

                    <!--                YOUTUBE-->
                    <a href="https://www.youtube.com/channel/UCrVJutJBosnD7LGkR3r1Lpg"
                       class="col-xs-4 youtube text-center" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/youtube_ikon.png"
                             class="img-responsive">
                    </a>
                </div>


            </div>


        </div>
    </div>
</footer>

<?php
function get_latest_instagram()
{
    $localhost_token = "2082157067.8171fd1.2f4947db55324cd39875cf3b19c2c77c";
    $url = "https://api.instagram.com/v1/users/2082157067/media/recent?access_token=2082157067.8171fd1.2f4947db55324cd39875cf3b19c2c77c&count=1";
    $jsonData = json_decode((file_get_contents($url)));
    foreach ($jsonData->data as $key => $value) {
        $url = $value->images->standard_resolution->url;
    }
    return $url;
}

;
?>

