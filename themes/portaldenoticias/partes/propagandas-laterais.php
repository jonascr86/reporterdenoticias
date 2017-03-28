<?php
$params = [
    'category_name' => 'propagandas-laterais',
];

$propagandas = reporterdenoticias_wp_query($params);
?>

<?php if($propagandas->have_posts()) : while ($propagandas->have_posts()) : $propagandas->the_post()?>
<div class="col-md-2">
    <div class="propaganda">
        <?php the_post_thumbnail('propagandas-laterais'); ?>
    </div>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>