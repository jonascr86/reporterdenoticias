<?php

$params = [
    'posts_per_page' => 10,
    'category_name' => 'minuto_ave_maria',
];

$wp_query = reporterdenoticias_wp_query($params);

?>

<?php get_template_part('partes/base', 'noticias'); ?>