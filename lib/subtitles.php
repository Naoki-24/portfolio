<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

function get_subtitle() {

    if (is_post_type_archive('news')) {
        $subtitle = 'NEWS';
    }

    elseif (is_post_type_archive('products')) {
        $subtitle = 'PRODUCT';
    }

    elseif (is_post_type_archive('skills')) {
        $subtitle = 'SKILL';
    }

    elseif (is_page(9)) {
        $subtitle = 'CONTACT';
    }

    elseif (is_page(11)) {
        $subtitle = 'PROFILE';
    }

    elseif (is_page(3)) {
        $subtitle = 'PRIVACY POLICY';
    }

    elseif(is_404()){
        $subtitle = '404';
    }

    elseif(is_singular('news')){
        $subtitle = 'NEWS';
    }

    return $subtitle;
}

