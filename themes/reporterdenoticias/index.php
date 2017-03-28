<?php get_header(); ?>
<!--==================================
=            START MAIN WRAPPER      =
===================================-->
<section class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <!-- Latest News -->
                <div class="newedge-latest-news">
                    <div class="section-title">
                        <h3> <span class="cat-icon"><i class="fa fa-bell-o"></i></span>Destaques</h3>
                    </div> <!-- //section-title -->

                    <div class="row">
                        <div class="col-md-8">
                            <!-- article-slider -->
                            <?php get_template_part('partes/loop', 'slide_index'); ?>
                        </div> <!-- //col-md-8 -->

                        <?php get_template_part('partes/loop', 'destaque_lateral'); ?>
                    </div> <!-- //row -->
                </div>

                <?php get_template_part('partes/loop', 'bom_retiro_do_sul_principal'); ?>
                
                <?php get_template_part('partes/loop', 'regionais_principal'); ?>

                <?php get_template_part('partes/loop', 'videos_principal'); ?>

                <?php get_template_part('partes/loop', 'policia_principal'); ?>

                <?php get_template_part('partes/loop', 'esportes_principal'); ?>
                
                <?php get_template_part('partes/loop', 'gerais_principal'); ?>
                
                
            </div> <!-- //col-sm-9 -->	
            <?php get_sidebar(); ?>
        </div> <!-- //row -->
    </div> <!-- //container -->
</section>
<!--====  End of MAIN WRAPPER  ====-->
<?php get_footer(); ?>


