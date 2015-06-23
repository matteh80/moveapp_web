<?php
/**
 * Template Name: Contact Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="contact col-md-10 col-md-offset-1">
        <?php get_template_part('templates/content', 'page'); ?>
        <form>
            <div class="form-group col-md-6">
                <label for="name">Namn *</label>
                <input type="text" class="form-control" id="name" placeholder="Ditt namn" required="required">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" placeholder="Din e-mail" required="required">
            </div>
            <div class="form-group col-md-6">
                <label for="subject">Ämne</label>
                <input type="text" class="form-control" id="subject" placeholder="Ämne">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Ex. skärmdump eller annat dokument.</p>
            </div>
            <div class="col-xs-12">
                <textarea class="form-control" rows="7"></textarea>
            </div>
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary">Skicka ditt meddelande</button>
            </div>

        </form>
    </div>
<?php endwhile; ?>

