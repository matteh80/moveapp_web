<?php
/**
 * Template Name: Contact Template
 */
?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="col-md-8">
    <h2>Behöver du hjälp?</h2>
    <h4>
        <p>
            Vi gör allt för att MoveApp ska vara enkelt att använda. Men ibland kan det enkla också krångla.
            Under Vanliga frågor kan du själv hitta svar på dina frågor om hur du använder MoveApp!
        </p>
        <p>
            Men om du ändå inte hittar det du söker under Vanliga frågor så är du välkommen att kontakta oss.
            Skicka ett mail till support@moveapp.se eller ställ din fråga direkt till oss på Facebook. Vi svarar
            helgfri vardag mellan 9:00-15:00.
        </p>
    </h4>
</div>
<div class="col-md-4">

</div>
<div class="col-md-8 col-md-offset-2">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>











<?php the_posts_navigation(); ?>
