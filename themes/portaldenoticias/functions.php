<?php

require_once 'PortalDeNoticiasBootstrapNavWalker.php';

add_action('wp_enqueue_scripts', 'reporterdenoticias_enqueue_scripts');

function reporterdenoticias_enqueue_scripts() {
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style('font_awesome', get_stylesheet_directory_uri() . "/css/font-awesome.min.css");
    wp_enqueue_style('style', get_stylesheet_directory_uri() . "/css/style.css");

    wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . "/js/bootstrap.min.js", array('jquery'));
}

add_theme_support('post-thumbnails');
add_theme_support('menus');

add_image_size('pagina-principal', 173, 293, true);
add_image_size('pagina-noticias', 400, 280, true);
add_image_size('pagina-noticia', 550, 340, true);
add_image_size('propagandas-laterais', 195, 235, true);
add_image_size('propaganda-topo', 569, 100, true);
add_image_size('destaque-carousel', 620, 355);

function reporterdenoticias_paginacao_pagina_noticias() {
    global $wp_rewrite, $wp_query;

    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('page', '%#%'),
        'format' => '%#%',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __('« Notícias mais recentes'),
        'next_text' => __('Notícias mais antigas »'),
        'end_size' => 1,
        'mid_size' => 2,
        'show_all' => true,
        'type' => 'plain',
        'add_args' => ''
    );

    echo paginate_links($pagination);
}

function reporterdenoticias_custom_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_length', 'reporterdenoticias_custom_excerpt_length');

function wpdocs_excerpt_more($more) {
    return '';
}

add_filter('excerpt_more', 'wpdocs_excerpt_more');
add_theme_support('menus');

function reporterdenoticias_wp_query($params = null) {
    
    $args = array(
        'posts_per_page' => isset($params['posts_per_page']) ? $params['posts_per_page'] : '',
        'paged' => get_query_var('page'),
        'post_type' => isset($params['post_type']) ? $params['post_type'] : 'post',
        'category_name' => isset($params['category_name']) ? $params['category_name'] : '',
        'orderby' => isset($params['orderby']) ? $params['orderby'] : 'date',
        'order' => isset($params['order']) ? $params['order'] : 'DESC',
        'tag_not_in' => isset($params['tag_not_in']) ? $params['tag_not_in'] : [],
    );
    
    $wp_query = new WP_Query($args);
    
    return $wp_query;
}


add_action('init', 'portaldenoticias_init');

function portaldenoticias_init(){
    portaldenoticias_register_menu();
}

function portaldenoticias_register_menu(){
    register_nav_menu('menu-principal', 'Menu Principal');
}