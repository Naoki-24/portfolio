<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<footer class="l-footer">
    <div class="l-footer__inner l-container l-inner">
    <?php wp_nav_menu(
        array(
            'theme_location' => 'footer-menu',
            'container' => 'nav',
            'container_class' => 'l-footer__nav',
            'menu_class' => 'l-footer__nav-ul'
        )
    );?>
        <div class="copy-right">
            &copy; <?php echo date('Y') ?> Ncode.web
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>