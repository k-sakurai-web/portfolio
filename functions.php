<?php
// cssの読み込み
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    // google fonts
    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Spicy+Rice&display=swap" rel="stylesheet',
        array(),
        '1.0'
    );

    // reset style
    wp_register_style(
        'reset_style',
        get_template_directory_uri() . '/css/reset.css',
        array(),
        '1.0'
    );

    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'google-fonts_style'),
        '1.0'
    );

    // anime style
    wp_enqueue_style(
        'anime_style',
        get_template_directory_uri() . '/css/anime.css',
        array('reset_style', 'google-fonts_style'),
        '1.0'
    );

    // Slick
    wp_enqueue_style(
        'slick-css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', 
        array('reset_style', 'google-fonts_style'), 
        '1.0'
    );
}

 // jsの読み込み
add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts()
{
     // デフォルトのjQueryを削除
    wp_deregister_script('jquery');

    // jQueryを読み込む
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        array(),
        '1.0',
        true
    );

    // メインのスクリプトを読み込む
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/main.js',
        array('jquery_script'),
        '1.0',
        true
    );

     // SlickのJSを追加
    wp_enqueue_script(
        'slick-js',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
        array('jquery_script'),
        '1.0',
        true
    );
}
?>

