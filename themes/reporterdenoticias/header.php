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
        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Informação com credibilidade.">
        <meta property="og:title" content="Repórter de Notícias"/> 
        <meta property="og:url" content="<?php echo get_site_url(); ?>" /> 
        <meta property="og:description" content="Informação com cerdibilidade" /> 
        <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/rep_de_notic_300x300.png" /> 
        
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
                            <div id="data" class="col-xs-1 col-sm-1 col-md-1 hidden-sm hidden-xs info-datahora">
                                <p>
                                    <span id='clock_tm' >Hora Atual</span><br> 
                                    <span id='clock_dt' >Data Atual</span>
				    <script language='javascript'>
                                        StartClock('d/m/Y','H:i:s');
                                    </script>
                                </p>
                            </div>
                            <div id="previsao" class="col-xs-4 col-sm-3 col-md-3 hidden-sm hidden-xs"></div>
                            <div id="hora" class="col-xs-1 col-sm-1 col-md-1 hidden-sm hidden-xs info-datahora">
                                <p>
                                    <script src="http://www.univates.br/sistemas_mkt/temperatura/temperatura.php"></script>
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="top-search">
                                    <form action="#" method="post">
                                        <input class="form-control input-lg" type="text" placeholder="Busca ...">
                                    </form>
                                </div> <!-- //top-right -->
                            </div>
                            <?php get_template_part('partes/loop', 'patrocinio_topo'); ?>
                        </div> <!-- //row -->
                    </div> <!-- //container -->
                </div> <!-- //top-bar -->

                <?php get_template_part('partes/navegacao', 'principal') ?>
            </header>
            <!--====  End of Header  ====-->