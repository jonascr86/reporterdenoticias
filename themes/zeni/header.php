<!doctype html>
<html class="no-js">

<head>
    <meta charset="utf-8"/>
    <title>
        <?php
            bloginfo('name');
                if( is_home() )
                    echo ' - ' . get_bloginfo('description');
                else
                    wp_title('|', true);
        ?>
    </title>
    <!--[if lt IE 9]>
    <!--script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
</head>
<?php wp_head(); ?>
<body lang="en">



<header class="clearfix">

    <!-- top widget -->
    <div id="top-widget-holder">
        <div class="wrapper">
            <div id="top-widget">
                <div class="padding">
                    <ul  class="widget-cols clearfix">
                        <li class="first-col">

                            <div class="widget-block">
                                <h4>Recent posts</h4>
                                <div class="recent-post">
                                    <a href="<?php bloginfo('template_url') ?>/#" class="thumb"><img src="<?php bloginfo('template_url') ?>/img/dummies/54x54.gif" alt="Post" /></a>
                                    <div class="post-head">
                                        <a href="<?php bloginfo('template_url') ?>/#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <a href="<?php bloginfo('template_url') ?>/#" class="thumb"><img src="<?php bloginfo('template_url') ?>/img/dummies/54x54.gif" alt="Post" /></a>
                                    <div class="post-head">
                                        <a href="<?php bloginfo('template_url') ?>/#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <a href="<?php bloginfo('template_url') ?>/#" class="thumb"><img src="<?php bloginfo('template_url') ?>/img/dummies/54x54.gif" alt="Post" /></a>
                                    <div class="post-head">
                                        <a href="<?php bloginfo('template_url') ?>/#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="second-col">

                            <div class="widget-block">
                                <h4>Dummy text</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                            </div>

                        </li>

                        <li class="third-col">

                            <div class="widget-block">
                                <h4>Dummy text</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                            </div>

                        </li>

                        <li class="fourth-col">

                            <div class="widget-block">
                                <h4>Dummy text</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="<?php bloginfo('template_url') ?>/#" id="top-open">Menu</a>
    </div>
    <!-- ENDS top-widget -->

    <div class="wrapper clearfix">

        <a href="<?php bloginfo('template_url') ?>/index.html" id="logo"><img  src="<?php bloginfo('template_url') ?>/img/logo.png" alt="Zeni"></a>

        <nav>
            <ul id="nav" class="sf-menu">
                <li class="current-menu-item"><a href="<?php bloginfo('template_url') ?>/index.html">HOME</a></li>
                <li><a href="<?php bloginfo('template_url') ?>/blog.html">BLOG</a></li>
                <li><a href="<?php bloginfo('template_url') ?>/page.html">ABOUT</a>
                    <ul>
                        <li><a href="<?php bloginfo('template_url') ?>/#">Submenu</a></li>
                        <li><a href="<?php bloginfo('template_url') ?>/#">Submenu</a></li>
                        <li><a href="<?php bloginfo('template_url') ?>/#">Submenu</a></li>

                    </ul>
                </li>
                <li><a href="<?php bloginfo('template_url') ?>/portfolio.html">WORK</a></li>
                <li><a href="<?php bloginfo('template_url') ?>/contact.html">CONTACT</a></li>
                <li><a href="http://www.mojo-themes.com/item/zeni-wordpress-theme/?r=ansimuz">WORDPRESS VERSION</a></li>
            </ul>
            <div id="combo-holder"></div>
        </nav>
    </div>
</header>
