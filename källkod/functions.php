<?php
/* Registrerar meny*/
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
    register_nav_menus(array(
            'main-menu' => 'top menu',
        )
    );
}

add_theme_support( 'custom-logo' );

function widgets_init() {
    register_sidebar( array(
        'name' => __('Scrisoft Sidebar', 'scrisoft' ),
        'id' => 'sidebar-1',
        'before_title' => '<div id="cat">',
        'after_title' => '</div>',
        ));
}
add_action( 'widgets_init', 'widgets_init');
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 500, 250);

function axlu_deep_blue_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        array(
            'name'               => 'Contact Form 7', // The plugin name.
            'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
            'source'             => '', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '4.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
    );
}
?>