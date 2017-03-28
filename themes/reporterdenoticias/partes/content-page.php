<!--==================================
    =            START PAGE TITLE        =
    ===================================-->
<section id="page-title">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-wrapper page-title-wrapper2">
                <div class="container">
                    <h2 class="pull-left title"> <span class="cat-icon"><i class="fa fa-group"></i> </span> <?php the_title(); ?></h2>
                </div> <!-- //container -->
            </div> <!-- //page-title-wrapper -->
        </div>
    </div> <!-- //row -->
</section>
<!--====  End of PAGE TITLE  ====-->



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