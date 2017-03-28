<?php

$params = [
    'posts_per_page' => 10,
    'category_name' => 'policia',
];

$wp_query = reporterdenoticias_wp_query($params);

$categoria = ucfirst($params['category_name']);
?>

<div class="titulo-categoria-<?php echo $params['category_name'] ?>">
    <span><?php echo $categoria; ?></span>
</div>

<?php get_template_part('partes/base', 'noticias'); ?>