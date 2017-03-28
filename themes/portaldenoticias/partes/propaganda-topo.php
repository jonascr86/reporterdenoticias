<?php
$params = [
    'category_name' => 'propaganda-topo',
    'posts_per_page' => 5,
];

$propagandas = reporterdenoticias_wp_query($params);
$n = 1;
?>

<?php if ($propagandas->have_posts()) : ?>
    <div class="row carousel-holder"> 
        <div class="col-md-5">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php while ($propagandas->have_posts()) : $propagandas->the_post() ?>
                        <div class="item <?php if ($n == 1) { echo "active"; } ?>">
                            <?php the_post_thumbnail('propaganda-topo'); ?>
                        </div>
                    <?php $n++; endwhile; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>