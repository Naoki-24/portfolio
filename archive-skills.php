<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php include TEMPLATEPATH.'/parts/page-title.php'; ?>

<div class="p-skills l-container l-inner l-site-inner">
<?php 
$skill_args = array(
    'orderby' => 'id',
    'order' => 'ASC'
);
$skill_types = get_terms('skill_type', $skill_args);

foreach ($skill_types as $skill_type):
    $skill_type_name = $skill_type->name;
    
?>
    <h2 class="p-skills__h2"><?php echo $skill_type_name ?></h2>
    <div class="p-skills-container">
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
            while ( $the_query->have_posts() ):  $the_query->the_post();
                include TEMPLATEPATH.'/parts/skill-card.php';
            endwhile;
        endif;
        wp_reset_postdata();
    ?>
    </div>
<?php endforeach; ?>
</div>
<?php get_footer();?>