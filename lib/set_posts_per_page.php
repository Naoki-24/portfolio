<?php 
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'pre_get_posts', 'custom_posts_per_page' );

function custom_posts_per_page( $query ) {
    if ( is_post_type_archive( 'products' ) && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 6 );
    }

    if ( is_post_type_archive( 'news' ) && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 10 );
    }
}
