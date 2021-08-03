<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @return void
 */
function applicationraven_setup()
{
    /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
    add_theme_support('title-tag');

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1568, 9999);

    register_nav_menus(
        array(
            'primary' => esc_html__('Primary menu', 'applicationraven')
        )
    );

    /*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );
}
add_action('after_setup_theme', 'applicationraven_setup');


/**
 * Enqueue scripts and styles.
 *
 * @return void
 */

//Main stylesheet
function applicationraven_scripts()
{
    wp_enqueue_style('applicationraven-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('googlefont-spartan', '//fonts.googleapis.com/css2?family=Spartan&display=swap', array());
    wp_enqueue_style('googlefont-sen', '//fonts.googleapis.com/css2?family=Sen&display=swap', array());
}
add_action('wp_enqueue_scripts', 'applicationraven_scripts');
