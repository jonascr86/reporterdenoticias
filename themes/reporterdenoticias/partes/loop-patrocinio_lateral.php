<?php
$params = [
    'category_name' => 'patrocinio-lateral',
];

$query = reporterdenoticias_wp_query($params);
?>

<div class="social-counter clearfix">
    <div class="section-title">
        <h3> <span class="cat-icon"><i class="fa fa-handshake-o"></i></i></span>Patrocínios</h3>
    </div> 
    <?php while ($query->have_posts()) : $query->the_post() ?>
        <?php get_template_part('partes/content', 'patrocinio_lateral'); ?>
    <?php endwhile;    wp_reset_postdata(); ?>
</div>

