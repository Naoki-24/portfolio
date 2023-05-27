<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php
include TEMPLATEPATH.'/parts/page-title.php'; ?>

<div class="p-news-container l-site-inner l-full-width">
    <div class="l-inner">
        <ul class="p-news-list">
            <?php 

            $news_args = array(
                'post_type' => 'news',
                'posts_per_page' => 4,
                'post_status' => 'publish',
                'paged' => get_query_var('paged')
            );

            $the_query = new WP_Query($news_args);
            if ($the_query -> have_posts()){
                while ($the_query -> have_posts()){
                    $the_query->the_post();
                    include TEMPLATEPATH.'/parts/news-item.php';
                }
            }
            ?>
        </ul>
        <?php include TEMPLATEPATH.'/parts/pagination.php'; ?>
    </div>
</div>
<?php get_footer(); ?>