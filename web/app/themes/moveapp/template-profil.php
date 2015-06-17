<?php
/**
 * Template Name: User Template
 */
?>
<?php get_template_part('templates/page', 'header'); ?>

<div class="container">
    <div class="col-md-4 col-md-offset-4 text-center picture-wrapper">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/empty_picture.png"
             class="img-responsive profile-picture img-circle"/>
    </div>
</div>
<div class="container text-center">
    <h1 class="name"></h1>
    <h2 class="loc">asdasd</h2>
</div>

<div class="container text-center">
    <hr>
    <div class="subscription">
        <h4>Du har inget aktivt abonnemang</h4>
        <button class="avsluta">Avsluta abonnemang</button>
    </div>

</div>
