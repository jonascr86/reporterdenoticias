<!--==================================
    =            START PAGE TITLE        =
    ===================================-->
<?php
$categoria = obterCategoria($post);
?>
<section id="page-title">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-wrapper">
                <div class="container">
                    <h2 class="pull-left title"> <span class="cat-icon"><?php echo obterPrimeiraLetra($categoria); ?> </span> <?php echo $categoria; ?> </h2>
                    <!-- breadcrumb -->
                    <?php // get_template_part('partes/breadcrumb'); Verificar posteriormente ?>

                </div> <!-- //container -->
            </div> <!-- //page-title-wrapper -->
        </div>
    </div> <!-- //row -->
</section>
<!--====  End of PAGE TITLE  ====-->



<!--==================================
=            START MAIN WRAPPER      =
===================================-->
<section class="main-wrapper single-category">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">  
                <div class="row">
                    <div class="col-sm-12 content-single">
                        <?php if (has_post_thumbnail()) : the_post_thumbnail('noticia-thumbnail_post'); ?>
                        <?php else: ?>
                            <div class="article-video">
                                <?php @video_destacado(); ?>
                            </div>
                        <?php endif; ?>
                        <!--<img src="<?php // echo get_template_directory_uri();  ?>/img/post-details/post-image01.jpg" class="img-100p" alt="img">-->
                        <h2 class="main-entry-title"><?php the_title(); ?></h2>
                        <div class="resumo-noticia">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <?php // get_template_part('partes/autor_views_social'); Verificar utilização mais tarde ?>
                        <?php get_template_part('partes/content', 'post_meta_info'); ?>
                        <div class="entry-summary">
                            <?php the_content(); ?>
                        </div> <!-- //entry-summary -->
                    </div> <!-- //col-sm-12 -->

                </div> 


                <!-- Advertisement two -->
                <div class="advertisement">
                    <div class="row">
                        <div class="col-sm-12 mtt50 mtb60">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/large-ad2.jpg" alt="advertisement">
                        </div>
                    </div>
                </div> <!-- //Advertisement two -->

                <?php // get_template_part('partes/content', 'noticias_relacionadas'); Verificar necessidade posteriormente ?>

                <?php // get_template_part('partes/content', 'comments'); ?>

                <?php // get_template_part('partes/content', 'comment_form'); ?>

            </div> <!-- //row -->
        </div> <!-- //col-sm-9 -->  

        <div class="col-sm-3">
            <!--Propagandas aqui-->          
        </div> <!-- //col-sm-3 -->
    </div> <!-- //row -->
</div> <!-- //container -->
</section>
<!--====  End of MAIN WRAPPER  ====-->
