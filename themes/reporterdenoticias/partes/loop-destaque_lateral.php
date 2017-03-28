<?php
$params = [
    'posts_per_page' => 2,
    'category_name' => 'destaque',
    'offset' => 3
];

$query = reporterdenoticias_wp_query($params);
?>

<?php while ($query->have_posts()) : $query->the_post() ?>
    <?php get_template_part('partes/content', 'destaque_lateral'); ?>
<?php endwhile;    wp_reset_postdata(); ?>