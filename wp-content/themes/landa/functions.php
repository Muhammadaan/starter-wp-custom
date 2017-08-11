<?php

add_action('login_enqueue_scripts', 'my_login_logo' );
add_filter('login_headerurl', 'my_login_logo_url' );
add_filter('login_headertitle', 'my_login_logo_url_title' );

function my_login_logo() 
{ 
    ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo $logo['url'] ?>)!important;
            width: 100%!important;
            background-size: 100%!important;
        }
    </style>
    <?php 
}

function my_login_logo_url() 
{
    return home_url();
}

function my_login_logo_url_title() 
{
    return 'Mister Aladin';
}

function site_custom_image($fieldname)
{
    $logo = get_field($fieldname, 'option');
    return $logo['url'];
}

/**
* List of theme support functions
*/
// Add WordPress theme support
if (function_exists('add_theme_support'))
{
    // Add post thumbnail feature
    add_theme_support('post-thumbnails');
    add_image_size('small', 90, 90, true);
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}
function general_option()
{
    if( function_exists('acf_add_options_page') ) :
        acf_add_options_page(array(
            'page_title'    => 'Options',
            'menu_title'    => 'Options',
            'menu_slug'     => 'options',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    endif;
}
add_action('init', 'general_option');
// add_action('init', 'post_type_accommodation');


//=============================Begin Services CRUD==================================
add_action('init', 'post_type_services');
function post_type_services() {
    $labels = array(
        'name' => __('Services'),
        'singular_name' => __('Services'),
        'add_new' => __('Add Services'),
        'add_new_item' => __('Add Services'),
        'edit_item' => __('Edit Services'),
        'new_item' => __('New Services'),
        'view_item' => __('View Services'),
        'search_items' => __('Search Services'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'query_var' => true,
        //'rewrite' => false,
        //'rewrite' => array( 'slug' => 'news', 'with_front' => true ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true,
        /*'menu_icon' => get_template_directory_uri() . '/assets/img/icon-testimonial.png',*/
        'exclude_from_search' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
      );

    register_post_type( 'services' , $args );
}

add_action( 'init', 'theme_services' );
function theme_services() {

    register_taxonomy('services_category', 'services',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __('Category'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'services/category'),
            'singular_label' => __('Services Category')
        )
    );
    
    register_taxonomy('services_tag', 'services',
        array(
            'hierarchical' => false,
            'show_admin_column' => true,
            'label' => __('Tag'),
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'services/tag'),
            'singular_label' => __('Services Tag')
        )
    );
}
//============================End Services CRUD================================



function wptp_add_tags_to_attachments() {
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}
add_action( 'init' , 'wptp_add_tags_to_attachments' );

