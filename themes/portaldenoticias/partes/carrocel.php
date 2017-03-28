<?php
$params = [
    'category_name' => 'destaque',
    'posts_per_page' => '3',
];

$destaques = reporterdenoticias_wp_query($params);
$n = 1;
?>

<div class="row">
    <div class="col-md-8">
        <?php if ($destaques->have_posts()) : ?>
            <div class="row carousel-holder"> 

                <div class="col-md-8">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                                <?php while ($destaques->have_posts()) : $destaques->the_post() ?>
                                    <div class="item <?php if($n == 1){ echo "active";} ?>">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('destaque-carousel'); ?>
                                        </a>
                                        <div class="carousel-caption">
                                            <a href="<?php the_permalink(); ?>">
                                                <h3><?php the_title(); ?></h3>
                                                <p><?php the_excerpt(); ?></p>
                                            </a>
                                        </div>
                                    </div>
                                <?php $n++; endwhile; ?>
                            </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                    
                </div>
                
            </div>
        <?php endif; ?>