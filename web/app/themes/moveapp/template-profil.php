<?php
/**
 * Template Name: User Template
 */
?>
<?php get_template_part('templates/page', 'header'); ?>

<div class="container narrow">
    <div class="col-sm-6 col-sm-push-3 text-center picture-wrapper">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/empty_picture.png"
             class="img-responsive profile-picture img-circle"/>
    </div>
    <div class="col-xs-6 col-sm-3 col-sm-pull-6 kcal-time">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/profil_kcal.png" class="img-responsive"/>
            </div>
        </div>
        <div class="row text-center">
            <h3 class="kcal_value">0</h3>
            <h4>kcal</h4>
        </div>
    </div>

    <div class="col-xs-6 col-sm-3 kcal-time">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/profil_time.png" class="img-responsive"/>
            </div>
        </div>
        <div class="row text-center">
            <h3 class="time_value">0</h3>
            <h4>min</h4>
        </div>
    </div>
</div>
<div class="container narrow text-center">
    <h1 class="name">
        <span id="first_name" class="editable"><input type="text"></span>
        <span id="last_name" class="editable"><input type="text"></span>
    </h1>

    <h2 class="loc editable" data-value="location"><input type="text"></h2>
</div>
<hr>
<div class="container narrow settings">
    <form class="form settingsform" role="form">
        <div class="col-md-3 text-center">
            <h4>Vikt</h4>

            <h2 class="weight editable"><input type="number" class="form-control" value="">kg</h2>
        </div>
        <div class="col-md-3 text-center">
            <h4>Längd</h4>

            <h2 class="height editable"><input type="number" class="form-control" value="">cm</h2>
        </div>
        <div class="col-md-3 text-center">
            <h4>Kön</h4>

            <h2 class="gender editable"><input type="hidden" class="form-control" value="F"><i
                    class="fa fa-female gender-icon"></i></h2>
        </div>
        <div class="col-md-3 text-center">
            <h4>Födelsedatum</h4>

            <h2 class="birth editable"><input type="date" class="form-control" value="" id=""></h2>
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-primary save-changes">Spara ändringar<i class="fa fa-spinner fa-pulse"></i></button>
        </div>
    </form>

</div>
<div class="container text-center">
    <hr>
    <div class="subscription">
        <h4>Du har inget aktivt abonnemang</h4>
        <button class="avsluta btn btn-warning">Avsluta abonnemang</button>
        <a href="#" target="blank">
            <button class="aktivera btn btn-primary">Aktivera abonnemang</button>
        </a>
    </div>
    <hr>
    <div class="row">
        <button class="logout btn btn-danger">Logga ut</button>
    </div>
    <div class="row" style="margin-top:20px">
        <button class="btn btn-default" data-toggle="modal" data-target=".change-pass-modal">Ändra lösenord<i
                class="fa fa-chevron-right" style="font-size: inherit"></i></button>
    </div>

</div>

<div class="modal fade change-pass-modal" tabindex="-1" role="dialog" aria-labelledby="Byt lösenord">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form id="change-pass-form">
                <div class="form-group has-feedback">
                    <label for="oldpass">Nuvarande lösenord</label>
                    <input type="password" class="form-control oldpass" id="oldpass" placeholder="Nuvarande lösenord" aria-describedby="inputSuccess2Status">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="newpass1">Nytt lösenord (minst 8 tecken)</label>
                    <input type="password" class="form-control newpass1" id="newpass1" placeholder="Nytt lösenord">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="newpass2">Repetera nytt lösenord</label>
                    <input type="password" class="form-control newpass2" id="newpass2" placeholder="Nytt lösenord igen">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
                <div class="alert alert-success" style="display: none;">Ditt lösenord har ändrats</div>
                <button type="button" class="btn btn-primary change-pass-button" disabled>Ändra lösenord</button>
            </form>
        </div>
    </div>
</div>
