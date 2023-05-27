<?php if ( ! defined( 'ABSPATH' ) ) exit; 

include TEMPLATEPATH.'/lib/subtitles.php';
include TEMPLATEPATH.'/parts/breadcrumb.php';

get_header();
?>

<div class="c-page-title-wrapper l-full-width">
    <div class="c-page-title-container">
        <h1 class="c-page-title">
            <span class="c-page-title--en">
                <?php echo get_subtitle(); ?>
            </span>
            <span class="c-page-title--ja">
                <?php 
                if(is_page()){
                    the_title();
                }
                elseif(is_archive()){
                    $post_type = get_post_type_object(get_post_type());
                    $custom_post_name = $post_type->label;

                    echo $custom_post_name;
                }
                elseif(is_404()){
                    echo '無効なURLです';
                }
                elseif(is_singular( 'news' )){
                    echo 'お知らせ';
                }
                ?>
                
            </span>
        </h1>
    </div>
</div>
<div class="l-container l-inner">
    <?php custom_breadcrumb() ?>
</div>