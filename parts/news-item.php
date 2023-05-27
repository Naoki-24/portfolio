<?php 
if ( ! defined( 'ABSPATH' ) ) exit; ?>

<li class="p-news-item">
    <a href="<?php echo get_permalink()?>" class="p-news-item__link">
        <article>
            <div class="p-news-item__inner">
                <span class="p-news-item__date"><?php the_time(get_option( 'date_format' )) ?></span>
                <div class="p-news-item__cat c-label c-label--m c-label--gray">お知らせ</div>
                <h3 class="p-news-item__title"><?php the_title() ?></h3>
            </div>
        </article>
    </a>
</li>