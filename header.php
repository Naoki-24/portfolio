<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_asset_path('img', 'logo-favicon.svg'); ?>" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="l-header u-pc">
    <div class="l-header__inner l-container">
        <div class="l-header__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__link">
                <h1 class="header__title u-hidden">n-code.web</h1>
                <img src="<?php echo get_asset_path('img', 'ncode-logo.svg')?>" alt="ロゴ" class="l-header-logo__img">
            </a>
        </div>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'global-menu',
                'container' => 'nav',
                'container_class' => 'l-header__nav',
                'menu_class' => 'c-gnav',
                'menu_id' => 'g-nav--pc'
            )
        );?>
    </div>
</header>

<?php include(TEMPLATEPATH.'/parts/header-sp.php') ?>