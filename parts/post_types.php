<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

add_action('init', 'post_type');
function post_type() {
    $def_args = array(
        'public' => false,
        'has_archive' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'supports' => [
            'title',
            'editor'
        ]
    );

    $products_args = array_merge(
        $def_args, 
        array(
            'label' => '制作実績',
            'supports' => [
                'title',
                'thumbnail',
            ])
            );

    $skills_args = array_merge(
        $def_args,
        array(
            'label' => 'スキル',
            'supports' => [
                'title',
            ])
            );

    $news_args = array_merge(
        $def_args,
        array(
            'label' => 'お知らせ',
            'public' => true,
            'supports' => [
                'title',
                'editor',

            ])
            );
        
    
    register_post_type('products', $products_args);
    register_post_type('skills', $skills_args);
    register_post_type('news', $news_args);

}