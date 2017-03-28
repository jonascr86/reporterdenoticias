<?php
$category = "videos";

$params = [
    'posts_per_page' => 4,
    'category_name' => $category,
];

$categoryName = corrigeCategoria($category);
$word = obterPrimeiraLetra($categoryName);
$query = reporterdenoticias_wp_query($params);
$countPost = 0
?>
<?php if ($query->post_count >= 1): ?>
    <div class="newedge-latest-videos mtb10">
        <div class="section-title">
            <h3 class="pull-left"> 
                <span class="cat-icon"><i class="fa fa-play"></i></span>Assista agora
            </h3>
        </div>

        <div class="row">
            <?php while ($query->have_posts()) : $query->the_post() ?>
                <?php if($countPost < 1) : ?>
                    <?php get_template_part('partes/content', 'noticia_video_default'); ?>
                <?php else: ?>
                    <?php get_template_part('partes/content', 'noticia_videomin'); ?>
            <?php endif; $countPost++; endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
<?php endif; ?>