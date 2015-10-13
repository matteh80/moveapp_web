<section class="infoheader row  hidden-xs hidden-sm">
    <div class="container">
        <div class="col-md-8">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <h1 class="col-xs-12">Workout made easy!</h1>
                        <h4 class="col-xs-10">
                            <p>Träna - hur, var och när du vill - i mobilen, läsplattan eller på TV:n.</p>
                            <p>Vi erbjuder 100-tals träningsfilmer på 10-60 min.<br>Träna core, zumba, fyspass, pilates, boxpass, olika typer av yoga mm.</p>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a href="#" class="row"><button class="btn col-xs-6">Gratis - 0 kr / mån</button></a>
                    <a href="http://app.moveapp.se/register/" class="row"><button class="btn btn-green col-xs-6">Premium - 99 kr / mån</button></a>
                    <p class="col-xs-12 row campaign">
                        Har du en kampanjkod? Registrera dig <a href="http://app.moveapp.se/register/">här</a>.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="mobileheader row hidden-md hidden-lg">
    <div class="bg"></div>
    <div class="col-xs-12">
        <div class="row text-center">
            <h1 class="col-xs-12">Workout made easy!</h1>
            <h4 class="col-xs-12"><p>100-tals träningspass - hur, var och när du vill <br>- i mobilen, surfplattan eller på TV:n.</p>
                <p>Vi erbjuder 100-tals träningsfilmer på 10-60 min.<br>Träna core, zumba, fyspass, pilates, boxpass, olika typer av yoga mm.</h4>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="#"><button class="btn">Gratis - 0 kr / mån</button></a>
                <a href="http://app.moveapp.se/register/"><button class="btn btn-green">Premium - 99 kr / mån</button></a>
            </div>
        </div>
<!--        <div class="row">-->
<!--            <div class="appstore-wrapper">-->
<!--                <a href="https://play.google.com/store/apps/details?id=com.timedev.moveapp" class="col-sm-6 text-center">-->
<!--                    <img src="--><?//= get_template_directory_uri(); ?><!--/dist/images/playstore.png"-->
<!--                         class="img-responsive"/>-->
<!--                </a>-->
<!--                <!--                <a href="https://itunes.apple.com/us/app/moveapp/id998189654?l=sv&ls=1&mt=8">-->
<!--                <a href="https://itunes.apple.com/us/app/moveapp/id998189654" class="col-sm-6 text-center">-->
<!--                    <img src="--><?//= get_template_directory_uri(); ?><!--/dist/images/appstore.png"-->
<!--                         class="img-responsive"/>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>

<section class="blackfooter row">
    <div class="container">
        <div class="appstore-wrapper col-xs-12 col-sm-9 col-md-8">
            <a href="https://play.google.com/store/apps/details?id=com.timedev.moveapp">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/playstore.png" class="img-responsive"/>
            </a>
            <!--                <a href="https://itunes.apple.com/us/app/moveapp/id998189654?l=sv&ls=1&mt=8">-->
            <a href="https://itunes.apple.com/us/app/moveapp/id998189654">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/appstore.png" class="img-responsive"/>
            </a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-4">
            <img class="devices" src="<?= get_template_directory_uri(); ?>/dist/images/devices.png" class="img-responsive"/>
        </div>
    </div>
</section>
<?php
//$args = array(
//    'post_type' => 'post',
//    'posts_per_page' => 5,
//    'orderby' => 'date',
//    'order' => 'DESC',
//    'post_status' => 'publish'
//);
//$posts = get_posts($args);
//if($posts):
//?>
<!--<section class="row news">-->
<!--    <div class="container">-->
<!--        <h2 class="text-center">Nyheter</h2>-->
<!--    </div>-->
<!--    <div class="row news-wrapper">-->
<!--        --><?php
//        $x = 0;
//        foreach ($posts as $post) :
//            setup_postdata($post);
//            $categories = get_the_category();
//            if (has_post_thumbnail()) :
//                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
//
//                if($x==0) {
//                    echo '<article class="col-md-6 large" style="background-image: url('.$thumb[0].')"><a href="'.get_permalink($post->ID).'">';
//                    echo '<a href="'.get_permalink($post->ID).'"><div class="clicker"></div></a>';
//                }else{
//                    echo '<article class="col-md-3 col-sm-6" style="background-image: url('.$thumb[0].')"><a href="'.get_permalink($post->ID).'">';
//                    echo '<a href="'.get_permalink($post->ID).'"><div class="clicker"></div></a>';
//                }?>
<!--                    <div class="title-wrapper">-->
<!--                        <div class="date">--><?php //echo $categories[0]->cat_name;?><!--</div>-->
<!--                        <h2>-->
<!--                            --><?php //the_title();?>
<!--                        </h2>-->
<!--                    </div>-->
<!--                    <div class="entry-summary">-->
<!--                        --><?php //the_excerpt(); ?>
<!--                    </div>-->
<!--                    -->
<!--                </article>-->
<!---->
<!--        --><?php
//                $x++;
//            endif;
//        endforeach;
//        ?>
<!---->
<!--    </div>-->
<!--    <div class="container text-center button-wrapper">-->
<!--        --><?php
//        function get_page_id_by_slug($slug){
//            global $wpdb;
//            $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'page'");
//            return $id;
//        }
//        $nyheterurl = get_permalink(get_page_id_by_slug('nyheter'));
//        ?>
<!--        <a href="--><?//= $nyheterurl;?><!--"><button class="btn text-center">Visa alla nyheter</button></a>-->
<!--    </div>-->
<!--</section>-->
<?php //endif; ?>

<section class="row films">
    <div class="container">
        <h2 class="text-center">Filmerna</h2>
<!--        <img src="--><?//= get_template_directory_uri(); ?><!--/dist/images/cc_appletv.png" class="cc_appletv" />-->
    </div>
    <div class="container-fluid filmer-wrapper">
        <div class="row thumbs-wrapper">
<!--            Video 1 - Fokus-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Fokus</h2>
                </div>
                <?php $video_basepath = "https://dl.dropboxusercontent.com/u/143100643/moveapp_videos/"; ?>
                <video id="video1" width="100%" height="100%" poster="<?= $video_basepath; ?>video1.png" preload="none">
                    <source src="<?= $video_basepath; ?>video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?= get_template_directory_uri(); ?>/dist/images/play_2.png" class="play-btn" />
            </div>
<!--            Video 2 - Gravidyoga-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Gravidyoga</h2>
                </div>
                <video width="100%" height="100%" poster="<?= $video_basepath; ?>video2.png" preload="none">
                    <source src="<?= $video_basepath; ?>video2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?= get_template_directory_uri(); ?>/dist/images/play_2.png" class="play-btn" />
            </div>
<!--            Video 3 - Core-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Core</h2>
                </div>
                <video id="video1" width="100%" poster="<?= $video_basepath; ?>video3.png" height="100%" preload="none">
                    <source src="<?= $video_basepath; ?>video3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?= get_template_directory_uri(); ?>/dist/images/play_2.png" class="play-btn" />
            </div>

<!--            VIDEO 4 - Styrka-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Styrka</h2>
                </div>
                <video id="video1" width="100%" poster="<?= $video_basepath; ?>video4.png" height="100%" preload="none">
                    <source src="<?= $video_basepath; ?>video4.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?= get_template_directory_uri(); ?>/dist/images/play_2.png" class="play-btn" />
            </div>
<!--            VIDEO 5 - pilates-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Pilates</h2>
                </div>
                <video id="video1" width="100%" poster="<?= $video_basepath; ?>video5.png" height="100%" preload="none">
                    <source src="<?= $video_basepath; ?>video5.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?= get_template_directory_uri(); ?>/dist/images/play_2.png" class="play-btn" />
            </div>
<!--            VIDEO 6 - Kampsportsfys-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Puls</h2>
                </div>
                <video id="video1" width="100%" poster="<?= $video_basepath; ?>video6.png" height="100%" preload="none">
                    <source src="<?= $video_basepath; ?>video6.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?= get_template_directory_uri(); ?>/dist/images/play_2.png" class="play-btn" />
            </div>
<!--            Video 7 - Yoga-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Yoga</h2>
                </div>
                <video id="video1" width="100%" poster="<?= $video_basepath; ?>video7.png" height="100%" preload="none">
                    <source src="<?= $video_basepath; ?>video7.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?= get_template_directory_uri(); ?>/dist/images/play_2.png" class="play-btn" />
            </div>
<!--            Video 8 - Dans-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Dans</h2>
                </div>
                <video id="video1" width="100%" poster="<?= $video_basepath; ?>video8.png" height="100%" preload="none">
                    <source src="<?= $video_basepath; ?>video8.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?= get_template_directory_uri(); ?>/dist/images/play_2.png" class="play-btn" />
            </div>
        </div>
        <div class="container text-wrapper">
            <div class="col-lg-12">
                <h3><strong>Vi har 100-tals träningspass att välja mellan</strong></h3>
                <p>
                    Träningspassen är mellan 5-60 minuter långa och du kan välja mellan att köra hårda fyspass, yoga och pilates, jobba på sexpacket, dansa loss, träna styrka,
                    kämpa upp uthållighet eller fixa till det där flåset. Utbudet är stort och varierat och växer ständigt.
                </p>
                <h3>Våra kategorier</h3>
                <p>
                    Core, Cykel, Dans, Fokus, Pilates, Puls, Styrka, Yoga, Gravidyoga.
                </p>
                <img src="<?= get_template_directory_uri(); ?>/dist/images/partners.png" class="partners img-responsive" />
            </div>
        </div>

    </div>
</section>
<section class="cast row">
        <div class="container">
            <div class="col-sm-8 pull-left">
                <div class="row">
                    <h2>För en större upplevelse</h2>
                    <h3>Träna framför TV'n med din Apple TV eller Chromecast</h3>
                </div>
            </div>
            <div class="col-sm-4 casticons">
                <div class="row">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/airplay.png" class="img-responsive pull-right"/>
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/chromecast.png" class="img-responsive pull-right"/>
                </div>
            </div>
        </div>
</section>
<section class="row appen">
    <div class="header">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/appen_header.jpg" class="img-responsive" />
    </div>
    <div class="container">
        <h2 class="text-center">Appen</h2>
    </div>
    <div class="container appen-wrapper">
        <p>
            Konceptet är enkelt och om vi får säga det själva, smått
            genialt. Vi har samlat hundratals filmer med PT-ledda träningspass i en pytteliten och behändig app.
        <p>
            Det enda du behöver göra är att ladda ner den och prova dig fram mellan
            mängder av olika träningsformer och instruktörer. Följ ett veckoprogram eller välj bland pass och enskilda övningar.</p>
        <p>
            Som om det inte räckte med träningsfilmerna så har vi även stoppat in en träningsdagbok i appen, funktion för GPS-träning, statistik, en skrytfunktion där du kan dela hur
            duktigt du är med dina vänner på sociala media och en hel del annat smått och gott...
        <p>
            Har du en <strong>Chromecast</strong> eller en <strong>AppleTV</strong> kan du dessutom enkelt njuta av filmerna på din TV.</p>
        <p>
            Du laddar enkelt ner appen från <a href="#">Appstore</a> eller <a href="#">Play Store</a>.
        </p>
    </div>
    <div class="container">
        <div class="round col-sm-6 col-md-3 text-center">
            <h3>Filmer</h3>
            <p>Välj bland hundratals träningsfilmer. Kör ett träningspass eller följ
                ett veckoprogram. Utbudet är stort och varierat. </p>
        </div>
        <div class="round col-sm-6 col-md-3 text-center">
            <h3>GPS</h3>
            <p>En powerwalk i skogen eller cykelturen till jobbet. Komplettera din träning med vår GPS-funktion.</p>
        </div>
        <div class="round col-sm-6 col-md-3 text-center">
            <h3>Profil</h3>
            <p>Håll i gång motivationen och få koll på dina träningstimmar och personliga resultat. </p>
        </div>
        <div class="round col-sm-6 col-md-3 text-center">
            <h3>Kalender</h3>
            <p> Här synkas dina genomförda
                träningspass för en enkel och
                övergriplig bild över hur din träningsvecka sett ut.</p>
        </div>
    </div>
</section>
<!--<section class="row kent">-->
<!--    <div class="container">-->
<!--        <div class="col-md-4">-->
<!--            <img src="--><?//= get_template_directory_uri(); ?><!--/dist/images/kent.png" class="img-responsive" />-->
<!--        </div>-->
<!--        <div class="col-md-8 kent-wrapper">-->
<!--            <blockquote>-->
<!--                <p>-->
<!--                    MoveApp är utvecklat för dig som skulle vilja träna men inte hinner, för dig som föredrar att träna för dig själv och för dig som vill kunna träna vad du vill,-->
<!--                vart du vill, när du vill.</p>-->
<!--                <p>-->
<!--                    Jag ser definitivt MoveApp som framtiden inom träning.-->
<!--                </p>-->
<!--                <p class="small">-->
<!--                    <strong>Kent Orrgren</strong><br>-->
<!--                    Entreprenör inom retail, träning och hälsa, Fd VD på Sats-->
<!--                </p>-->
<!---->
<!--            </blockquote>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section class="row komigang">
    <div class="container">
        <div class="text-wrapper col-md-8 col-md-offset-2">
            <h2>Kom igång - tre enkla steg!</h2>
            <p class="steps">
                1. Registrera dig och skapa ditt konto <a href="http://app.moveapp.se/register">här</a><br>
                2. Ladda ner appen från <a href="https://itunes.apple.com/us/app/moveapp/id998189654">App Store</a> / <a href="https://play.google.com/store/apps/details?id=com.timedev.moveapp">Google Play</a><br>
                3. Logga in och börja träna!
            </p>
        </div>
    </div>
</section>
<section class="row abonnemang">
    <div class="container">
        <h2 class="text-center">Abonnemang</h2>
    </div>
    <div class="container abonnemang-wrapper">
        <div class="col-md-6">
            <div class="panel">
                    <h2 class="rubrik">Gratis</h2>
                <div class="content">
                    <h4 class="price">0 kr / mån</h4>
                    <hr>
                    <ul class="features">
                        <li>5 träningsfilmer</li>
                        <li>100-tals enkilda övningar</li>
                        <li>GPS-träning</li>
                        <li>Kalender</li>
                        <li>Statistik</li>
                    </ul>
                    <div class="row">
                        <button class="btn col-xs-10 col-xs-offset-1" data-toggle="modal" data-target="#registerModal">Gratis</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel green">
                <h2 class="rubrik">Premium</h2>
                <div class="content">
                    <h4 class="price">99 kr / mån</h4>
                    <hr>
                    <ul class="features">
                        <li>100-tals träningsfilmer</li>
                        <li>100-tals enkilda övningar</li>
                        <li>Veckoprogram</li>
                        <li>GPS-träning</li>
                        <li>Kalender</li>
                        <li>Statistik</li>
                    </ul>
                    <div class="row">
                        <a href="http://app.moveapp.se/register/">
                            <button class="btn col-xs-10 col-xs-offset-1">Premium</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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
                    <div class="text-center divider col-xs-12">
                        <span class="or">eller</span>
                    </div>
                </div>
                <form>
                    <div class="form-group">
                        <label for="username">E-postadress</label>
                        <input type="email" id="username" class="form-control"  placeholder="E-post">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lösenord</label>
                        <input type="password" id="password" class="form-control" placeholder="Lösenord">
                    </div>
                    <div class="row submit">
                        <div class="col-xs-6 col-sm-5 col-sm-offset-1 text">
                            <a href="http://app.moveapp.se/password/reset">Glömt ditt lösenord?</a>
                        </div>
                        <div class="col-xs-6 col-sm-5">
                            <button type="submit" id="btn_login" class="btn btn-default pull-right">Logga in<i class="fa fa-spinner fa-pulse"></i></button>
                        </div>

                        <div class="errors"></div>
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
                <form>
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
                    <div class="row submit">
                        <div class="col-xs-6 col-sm-5 col-sm-offset-1 text">
                            <a href="http://app.moveapp.se/password/reset">Glömt ditt lösenord?</a>
                        </div>
                        <div class="col-xs-6 col-sm-5">
                            <button type="submit" id="btn_register" class="btn btn-default pull-right">Registrera<i class="fa fa-spinner fa-pulse"></i></button>
                        </div>

                        <div class="errors"></div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center">Inget konto? Registrera dig <a href="http://app.moveapp.se/register/">här!</a></p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->