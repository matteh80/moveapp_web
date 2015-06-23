<?php
/**
 * Template Name: Narrow Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="col-md-10 col-md-offset-1">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
<?php endwhile; ?>
