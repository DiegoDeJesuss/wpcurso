<?php
/**
 * Theme functions for Curso theme
 */

if (!function_exists('curso_enqueue_assets')) {

    function curso_enqueue_assets() {

        // Bootstrap CSS
        wp_enqueue_style(
            'bootstrap-css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
            array(),
            '5.3.2'
        );

        // style.css principal do tema
        wp_enqueue_style(
            'curso-style',
            get_stylesheet_uri(),
            array('bootstrap-css'),
            wp_get_theme()->get('Version')
        );

        // template.css
        wp_enqueue_style(
            'curso-template',
            get_template_directory_uri() . '/css/template.css',
            array('curso-style'),
            wp_get_theme()->get('Version')
        );

        // Bootstrap JS
        wp_enqueue_script(
            'bootstrap-js',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
            array(),
            '5.3.2',
            true
        );
    }

    add_action('wp_enqueue_scripts', 'curso_enqueue_assets');
}


/**
 * Suporte básico do tema
 */
add_action('after_setup_theme', function () {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support(
        'html5',
        array(
            'search-form',
            'gallery',
            'caption'
        )
    );
});