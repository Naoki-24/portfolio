<?php

if ( ! defined( 'ABSPATH' ) ) exit;

function set_adminbar( $adminbar ) {
    $adminbar  = false;
    return $adminbar;
}
if (! current_user_can('edit_posts')){
    show_admin_bar(false);
}
add_filter( 'show_admin_bar', 'set_adminbar' );