<?php

    add_action('pre_get_posts', 'alterar_query');

    function alterar_query( $query )
    {
        if ( !is_admin() && $query->is_main_query() )
        {
            $query->set('category_name', 'politica');
        }
    }