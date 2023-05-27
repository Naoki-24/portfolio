<?php

if ( ! defined( 'ABSPATH' ) ) exit;

function setup() {
    register_nav_menus(
        array(
            'global-menu' => 'グローバルメニュー',
            'footer-menu' => 'フッターメニュー',
            'mobile-menu' => 'モバイルメニュー'
        )
        );
    
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','setup');