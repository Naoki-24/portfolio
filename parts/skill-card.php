<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php 
    $img_file = get_field('file-name', $post->id);
    $is_wide = get_field('size', $post->id);
    ?>

<div class="c-skill-item <?php if(is_post_type_archive('skills')){echo 'c-skill-item--archive';}?>">
    <div class="c-skill-item__container">
        <div class="c-skill-item__img<?php if ($is_wide){ echo '--wide';} ?>">
            <img src="<?php echo get_asset_path('img', $img_file); ?>" alt="<?php the_title()?> " type="image/svg+xml">
        </div>
        <div class="c-skill-item__title"><?php the_title(); ?></div>

        <?php 
        if(is_post_type_archive('skills')):
            $description = get_field('description', $post->id);
        ?>
        
        <div class="c-skill-item__description"><?php echo $description ?></div>
        <?php endif ?>
    </div>
</div>