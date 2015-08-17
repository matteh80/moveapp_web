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
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="name">Namn *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ditt namn" required="required">
                </div>
                <div class="form-group col-md-4">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Din e-mail" required="required">
                </div>
                <div class="form-group col-md-4">
                    <label for="subject">Ämne</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Ämne">
                </div>
            </div>
            <hr>
            <div class="row">

                <div class="form-group col-md-4">
                    <label for="name">Telefonmodell</label>
                    <input type="text" class="form-control" id="phonemodel" name="phonemodel" placeholder="Ex. iPhone 5 / Samsung Galaxy S6">
                </div>
                <div class="form-group col-md-2">
                    <label for="os">OS-version</label>
                    <input type="text" class="form-control" id="os" name="os" placeholder="Ex. iOS 8">
                </div>
                <div class="form-group col-md-6">
                    <label for="errormsg">Ev. felmeddelande</label>
                    <input type="text" class="form-control" id="errormsg" name="errormsg" placeholder="Ev. felmeddelande">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <label for="message">Meddelande</label>
                    <textarea class="form-control" id="message" name="message" placeholder="Ditt meddelande" rows="7"></textarea>
                </div>
                <div class="col-xs-12" id="recaptcha">
                    <div class="g-recaptcha" data-sitekey="6Le_fAgTAAAAACHe4SSNW1aJTNUMH2MWfg5jrRVt"></div>
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-submit">Skicka ditt meddelande<i class="fa fa-spinner fa-pulse"></i></button>
                </div>
            </div>

        </form>
    </div>
<?php endwhile; ?>

