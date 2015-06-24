<?php
/**
 * Template Name: Contact Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="contact col-md-10 col-md-offset-1">
        <?php get_template_part('templates/content', 'page'); ?>

        <div class="alert alert-success alert-dismissable" id="mailsent" style="display:none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Tack!</strong> Ditt meddelande är skickat och vi återkommer så snart vi kan.
        </div>

        <form id="contact" method="post" class="form" role="form" data-async>
            <div class="form-group col-md-6">
                <label for="name">Namn *</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ditt namn" required="required">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Din e-mail" required="required">
            </div>
            <div class="form-group col-md-6">
                <label for="subject">Ämne</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Ämne">
            </div>
<!--            <div class="form-group col-md-6">-->
<!--                <label for="exampleInputFile">Bifoga fil</label>-->
<!--                <input type="file" id="exampleInputFile">-->
<!--                <p class="help-block">Ex. skärmdump eller annat dokument.</p>-->
<!--            </div>-->
            <div class="col-xs-12">
                <label for="message">Meddelande</label>
                <textarea class="form-control" id="message" name="message" placeholder="Ditt meddelande" rows="7"></textarea>
            </div>
            <div class="col-xs-12">
                <div class="g-recaptcha" data-sitekey="6Le_fAgTAAAAACHe4SSNW1aJTNUMH2MWfg5jrRVt"></div>
            </div>
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-submit">Skicka ditt meddelande<i class="fa fa-spinner fa-pulse"></i></button>
            </div>

        </form>
    </div>
<?php endwhile; ?>

