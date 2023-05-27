<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php include TEMPLATEPATH.'/parts/page-title.php'; ?>

<div class="p-contact l-full-width">
    <div class="l-container l-site-inner l-inner">
        <h2 class="p-contact__title"><?php the_title(); ?></h2>
        <main>
            <?php the_content(); ?>
        </main>
    </div>
</div>
<?php get_footer(); ?>