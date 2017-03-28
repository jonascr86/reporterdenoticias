<?php
$category = "esportes";

$params = [
    'posts_per_page' => 3,
    'category_name' => $category,
];

$categoryName = ucfirst($category);
$word = obterPrimeiraLetra($categoryName);
$query = reporterdenoticias_wp_query($params);
?>
<?php if ($query->post_count >= 1): ?>
    <div class="single-article-category simple-article-overlay gradient-color10">
        <div class="section-title">
            <h3 class="pull-left"> <span class="cat-icon cat-icon-color07"><?php echo $word; ?></span><?php echo $categoryName; ?></h3>
        </div> <!-- //section-title -->
        <div class="row">
            <?php while ($query->have_posts()) : $query->the_post() ?>
                <?php get_template_part('partes/content', 'noticia_default'); ?>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div> <!-- //row -->
    </div> <!-- //row -->
<?php endif; ?>