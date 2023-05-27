<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

include_once __DIR__.'/lib/load_files.php';

include_once(__DIR__.'/lib/theme-setup.php');

include_once(__DIR__.'/lib/adminbar.php');

include_once __DIR__.'/lib/contact7.php';

include_once __DIR__.'/lib/set_posts_per_page.php';

include_once __DIR__.'/lib/post_types.php';

include_once __DIR__.'/lib/taxonomy.php';

function get_asset_path($asset, $img_file) {
    return esc_url(get_template_directory_uri() . '/assets' .'/'. $asset .'/'. $img_file);
}