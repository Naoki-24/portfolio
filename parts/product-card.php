<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php 
    $fields = get_post_meta($post->ID);
    $types = get_the_terms($post->ID, 'site-type');
    $works = get_the_terms($post->ID, 'working');
    $atms = get_the_terms($post->ID, 'atmosphere');
    $cms = get_the_terms($post->ID, 'cms');
?>

<div class="c-product-card <?php if(is_post_type_archive('products')){echo 'c-product-card--archive';}?>">
    <div class="c-product-card__inner">
        <div class="c-product-card__img">
            <?php the_post_thumbnail(); ?>
        </div>
        <table class="c-product-card__table">
            <tbody>
                <tr>
                    <th>サイト名</th>
                    <td><?php the_title(); ?></td>
                </tr>
                <tr>
                    <th>種類</th>
                    <td><?php
                    foreach($types as $type){
                        echo '<span>'.$type->name.'</span>';
                    }
                    ?></td>
                </tr>
                <tr>
                    <th>作業範囲</th>
                    <td><?php
                    foreach($works as $work){
                        echo '<span>'.$work->name.'</span>';
                    }
                    ?></td>
                </tr>
                <tr>
                    <th>CMS</th>
                    <td>
                        <?php 
                        if (!empty($cms[0])) {
                            echo $cms[0]->name; 
                        } else {
                            echo '<span> - </span>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>使用テーマ</th>
                    <td>
                        <?php 
                        if (!empty($fields['theme'][0])) {
                            echo $fields['theme'][0];
                        } else {
                            echo '<span> - </span>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>雰囲気</th>
                    <td>
                        <?php 
                        if (!empty($atms)) {
                            foreach($atms as $atm){
                                echo '<span  class="c-label c-label--s c-label--gray">'.$atm->name.'</span>';
                            }
                        } else {
                            echo '<span> - </span>';
                        }?>
                    </td>
                </tr>
                <tr>
                    <th>詳細</th>
                    <td><div class="u-left u-fs-s"><?php echo $fields['description'][0]; ?></div></td>
                </tr>
                <tr>
                    <th>URL</th>
                    <td>
                        <?php if( !empty($fields['url'][0])): ?>
                            <a href="<?php echo $fields['url'][0]?>"><?php echo $fields['url'][0]; ?></a>
                        <?php else: ?>
                            <div>リンク切れ</div>
                        <?php endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
