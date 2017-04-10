<!--==================================
    =            START PAGE TITLE        =
    ===================================-->
<section id="page-title">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-wrapper page-title-wrapper">
                <div class="container">
                    <h2 class="pull-left title"> <span class="cat-icon"><i class="fa fa-group"></i> </span> <?php the_title(); ?></h2>
                </div> <!-- //container -->
            </div> <!-- //page-title-wrapper -->
        </div>
    </div> <!-- //row -->
</section>
<!--====  End of PAGE TITLE  ====-->

<section id="contatos">
    <div class="row">
        <div class="col-md-3 col-md-offset-3">
            <div class="img-contatos">
                <a href="https://www.facebook.com/reporterdenoticias/">
                    <img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/facebook-logo-300x129.png" alt="Facebook">
                </a>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="img-contatos">
                
                <img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/whatsapp300x129.png" alt="WatsApp">
            </div> 
        </div>
    </div> <!-- //row -->
</section>

<!--==================================
=            START MAIN WRAPPER      =
===================================-->
<section class="main-wrapper history-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="history-info">
                    <p class="title"><?php bloginfo('name'); ?></p>
                    <h2 class="subtitle">
                        <?php bloginfo('description'); ?>
                    </h2>
                    <div class="row">
                        <div class="col-sm-10">
                            <p><?php the_content(); ?> </p>
                        </div>
                        
                    </div> <!-- //row -->
                </div> <!-- //advertisment-info -->
            </div>
        </div> <!-- //row -->
    </div> <!-- //container -->
</section>
<!--====  End of MAIN WRAPPER  ====-->