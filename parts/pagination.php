<?php 
if ( ! defined( 'ABSPATH' ) ) exit;

$args = array(
    'mid_size' => 2,
    'screen_reader_text' => ' ',
    'next_text' => '&raquo;',
    'prev_text' => '&laquo;'
);

the_posts_pagination($args);