<?php
if ( ! function_exists( 'SJ_Web_setup' ) ) :

function SJ_Web_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'SJ_Web', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'SJ_Web' ),
        'social'  => __( 'Social Links Menu', 'SJ_Web' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // SJ_Web_setup

add_action( 'after_setup_theme', 'SJ_Web_setup' );


if ( ! function_exists( 'SJ_Web_init' ) ) :

function SJ_Web_init() {

    
    // Use categories with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin*/
    /* This code will be replaced by register_post_type calls. */
    /* Pinegrow generated Custom Post Types End */

}
endif; // SJ_Web_setup

add_action( 'init', 'SJ_Web_init' );

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin*/
/* Pinegrow generated Include Resources End */
?>