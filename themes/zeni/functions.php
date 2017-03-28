<?php

add_action('wp_enqueue_scripts', 'zeniwp_enqueue_scripts');

function zeniwp_enqueue_scripts(){
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('jq.tweet', get_template_directory_uri()    . '/css/jquery.tweet.css');
    wp_enqueue_style('superfish', get_template_directory_uri()   . '/css/superfish.css');
    wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/js/prettyPhoto/css/prettyPhoto.css');
    wp_enqueue_style('poshytip', get_template_directory_uri()    . '/js/poshytip-1.1/src/jquery.poshytip.min.js');
    wp_enqueue_style('flexslider', get_template_directory_uri()  . '/css/flexslider.css' );
    wp_enqueue_style('less', get_template_directory_uri() 		. '/css/lessframework.css');
    wp_enqueue_style('skin', get_template_directory_uri()        . '/css/skin.css');


    wp_enqueue_script('css3mediaqueries',
            get_stylesheet_directory_uri() . '/js/css3-mediaqueries.js', array('jquery'));

    wp_enqueue_script('custom', get_stylesheet_directory_uri()           . '/js/custom.js');


    wp_enqueue_script('tabs', get_stylesheet_directory_uri()   		  . '/js/tabs.js');

    wp_enqueue_script('jq.tweet-js', get_stylesheet_directory_uri() 	  . '/js/tweet/jquery.tweet.js');
    wp_enqueue_script('hoverintent', get_stylesheet_directory_uri()      . '/js/superfish-1.4.8/js/hoverIntent.js');
    wp_enqueue_script('superfish', get_stylesheet_directory_uri()        . '/js/superfish-1.4.8/js/superfish.js');
    wp_enqueue_script('supersubs', get_stylesheet_directory_uri()        . '/js/superfish-1.4.8/js/supersubs.js');
    wp_enqueue_script('jsPrettyPhoto', get_stylesheet_directory_uri()    . '/js/prettyPhoto/js/jquery.prettyPhoto.js');
    wp_enqueue_script('jsposhytip', get_stylesheet_directory_uri()    . '/js/poshytip-1.1/src/jquery.poshytip.min.js');
    wp_enqueue_script('jsflexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js');
    wp_enqueue_script('modernizr', get_stylesheet_directory_uri()    . '/js/modernizr.js');
}

add_image_size('post-thumb', 540, 266, true);

add_theme_support('post-thumbnails');

