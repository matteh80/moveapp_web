<?php
/**
 * Template Name: FAQ Template
 */
?>
<?php get_template_part('templates/page', 'header'); ?>

<?php
// no default values. using these as examples
$taxonomies = array(
    'custom_cat_faq'
);

$args = array(
    'orderby'           => 'name',
    'order'             => 'ASC',
    'hide_empty'        => true
);

$terms = get_terms('custom_cat_faq', $args);
$i=1;?>
<div class="row">
    <div class="col-md-5">
        <?php
        foreach($terms as $term):
            if($i%2 != 0) :
                echo '<h3>'.$term->name.'</h3>';

                $args = array(
                    'post_type' => 'faq',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'custom_cat_faq',
                            'field' => 'name',
                            'terms' => $term->name
                        )
                    )
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) : $query->the_post();
                    get_template_part('templates/content', 'faq');
                endwhile;
            endif;
            $i++;
        endforeach;
        ?>
    </div>

    <div class="col-md-5 col-md-offset-2">
        <?php
        foreach($terms as $term):
            if($i%2 == 0) :
                echo '<h3>'.$term->name.'</h3>';

                $args = array(
                    'post_type' => 'faq',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'custom_cat_faq',
                            'field' => 'name',
                            'terms' => $term->name
                        )
                    )
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) : $query->the_post();
                    get_template_part('templates/content', 'faq');
                endwhile;
            endif;
            $i++;
        endforeach;
        ?>
    </div>
</div>





<?php the_posts_navigation(); ?>
