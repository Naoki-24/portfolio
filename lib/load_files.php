<?php 
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('wp_enqueue_scripts','enqueue_style');
add_action('wp_enqueue_scripts','enqueue_script');

function enqueue_style() {
    wp_enqueue_style('general-style', get_asset_path('css', 'common.min.css'));
    
    if (is_home()) {
        wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_style('btn', get_asset_path('css', 'component/btn.min.css'));
        wp_enqueue_style('contact-form', get_asset_path('css', 'component/contact-form.min.css'));
        wp_enqueue_style('label', get_asset_path('css', 'component/label.min.css'));
        wp_enqueue_style('product-card', get_asset_path('css', 'component/product-card.min.css'));
        wp_enqueue_style('skill-item', get_asset_path('css', 'component/skill-item.min.css'));
        wp_enqueue_style('tab', get_asset_path('css', 'component/tab.min.css'));
        
        wp_enqueue_style('home', get_asset_path('css', 'project/home.min.css'));
    } else {
        wp_enqueue_style('page-title', get_asset_path('css', 'component/page-title.min.css'));
        wp_enqueue_style('breadcrumb', get_asset_path('css', 'component/breadcrumb.min.css'));
    }    
    
    
    if (is_page(11)) {
        wp_enqueue_style( 'page-style', get_asset_path('css', 'project/profile.min.css') );
        wp_enqueue_style('btn', get_asset_path('css', 'component/btn.min.css'));
    }
    elseif(is_page(9)) {
        wp_enqueue_style('contact-form', get_asset_path('css', 'component/contact-form.min.css'));
        wp_enqueue_style('page-style', get_asset_path('css', 'project/contact.min.css'));

    }
    elseif(is_post_type_archive('skills')) {
        wp_enqueue_style('skill-item', get_asset_path('css', 'component/skill-item.min.css'));
        wp_enqueue_style('page-style', get_asset_path('css', 'project/skills.min.css'));
    }
    elseif(is_post_type_archive('products')) {
        wp_enqueue_style('product-card', get_asset_path('css', 'component/product-card.min.css'));
        wp_enqueue_style('page-style', get_asset_path('css', 'project/products.min.css'));
        wp_enqueue_style('pagination', get_asset_path('css', 'component/pagination.min.css'));
    }
    elseif(is_post_type_archive('news')) {
        wp_enqueue_style('label', get_asset_path('css', 'component/label.min.css'));
        wp_enqueue_style('page-style', get_asset_path('css', 'project/news.min.css'));
        wp_enqueue_style('pagination', get_asset_path('css', 'component/pagination.min.css'));
    }
}

function enqueue_script() {
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', '1.0', true);
    wp_enqueue_script('utility', get_asset_path('js', 'utility.min.js'), '1.0', true);
    wp_enqueue_script('drawer', get_asset_path('js', 'drawer.min.js'), ['jquery'], '1.0', true);
    
    if ( is_home() ) {
        wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], '1.0', true);
        wp_enqueue_script('product-cart', get_asset_path('js', 'product-card.min.js'), ['slick'], '1.0', true);
        wp_enqueue_script('tab', get_asset_path('js', 'tab.min.js'), ['jquery'], '1.0', true);
    }
}