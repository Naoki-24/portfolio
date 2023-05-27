<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>
<div class="p-fv">
    <div class="p-fv__container l-container">
        <div class="p-fv__text p-fv-text">
            <h1 class="p-fv-text__h1">
                <span class="p-fv-text__h1--subtitle">個人事業主様や中小企業様へ<br></span>
                <span class="p-fv-text__h1--title">集客できる<br class="u-sp"><span class="u-prime">WEBサイト</span><br>作ります</span>
            </h1>
            <p class="p-fv-text__p">お問い合わせやLINEへの誘導など目的に合わせ、<br class="pc">配色や動線を意識したデザイン</p>
            <div class="p-fv__btn-wrapper">
                <div class="p-fv__btn c-btn c-btn--l c-btn--prime">
                    <a href="<?php echo get_page_link( 9 );?>" class="c-btn__link">無料相談</a>
                </div>
                <div class="p-fv__btn c-btn c-btn--l c-btn--second u-pc">
                    <a href="<?php echo get_post_type_archive_link( 'products' );?>" class="c-btn__link">制作実績</a>
                </div>
            </div>
        </div>
        <picture class="p-fv__img">
            <source srcset="<?php echo get_asset_path('img', 'fv-image.webp'); ?>" type="image/webp">
            <img src="<?php echo get_asset_path('img', 'fv-image.png'); ?>" alt="制作サイトイメージ">
        </picture>
    </div>
</div>
<main class="l-container l-inner">
    <section id="about">
        <div class="p-about-container u-flex">
            <div class="p-about-left">
                <h2 class="p-about__title u-prime">ーAbout me</h2>
                <div class="p-profile-card u-flex">
                    <picture class="p-profile-card__pic">
                        <source srcset="<?php echo get_asset_path('img', 'me.webp') ?>" type="image/webp" width="100" height="100">
                        <img src="<?php echo get_asset_path('img', 'me.png'); ?>" alt="私の顔画像" class="p-profile-card__img" width="100" height="100">
                    </picture>
                    <div class="p-profile-card__bubble">
                    WEBに関することなんでも<br class="u-pc">相談にのります！
                    </div>
                </div>
                <div class="p-about__description">
                    <p>学生時代にサークルのPRのためにWEBサイトを作り、それ以来Web制作やプログラミングにのめりこみました。プログラミングだけでなくWebデザインもお任せください！</p>
                    <p>コーディングのみ、デザインのみなど柔軟に対応しますので、お気軽にご相談ください！</p>
                </div>
                <div class="p-about__btn c-btn c-btn--m c-btn--second">
                    <a href="<?php echo get_page_link( 11 ); ?>" class="c-btn__link">プロフィール</a>
                </div>
            </div>
            <div class="about-right">
                <picture class="about__img">
                    <img src="<?php echo get_asset_path('img', 'web-development.svg'); ?>" alt="Web Development">
                </picture>
            </div>
        </div>
    </section>
    <section id="product" class="p-product l-full-width">
        <div class="p-section-title">
            <div class="p-section-title__sub">Product</div>
            <h2 class="p-section-title__h2">制作実績</h2>
        </div>
        <div class="c-product-card-container">
        <?php 
        $args = array(
            'post_type' => 'products', 
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'ASC'
            );

        $query = new WP_Query( $args );
        while ($query->have_posts()): $query->the_post();
        
        include(TEMPLATEPATH.'/parts/product-card.php');
        
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
        <div class="p-product__btn-wrapper">
            <div class="c-btn c-btn--m c-btn--prime">
                <a href="#" class="c-btn__link">もっと見る</a>
            </div>
        </div>
    </section>
    <section id="skill" class="p-skill l-full-width">
        <div class="l-container l-inner">
            <div class="p-section-title">
                <div class="p-section-title__sub">Skill</div>
                <h2 class="p-section-title__h2">スキルセット</h2>
            </div>
            <div class="p-skill__tab p-skilltab c-tab">
                <div class="c-tab__head p-skilltab__head">
                <?php
                $skill_args = array(
                    'orderby' => 'id',
                    'order' => 'ASC'
                );
                $skill_types = get_terms('skill_type', $skill_args);
                foreach ($skill_types as $skill_type):
                    $skill_type_name = $skill_type->name
                    ?>
                    <h3 class="c-tab__group"><?php echo esc_html($skill_type_name) ?></h3>
                    <?php endforeach; ?>
                </div>
                <div class="c-tab__content-wrapper p-skilltab__wrapper">
                    <?php
                    foreach ($skill_types as $skill_type):
                        $skill_type_name = $skill_type->name
                    ?>
                    <div class="c-tab__content">
                        <div class="c-tab__content-inner p-skilltab__content">
                        <?php
                            $args = [
                                'post_type' => 'skills',
                                'tax_query' => [
                                    [   
                                        'taxonomy' => 'skill_type',
                                        'field' => 'name',
                                        'terms'=> $skill_type_name
                                    ]
                                    ],
                                'orderby' => 'date',
                                'order' => 'ASC'
                            ];

                            $the_query = new WP_Query($args);

                            if ( $the_query->have_posts() ):
                                while ( $the_query->have_posts() ): $the_query->the_post();
                                    include TEMPLATEPATH.'/parts/skill-card.php';
                                endwhile;
                            endif; wp_reset_postdata();
                        ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="p-skilltab__bg"></div>
                </div>
            </div>
            <div class="p-skill__btn-container">
                <div class="c-btn c-btn--m c-btn--second">
                    <a href="" class="c-btn__link">詳しく見る</a>
                </div>
            </div>
        </div>
    </section>
    <section id="service" class="p-service">
        <div class="p-service__title p-section-title">
            <span class="p-section-title__sub">ーService</span>
            <h2 class="p-section-title__h2">サービス</h2>
        </div>
        <p class="p-service__description">主にご提供可能なサービス一覧です。<br>その他のご依頼についても個別でご相談ください。</p>
        <div class="p-service__list">
            <div class="p-service-list__col">
                <div class="p-service-item p-service-item--website">
                    <div class="p-service-item__detail">
                        <div class="p-service-item__cap">WEB CREATIVE</div>
                        <h3 class="p-service-item__title">WEBサイト制作</h3>
                        <p class="p-service-item__description">WEBサイトを制作します。コーポレートサイトやECサイトなどお任せください。デザインからコーディング、SEO対策まで行います。</p>
                    </div>
                </div>
                <div class="p-service-item p-service-item--coding">
                    <div class="p-service-item__detail">
                        <div class="p-service-item__cap">CODING / PROGRAMMING</div>
                        <h3 class="p-service-item__title">コーディング<br>プログラミング</h3>
                        <p class="p-service-item__description">LPコーディングやWordpress独自テーマ作成、Shopifyサイトなど、デザインをもとにコーディングを行います。</p>
                    </div>
                </div>
            </div>
            <div class="p-service-list__col">
                <div class="p-service-item p-service-item--modification">
                    <div class="p-service-item__detail">
                        <div class="p-service-item__cap">MODIFICATION / CUSTUMIZATION</div>
                        <h3 class="p-service-item__title">サイト修正<br>カスタマイズ</h3>
                        <p class="p-service-item__description">既存サイトの修正やカスタマイズを行います。機能の追加やデザインの修正など部分的なご注文を承ります。</p>
                    </div>
                </div>
                <div class="p-service-item p-service-item--banner">
                    <div class="p-service-item__detail">
                        <div class="p-service-item__cap">BANNER / IMAGE</div>
                        <h3 class="p-service-item__title">バナー<br>WEB画像作成</h3>
                        <p class="p-service-item__description">バナー広告画像や各種SNS用の画像、ECサイトの商品画像など様々なWEB画像を作成いたします。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news" class="p-news l-full-width">
        <div class="p-news-inner l-container l-inner">
            <div class="p-news-container">
                <h2 class="p-news__title">NEWS</h2>
                <div class="p-news__btn c-btn c-btn--second c-btn--m">
                    <a href="<?php echo get_post_type_archive_link('news') ?>" class="c-btn__link">READ MORE</a>
                </div>
                <ul class="p-news__list">
                    <?php 
                    $news_args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 4,
                        'post_status' => 'publish'
                    );

                    $the_query = new WP_Query($news_args);
                    if ($the_query -> have_posts()):
                        while ($the_query -> have_posts()): $the_query->the_post();
                        
                        include TEMPLATEPATH.'/parts/news-item.php';

                        endwhile; ?>
                    <?php else: ?>
                        <li class="c-news__item">お知らせはありません</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
    <section id="contact" class="p-contact l-full-width">
        <div class="l-container l-inner">
            <div class="p-section-title p-contact__title">
                <div class="p-section-title__sub">Contact</div>
                <h2 class="p-section-title__h2">無料相談フォーム</h2>
            </div>
            <p class="p-contact__description">Webサイトを作りたい等、Webに関することなんでもお気軽にご相談ください</p>
            <?php echo do_shortcode('[contact-form-7 id="5" title="お問い合わせ"]') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>