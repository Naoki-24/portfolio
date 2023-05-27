<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php include TEMPLATEPATH.'/parts/page-title.php'; ?>

<div class="p-contact l-full-width">
    <div class="l-container l-site-inner l-inner">
        <h2 class="p-contact__title">無料相談</h2>
        <div class="c-contact-form">
            <?php echo do_shortcode('[contact-form-7 id="5" title="お問い合わせ"]'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>