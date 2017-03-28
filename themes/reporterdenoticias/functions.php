<?php

require_once 'PortalDeNoticiasBootstrapNavWalker.php';

add_action('wp_enqueue_scripts', 'reporterdenoticias_enqueue_scripts');

function reporterdenoticias_enqueue_scripts() {
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style('font_awesome', get_stylesheet_directory_uri() . "/css/font-awesome.min.css");
    wp_enqueue_style('style', get_stylesheet_directory_uri() . "/css/style.css");
    wp_enqueue_style('cs-select', get_stylesheet_directory_uri() . "/css/cs-select.css");
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . "/css/animate.css");
    wp_enqueue_style('nanoscroller', get_stylesheet_directory_uri() . "/css/nanoscroller.css");
    wp_enqueue_style('owl.carousel', get_stylesheet_directory_uri() . "/css/owl.carousel.css");
    wp_enqueue_style('flexslider', get_stylesheet_directory_uri() . "/css/flexslider.css");
    wp_enqueue_style('responsive', get_stylesheet_directory_uri() . "/css/responsive.css");
    wp_enqueue_style('presets', get_stylesheet_directory_uri() . "/css/presets/preset2.css");
    wp_enqueue_style('reporterdenoticias', get_stylesheet_directory_uri() . "/css/presets/reporterdenoticias.css");

    wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . "/js/bootstrap.min.js", array('jquery'));
    wp_enqueue_script('smoothscroll', get_stylesheet_directory_uri() . "/js/smoothscroll.js");

    //select menu
    wp_enqueue_script('classie', get_stylesheet_directory_uri() . "/js/classie.js");
    wp_enqueue_script('selectFx', get_stylesheet_directory_uri() . "/js/selectFx.js");

    //slider
    wp_enqueue_script('nanoscroller', get_stylesheet_directory_uri() . "/js/jquery.nanoscroller.js");
    wp_enqueue_script('carousel', get_stylesheet_directory_uri() . "/js/owl.carousel.min.js");
    wp_enqueue_script('flexslider', get_stylesheet_directory_uri() . "/js/jquery.flexslider-min.js");

    //sitcky menu
    wp_enqueue_script('sticky', get_stylesheet_directory_uri() . "/js/jquery.sticky.js");

    //custom
    wp_enqueue_script('main', get_stylesheet_directory_uri() . "/js/main.js");
}

add_theme_support('post-thumbnails');
add_theme_support('menus');

add_action('after_setup_theme', 'wpdocs_theme_setup');

function wpdocs_theme_setup() {
    add_image_size('noticia-thumbnail', 263, 253, true);
    add_image_size('noticia-thumbnail_post', 848, 536, true);
    add_image_size('noticia-slide_image', 555, 536, true);
    add_image_size('patrocinio-lateral', 262, 235, true);
    add_image_size('patrocinio-topo', 165, 95, true);

    add_image_size('noticia-video', 108, 104, true);
    add_image_size('noticia-video_destaque', 457, 352, true);
}

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

function reporterdenoticias_wp_query($params = null) {

    $args = array(
        'posts_per_page' => isset($params['posts_per_page']) ? $params['posts_per_page'] : '',
        'paged' => get_query_var('page'),
        'post_type' => isset($params['post_type']) ? $params['post_type'] : 'post',
        'category_name' => isset($params['category_name']) ? $params['category_name'] : '',
        'orderby' => isset($params['orderby']) ? $params['orderby'] : 'date',
        'order' => isset($params['order']) ? $params['order'] : 'DESC',
        'tag_not_in' => isset($params['tag_not_in']) ? $params['tag_not_in'] : [],
        'offset' => isset($params['offset']) ? $params['offset'] : '',
    );

    $wp_query = new WP_Query($args);

    return $wp_query;
}



function mostraData() {
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    echo strftime('%A, %d de %B de %Y', strtotime('today'));
}

function tirarAcentos($string) {
    return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string);
}

function obterCategoria($post) {
    return ucfirst(get_the_category_by_ID($post->post_category[0]));
}

function obterPrimeiraLetra($string) {
    $param = (-1 * mb_strlen(tirarAcentos($string), 'utf-8'));

    $return = strtoupper(substr($string, 0, $param));

    if (strlen($return) === 0) {
        $return = strtoupper(substr($string, 0, ($param + 1)));
    }

    return $return;
}

function obterTasg() {
    $post_tags = get_the_tags();
    echo tratarTermos($post_tags);
}

function tratarTermos($termos) {
    $value = "";
    $cont = 0;
    if ($termos) {
        foreach ($termos as $termo) {
            if ($cont > 0) {
                $tag .= ', ' . $termo->name;
            } else {
                $value = $termo->name;
            }
        }
        echo $value;
    }
}

function get_the_termos($post, $taxonomy) {
    if (!$post = get_post($post))
        return false;

    $terms = get_object_term_cache($post->ID, $taxonomy);
    if (false === $terms) {
        $terms = wp_get_object_terms($post->ID, $taxonomy);
        if (!is_wp_error($terms)) {
            $term_ids = wp_list_pluck($terms, 'term_id');
            wp_cache_add($post->ID, $term_ids, $taxonomy . '_relationships');
        }
    }

    /**
     * Filters the list of terms attached to the given post.
     *
     * @since 3.1.0
     *
     * @param array|WP_Error $terms    List of attached terms, or WP_Error on failure.
     * @param int            $post_id  Post ID.
     * @param string         $taxonomy Name of the taxonomy.
     */
    $terms = apply_filters('get_the_terms', $terms, $post->ID, $taxonomy);

    if (empty($terms))
        return false;

    return tratarTermos($terms);
}

function obterCatUrl() {
    $categoria = "";
    $array = array_values(array_filter(explode('/', $_SERVER ['REQUEST_URI'])));
    $tamanho = count($array) - 1;
    if (isset($array[$tamanho]))
        $categoria = $array[$tamanho];

    return $categoria;
}

function corrigeCategoria($cat) {
    $categoria = "";

    switch ($cat) {
        case 'bom-retiro-do-sul':
            $categoria = 'Bom Retiro do Sul';
            break;
        case 'policia':
            $categoria = 'Polícia';
            break;
        case 'noticias':
            $categoria = 'Notícias';
            break;
        case 'videos':
            $categoria = 'Vídeos';
            break;
    }

    if (strlen($categoria) == 0) {
        $categoria = ucfirst($cat);
    }

    return $categoria;
}

function obtercategoriaUrl() {
    $categoria = obterCatUrl();
    return corrigeCategoria($categoria);
}

add_theme_support('menus');
add_action('init', 'portaldenoticias_init');

function portaldenoticias_init() {
    portaldenoticias_register_menu();
}

function portaldenoticias_register_menu() {
    $locations = 
            [
                'menu-principal' => 'Menu Principal',
                'rodape' => 'Menu Redapé'
            ];
    register_nav_menus($locations);
}

function getMenu($params = []) {
    $param = [
                'theme-location' => isset($params['theme-location']) ? $params['theme-location'] : 'menu-principal',
                'menu' => isset($params['menu']) ? $params['menu'] : 'Menu Principal',
                'container' => '',
                'container_id' => '',
                'container_class' => '',
                'menu_class' => isset($params['menu_class']) ? $params['menu_class'] : 'list-inline megamenu-parent',
                'walker' => new PortalDeNoticiasBootstrapNavWalker(),
            ];
            
    $menu = wp_nav_menu( $param );

    return $menu;
}
