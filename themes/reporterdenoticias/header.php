<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?php
            bloginfo('name');
            if (is_home())
                echo ' - ' . get_bloginfo('description');
            else
                wp_title('|', TRUE);
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- FAVICON -->
        <link rel="shortcut icon" href="img/favicon.png">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
        <?php wp_head(); ?>
    </head>
    <!-- head -->

    <body class="sticky-header">
        <div class="body-innerwrapper">

            <!--==================================
            =            START Header            =
            ===================================-->
            <header>
                <!-- top-bar -->
                <div id="newedge-top-bar">
                    <div class="container">
                        <div class="row">
                            <div id="logo" class="col-xs-4 col-sm-3 col-md-3 hidden-sm hidden-xs"></div>
                            <div class="col-sm-10 col-md-8">
                                <div class="top-right">
                                    <div class="newedge-date">
                                        <span>	
                                            <?php mostraData(); ?> 
                                        </span>
                                    </div> <!-- //date -->

                                    <?php // get_template_part('partes/language'); Esta parte pode ser adicionada posteriormente ?>
                                    <?php // get_template_part('partes/login'); Esta parte pode ser adicionada posteriormente ?>
                                    
                                    <div class="newedge-search">
                                        <div class="search-icon-wrapper">
                                            <i class="fa fa-search"></i>
                                        </div>
                                        <div class="search-wrapper">
                                            <form action="#" method="post">
                                                <input name="searchword" maxlength="200" class="inputboxnewedge-top-search" type="text" size="20" placeholder="Search ...">
                                                <i id="search-close" class="fa fa-close"></i>
                                            </form>
                                        </div> <!-- //search-wrapper -->
                                    </div> <!-- //search -->
                                </div> <!-- //top-right -->
                            </div>
                            <?php get_template_part('partes/loop', 'patrocinio_topo'); ?>
                        </div> <!-- //row -->
                    </div> <!-- //container -->
                </div> <!-- //top-bar -->

                <?php get_template_part('partes/navegacao', 'principal') ?>
            </header>
            <!--====  End of Header  ====-->