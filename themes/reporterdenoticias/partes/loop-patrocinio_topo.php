<?php
$params = [
    'category_name' => 'patrocinio-topo',
];

$patrocinio = reporterdenoticias_wp_query($params);
$n = 1;
?>

<?php if ($patrocinio->have_posts()) : ?>
    <div class="col-xs-2 col-sm-2 col-md-2 hidden-sm hidden-xs patrocinio-topo">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php while ($patrocinio->have_posts()) : $patrocinio->the_post() ?>
                    <?php if(has_post_thumbnail()) :  ?>
                        <div class="item <?php if ($n == 1) { echo "active"; } ?>">
                            <?php the_post_thumbnail('patrocinio-topo'); ?>
                        </div>
                    <?php else : $n = 0; ?>
                <?php endif; $n++; endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>