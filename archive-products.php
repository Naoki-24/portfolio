<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php include TEMPLATEPATH.'/parts/page-title.php'; ?>

<main class="p-product l-container l-inner l-site-inner">
    <div class="p-product-container">
<?php
$args = array(
    'post_type' => 'products',
    'posts_per_page' => 6,
    'paged' => get_query_var('paged')
);

$query = new WP_Query( $args );
while ($query->have_posts()){
    $query->the_post();
    include TEMPLATEPATH.'/parts/product-card.php';
}
wp_reset_postdata();
?>
    </div>
    <?php include TEMPLATEPATH.'/parts/pagination.php' ?>
</main>
<?php get_footer(); ?>