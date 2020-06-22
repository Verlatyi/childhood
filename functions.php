<?php
add_action('wp_enqueue_scripts', 'childhood_styles');

add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles(){
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
};

function childhood_scripts(){
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);

    wp_deregister_script( 'jquery' ); //отключение jQuery внутри wp
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' ); //подключаю самую последнию версию jQuery в Wp
    wp_enqueue_script('jquery'); //ставим в очередь и включаем

};

add_theme_support('custom-logo');

add_theme_support('post-thumbnails');
?>