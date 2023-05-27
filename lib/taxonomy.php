<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

add_action('init', 'custom_taxonomy');
function custom_taxonomy() {
    $args = array(
        'public' => true,
        'show_ui' => true,
    );

    register_taxonomy(
        'site-type',
        'products',
        array_merge(
            $args,
            array(
            'label' => '種類',
        ))
    );

    register_taxonomy(
        'cms',
        'products',
        array_merge(
            $args,
            array(
            'label' => 'CMS',
        ))
    );

    register_taxonomy(
        'working',
        'products',
        array_merge(
            $args,
            array(
            'label' => '作業範囲',
        ))
    );

    register_taxonomy(
        'atmosphere',
        'products',
        array_merge(
            $args,
            array(
            'label' => '雰囲気',
        ))
    );

    register_taxonomy(
        'skill_type',
        'skills',
        array_merge(
            $args,
            array(
            'label' => 'スキルタイプ',
        ))
    );
}