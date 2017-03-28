<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>
            <?php 
                bloginfo('name');
                if(is_home())
                    echo ' - ' . get_bloginfo('description');
                else
                    wp_title('|', TRUE);
            ?>
        </title>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head() ?>
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-default topo">

            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Notícias</a>
                        </li>
                        <li>
                            <a href="#">Sobre nós</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="btn btn-lg btn-social-icon btn-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-lg btn-social-icon btn-twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-lg btn-social-icon btn-google">
                                <span class="fa fa-google"></span>
                            </a>
                        </li>
                    </ul>
                    <?php get_search_form();  ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>



        <!-- Page Content -->
        <div class="container">

            <div class="row logo">
                <div class="col-md-6">
                    <a href="<?php bloginfo('wpurl'); ?>">
                        <div class="logotipo">
                        </div>
                    </a>
                </div>
                <div class="col-md-5 propaganda-topo">
                    <?php get_template_part('partes/propaganda', 'topo'); ?>
                </div>
            </div>

            <?php get_template_part('partes/menu', 'principal') ?>