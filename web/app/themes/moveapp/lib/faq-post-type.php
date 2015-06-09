<?php

// let's create the function for the custom type
function custom_post_faq() {
    // creating (registering) the custom type
    register_post_type( 'faq', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array( 'labels' => array(
            'name' => __( 'FAQ', 'sage' ), /* This is the Title of the Group */
            'singular_name' => __( 'FAQ', 'sage' ), /* This is the individual type */
            'all_items' => __( 'All FAQ', 'sage' ), /* the all items menu item */
            'add_new' => __( 'Add New', 'sage' ), /* The add new menu item */
            'add_new_item' => __( 'Add New FAQ', 'sage' ), /* Add New Display Title */
            'edit' => __( 'Edit', 'sage' ), /* Edit Dialog */
            'edit_item' => __( 'Edit FAQ', 'sage' ), /* Edit Display Title */
            'new_item' => __( 'New FAQ', 'sage' ), /* New Display Title */
            'view_item' => __( 'View FAQ', 'sage' ), /* View Display Title */
            'search_items' => __( 'Search FAQ', 'sage' ), /* Search Custom Type Title */
            'not_found' =>  __( 'Nothing found in the Database.', 'sage' ), /* This displays if there are no entries yet */
            'not_found_in_trash' => __( 'Nothing found in Trash', 'sage' ), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
        ), /* end of arrays */
            'description' => __( 'Frequently Asked Questions', 'sage' ), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon' => 'dashicons-welcome-learn-more', /* the icon for the custom post type menu */
            'rewrite'	=> array( 'slug' => 'faq', 'with_front' => false ), /* you can specify its url slug */
            'has_archive' => 'faq', /* you can rename the slug here */
            'capability_type' => 'post',
            'hierarchical' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'revisions', 'sticky')
        ) /* end of options */
    ); /* end of register post type */

    /* this adds your post categories to your custom post type */
    //register_taxonomy_for_object_type( 'category', 'faq' );
    /* this adds your post tags to your custom post type */
//    register_taxonomy_for_object_type( 'post_tag', 'faq' );

}

// adding the function to the Wordpress init
add_action( 'init', 'custom_post_faq');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add custom categories (these act like categories)
register_taxonomy( 'custom_cat_faq',
    array('faq'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    array('hierarchical' => true,     /* if this is true, it acts like categories */
        'labels' => array(
            'name' => __( 'FAQ Categories', 'sage' ), /* name of the custom taxonomy */
            'singular_name' => __( 'FAQ Category', 'sage' ), /* single taxonomy name */
            'search_items' =>  __( 'Search FAQ Categories', 'sage' ), /* search title for taxomony */
            'all_items' => __( 'All FAQ Categories', 'sage' ), /* all title for taxonomies */
            'parent_item' => __( 'Parent FAQ Category', 'sage' ), /* parent title for taxonomy */
            'parent_item_colon' => __( 'Parent FAQ Category:', 'sage' ), /* parent taxonomy title */
            'edit_item' => __( 'Edit FAQ Category', 'sage' ), /* edit custom taxonomy title */
            'update_item' => __( 'Update FAQ Category', 'sage' ), /* update title for taxonomy */
            'add_new_item' => __( 'Add New FAQ Category', 'sage' ), /* add new title for taxonomy */
            'new_item_name' => __( 'New FAQ Category Name', 'sage' ) /* name title for taxonomy */
        ),
        'show_admin_column' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'faq-slug' ),
    )
);

// now let's add custom tags (these act like categories)
register_taxonomy( 'custom_tag',
    array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    array('hierarchical' => false,    /* if this is false, it acts like tags */
        'labels' => array(
            'name' => __( 'Custom Tags', 'sage' ), /* name of the custom taxonomy */
            'singular_name' => __( 'Custom Tag', 'sage' ), /* single taxonomy name */
            'search_items' =>  __( 'Search Custom Tags', 'sage' ), /* search title for taxomony */
            'all_items' => __( 'All Custom Tags', 'sage' ), /* all title for taxonomies */
            'parent_item' => __( 'Parent Custom Tag', 'sage' ), /* parent title for taxonomy */
            'parent_item_colon' => __( 'Parent Custom Tag:', 'sage' ), /* parent taxonomy title */
            'edit_item' => __( 'Edit Custom Tag', 'sage' ), /* edit custom taxonomy title */
            'update_item' => __( 'Update Custom Tag', 'sage' ), /* update title for taxonomy */
            'add_new_item' => __( 'Add New Custom Tag', 'sage' ), /* add new title for taxonomy */
            'new_item_name' => __( 'New Custom Tag Name', 'sage' ) /* name title for taxonomy */
        ),
        'show_admin_column' => true,
        'show_ui' => true,
        'query_var' => true,
    )
);

/*
    looking for custom meta boxes?
    check out this fantastic tool:
    https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
*/


?>
