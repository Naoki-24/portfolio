<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<header class="l-header-sp l-header u-tab">
    <div class="l-header-sp__inner">
        <div class="l-header-sp__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__link">
                <h1 class="header__title u-hidden">n-code.web</h1>
                <img src="<?php echo get_asset_path('img', 'ncode-logo.svg')?>" alt="ロゴ" class="l-header-logo__img">
            </a>
        </div>
        <div class="l-header-sp__menu l-drawer">
            <button class="l-header-sp-menu__btn l-drawer__btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="l-drawer__bg l-header-sp-menu__bg"></div>
            <div class="l-header-sp-menu__nav-wrapper l-drawer__main">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'mobile-menu',
                        'container' => 'nav',
                        'container_class' => 'l-header-sp__nav',
                        'menu_class' => 'c-gnav-sp',
                        'menu_id' => 'g-nav--sp'
                        )
                    );?>
            </div>
        </div>
    </div>
</header>