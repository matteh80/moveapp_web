<?php
/**
 * Template Name: FAQ Template
 */
?>
<?php get_template_part('templates/page', 'header'); ?>

<?php $args = array(
    'posts_per_page'   => 10,
    'offset'           => 0,
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'faq',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true
);
$query = new WP_Query( $args ); ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>
<?php get_template_part('templates/content', 'post'); ?>
<?php endwhile; ?>
<?php the_posts_navigation(); ?>
