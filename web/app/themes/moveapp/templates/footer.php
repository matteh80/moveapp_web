<footer class="content-info" role="contentinfo">
    <div class="container menu">
        <div class="col-md-3 logo">
            <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/moveapplogo2.png"
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

    <div class="modal fade" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center">Logga in i MoveApp</h2>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <div class="btn btn-lg btn-primary btn-facebook" onclick="fb_login();">
                                <i class="fa fa-facebook"></i> Logga in med Facebook
                            </div>
                        </div>
                        <div class="text-center divider col-xs-12"<!---->>         OOLOO
                        <span class="or">eller</span>
                    </div>
                </div>
                <form id="loginForm">
                    <div class="form-group">
                        <label for="username">E-postadress</label>
                        <input type="email" id="username" class="form-control"  placeholder="E-post" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lösenord</label>
                        <input type="password" id="password" class="form-control" placeholder="Lösenord" required>
                    </div>
                    <div class="form-group">
                        <div class="row submit">
                            <div class="col-xs-6 col-sm-5 col-sm-offset-1 text">
                                <a href="http://app.moveapp.se/password/reset">Glömt ditt lösenord?</a>
                            </div>
                            <div class="col-xs-6 col-sm-5">
                                <button type="submit" id="btn_login" class="btn btn-default pull-right">Logga in<i class="fa fa-spinner fa-pulse"></i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="errors"></div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center">Inget konto? Registrera dig <a href="http://app.moveapp.se/register/">här!</a></p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="registerModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center">Registrera konto</h2>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <div class="btn btn-lg btn-primary btn-facebook" onclick="fb_login(true);">
                                <i class="fa fa-facebook"></i> Skapa konto med Facebook
                            </div>
                        </div>
                        <div class="text-center divider col-xs-12">
                            <span class="or">eller</span>
                        </div>
                    </div>
                    <form id="registerForm">
                        <div class="form-group">
                            <label for="firstname">Förnamn</label>
                            <input type="text" class="form-control" id="reg_firstname" placeholder="Förnamn">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Efternamn</label>
                            <input type="text" class="form-control" id="reg_lastname" placeholder="Efternamn">
                        </div>
                        <div class="form-group">
                            <label for="username">E-postadress</label>
                            <input type="email" id="reg_username" class="form-control"  placeholder="E-postadress">
                        </div>
                        <div class="form-group">
                            <label for="password">Lösenord</label>
                            <input type="password" id="reg_password" class="form-control" placeholder="Lösenord">
                        </div>
                        <div class="row submit form-group">
                            <div class="col-xs-12 text-center">
                                <button type="submit" id="btn_register" class="btn btn-default">Registrera<i class="fa fa-spinner fa-pulse"></i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="errors"></div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-center">Har du en kampanjkod? Registrera dig <a href="http://app.moveapp.se/register/">här!</a></p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="shopModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <h1>nu lanserar vi vår webshop</h1>
                <h2>15% på hela sortimentet t.o.m. 2015.12.31</h2>
                <a href="http://moveappshop.com" target="_blank"><button class="btn shop-btn">Kika in i shoppen</button></a>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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

