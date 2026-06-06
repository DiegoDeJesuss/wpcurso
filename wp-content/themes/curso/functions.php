<?php

// Carrega os arquivos CSS e JS do tema
function curso_assets() {

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
    );

    // CSS personalizado
    wp_enqueue_style(
        'template',
        get_template_directory_uri() . '/css/template.css'
    );

    // Bootstrap JavaScript
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array(),
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'curso_assets');


// Recursos básicos do tema
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


// Registrando nossos menus

register_nav_menus(array(
    'my_main_menu' => __('Menu Principal')
));