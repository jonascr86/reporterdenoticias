<?php 
    $categoria = obtercategoriaUrl();
    $letra = obterPrimeiraLetra($categoria);
?>
<section id="page-title">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-wrapper">
                <div class="container">
                    <h2 class="pull-left title"> <span class="cat-icon"><?php echo $letra; ?> </span> <?php echo $categoria; ?></h2>
                </div> <!-- //container -->
            </div> <!-- //page-title-wrapper -->
        </div>
    </div> <!-- //row -->
</section>
<!--====  End of PAGE TITLE  ====-->

<!--==================================
=            START MAIN WRAPPER      =
===================================-->
<section class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="section-title">
                    <h3> <span class="cat-icon"><?php echo $letra; ?></span><?php echo $categoria; ?></h3>
                </div> <!-- //section-title -->
                <div class="row">
                    <div class="simple-article-overlay">

                        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                                <?php get_template_part('partes/content', 'category'); ?>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div> <!-- //simple-article-overlay -->
                </div> <!-- //row -->
            </div> <!-- //col-sm-9 -->  
            <?php get_sidebar(); ?>
        </div> <!-- //row -->
    </div> <!-- //container -->
</section>
<!--====  End of MAIN WRAPPER  ====-->