<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ApplicationRaven
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page">
        <header>
            <div class="container">
                <div class="header">
                    <div class="logo">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </div>
                    <div class="nav-menu">
                        <nav>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary-menu',
                                    'container_class' => 'raven-menu'
                                )
                            );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main>