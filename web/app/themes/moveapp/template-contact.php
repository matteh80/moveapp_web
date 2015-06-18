<?php
/**
 * Template Name: Contact Template
 */
?>
<?php get_template_part('templates/page', 'header'); ?>

<div class="row">
    <div class="container-fluid">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Namn</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Förnamn Efternamn" required="true">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email-adress" required="true">
                </div>
            </div>
            <div class="form-group">
                <label for="subject" class="col-sm-2 control-label">Ämne</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject" placeholder="Ämne">
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Meddelande</label>
                <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="subject" placeholder="Ämne">-->
                    <textarea class="form-control" rows="5" placeholder="Meddelande"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">SKICKA</button>
                </div>
            </div>
        </form>
    </div>
</div>





<?php the_posts_navigation(); ?>
