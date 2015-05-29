<section class="infoheader row">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5 col-md-offset-6">
                <h1>Träna hemma</h1>
                <h4><p>Välj bland 100-tals träningsfilmer, allt samlat i en liten app.</p>

                    <p>99 kr i månaden, en prova på månad gratis. Inga bindningstider.</p></h4>
                <button class="btn">Påbörja min gratismånad!</button>
            </div>
        </div>
        <div class="appstore-wrapper row">
            <div class="col-sm-4 col-md-3 col-md-offset-6">
                <a href="https://play.google.com/store/apps/details?id=com.timedev.moveapp">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/playstore.png"
                         class="img-responsive"/>
                </a>
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="https://play.google.com/store/apps/details?id=com.timedev.moveapp">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/appstore.png"
                         class="img-responsive"/>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="row news">
    <div class="container">
        <h2 class="text-center">Nyheter</h2>
    </div>
    <div class="row news-wrapper">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_status' => 'publish'
        );
        $posts = get_posts($args);
        $x = 0;
        foreach ($posts as $post) {
            setup_postdata($post);
            $categories = get_the_category();
            if (has_post_thumbnail()) {
                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'homepage-thumb');

                if($x==0) {
                    echo '<article class="col-md-6 large">';
                    echo '<img src="' . $thumb['0'] . '" class="img-responsive" />';
                }else{
                    echo '<article class="col-md-3 col-sm-6">';
                    echo '<img src="' . $thumb['0'] . '" class="img-responsive" />';
                }?>
                    <div class="title-wrapper">
                        <div class="date"><?php echo $categories[0]->cat_name;?></div>
                        <h2>
                            <?php the_title();?>
                        </h2>
                        <div class="read-more">Läs mer &raquo;</div>
                    </div>

                    
                </article>

        <?php
                $x++;
            }
        }
        ?>

    </div>
    <div class="container text-center button-wrapper">
        <button class="btn text-center">Visa alla nyheter</button>
    </div>
</section>
<section class="row films">
    <div class="container">
        <h2 class="text-center">Filmerna</h2>
    </div>
    <div class="container-fluid filmer-wrapper">
        <div class="row thumbs-wrapper">
<!--            Video 1 - Fokus-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2 class="inverted">Fokus</h2>
                </div>
                <video id="video1" width="100%" height="100%" preload="metadata">
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/videos/video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/play_btn.png" class="play-btn" />
            </div>
<!--            Video 2 - Gravidyoga-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Gravidyoga</h2>
                </div>
                <video width="100%" height="100%" preload="metadata">
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/videos/video2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/play_btn.png" class="play-btn" />
            </div>
<!--            Video 3 - Core-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Core</h2>
                </div>
                <video id="video1" width="100%" height="100%" preload="metadata">
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/videos/video3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/play_btn.png" class="play-btn" />
            </div>

<!--            VIDEO 4 - Styrka-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2 class="inverted">Styrka</h2>
                </div>
                <video id="video1" width="100%" height="100%" preload="metadata">
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/videos/video4.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/play_btn.png" class="play-btn" />
            </div>
<!--            VIDEO 5 - pilates-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2>Pilates</h2>
                </div>
                <video id="video1" width="100%" height="100%" preload="metadata">
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/videos/video5.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/play_btn.png" class="play-btn" />
            </div>
<!--            VIDEO 6 - Kampsportsfys-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2 class="inverted">Puls</h2>
                </div>
                <video id="video1" width="100%" height="100%" preload="metadata">
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/videos/video6.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/play_btn.png" class="play-btn" />
            </div>
<!--            Video 7 - Yoga-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2 class="inverted">Yoga</h2>
                </div>
                <video id="video1" width="100%" height="100%" preload="metadata">
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/videos/video7.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/play_btn.png" class="play-btn" />
            </div>
<!--            Video 8 - Dans-->
            <div class="col-sm-6 col-md-3 thumb">
                <div class="title-wrapper">
                    <h2 class="inverted">Dans</h2>
                </div>
                <video id="video1" width="100%" height="100%" preload="metadata">
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/videos/video8.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/play_btn.png" class="play-btn" />
            </div>
        </div>
        <div class="container text-wrapper">
            <div class="col-lg-7">
                <p>
                    Träningspassen är mellan 5-60 minuter långa och du kan välja mellan att köra hårda fyspass, yoga och pilates, jobba på sexpacket, dansa loss, träna styrka,
                    kämpa upp uthållighet eller fixa till det där flåset. Utbudet är stort och varierat och växer ständigt.
                </p>
                <h3>Våra kategorier</h3>
                <p>
                    Core, Cykel, Dans, Fokus, Pilates, Puls, Styrka, Yoga, Gravidyoga.
                </p>
            </div>
        </div>

    </div>
</section>
<section class="row appen">
    <div class="header">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/appen_header.png" class="img-responsive" />
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
<section class="row kent">
    <div class="container">
        <div class="col-md-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/kent.png" class="img-responsive" />
        </div>
        <div class="col-md-8 kent-wrapper">
            <blockquote>
                <p>
                    MoveApp är utvecklat för dig som skulle vilja träna men inte hinner, för dig som föredrar att träna för dig själv och för dig som vill kunna träna vad du vill,
                vart du vill, när du vill.</p>
                <p>
                    Jag ser definitivt MoveApp som framtiden inom träning.
                </p>
                <p class="small">
                    <strong>Kent Orrgren</strong><br>
                    Entreprenör inom retail, träning och hälsa, Fd VD på Sats
                </p>

            </blockquote>
        </div>
    </div>
</section>
<section class="row abonnemang">
    <div class="container">
        <h2 class="text-center">Abonnemang</h2>
    </div>
    <div class="container abonnemang-wrapper">
        <div class="container-fluid panel panel-default ">
            <h2 class="col-md-8 col-md-offset-2">100-tals träningsfilmer,<br> allt samlat i en liten app. </h2>
            <div class="col-md-12 text-center">
                <h4>
                    <strong>99 kr </strong>/ mån
                </h4>
                <h5>
                    Inga bindningstider
                </h5>
                <button class="btn">Påbörja min gratismånad!</button>
                <div class="appstore-wrapper">
                    <div class="col-sm-6 col-md-5 col-md-offset-1">
                        <a href="https://play.google.com/store/apps/details?id=com.timedev.moveapp">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/playstore.png"
                                 class="img-responsive"/>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <a href="https://play.google.com/store/apps/details?id=com.timedev.moveapp">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/appstore.png"
                                 class="img-responsive"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>