<?php
$args = array(
    'posts_per_page' => 4,
    'category_name' => 'esportes',
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC'
);

$wp_query = new WP_Query($args);
$categoria = ucfirst($args['category_name']);
?>
<div class="titulo-categoria-<?php echo $args['category_name'] ?>">
    <span><?php echo $categoria; ?></span>
</div>
<?php get_template_part('partes/loop_noticias', 'home') ?>