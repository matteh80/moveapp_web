<?php
/**
 * Template Name: User Template
 */
?>
<?php get_template_part('templates/page', 'header'); ?>

<div class="container">
    <div class="col-md-3 kcal-time">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/profil_kcal.png" class="img-responsive" />
            </div>
        </div>
        <div class="row text-center">
            <h3 class="kcal_value">0</h3>
            <h4>kcal</h4>
        </div>
    </div>
    <div class="col-md-6 text-center picture-wrapper">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/empty_picture.png"
             class="img-responsive profile-picture img-circle"/>
    </div>
    <div class="col-md-3 kcal-time">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/profil_time.png" class="img-responsive" />
            </div>
        </div>
        <div class="row text-center">
            <h3 class="time_value">0</h3>
            <h4>min</h4>
        </div>
    </div>
</div>
<div class="container text-center">
    <h1 class="name"></h1>
    <h2 class="loc"></h2>
</div>

<div class="container text-center">
    <hr>
    <div class="subscription">
        <h4>Du har inget aktivt abonnemang</h4>
        <button class="avsluta btn btn-warning">Avsluta abonnemang</button>
        <a href="#" target="blank"><button class="aktivera btn btn-primary">Aktivera abonnemang</button></a>
    </div>
    <hr>
    <button class="logout btn btn-danger">Logga ut</button>
</div>
