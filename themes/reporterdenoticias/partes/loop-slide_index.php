<?php
$params = [
    'posts_per_page' => 3,
    'category_name' => 'destaque'
];

$query = reporterdenoticias_wp_query($params);
?>
<div id="article-slider" class="owl-carousel">
    <?php while ($query->have_posts()) : $query->the_post() ?>
        <?php get_template_part('partes/content', 'slide_index'); ?>
    <?php endwhile;    wp_reset_postdata(); ?>
</div>  <!--//article-slider--> 