<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>


<?php 
include TEMPLATEPATH.'/parts/page-title.php';
?>

<main class="p-profile l-container l-inner l-site-inner">
    <div class="p-profile__container">
        <picture class="p-profile__img">
            <source srcset="<?php echo esc_url(get_asset_path('img', 'me.webp')); ?>" type="image/webp">
            <img src="<?php esc_url(get_asset_path('img', 'me.png')); ?>" alt="顔写真">
        </picture>
        <div class="p-profile__btn c-btn c-btn--second c-btn--m">
            <a href="<?php echo esc_url(get_post_type_archive_link('products'));?>" class="c-btn__link">制作実績</a>
        </div>
        <div class="p-profile__text-wrapper">
            <h2 class="p-profile__title">自己紹介</h2>
            <div class="p-profile__content">
                <p>学生時代にサークルのPRの為にWebサイトを作り、それ以来Web制作にのめりこみました。</p>
                <p>Web制作以外にもスクレイピングや機械学習などちょこちょこプログラミングで遊んでいます(^^♪</p>
                <p>趣味はサッカーとテニスです。サッカーは小学生の時にプレーしていましたが、今は見る専門です(^^)/。テニスは10年以上プレーしています。</p>
                <p><b>使用可能言語・ツール</b><br>スキルについては<a href="<?php echo esc_url(get_post_type_archive_link('skills')); ?>">こちら</a> のページをご参照ください。</p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>