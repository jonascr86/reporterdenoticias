<?php get_header() ?>
    
    <?php get_template_part('partes/carrocel'); ?> 

    <?php get_template_part('partes/noticias', 'esportes'); ?>
    <?php get_template_part('partes/noticias', 'regionais'); ?>
    <?php get_template_part('partes/noticias', 'policia'); ?>
    <?php get_template_part('partes/noticias', 'politica'); ?>

    </div>
    <!--<div class="row">-->
    <?php get_template_part('partes/propagandas', 'laterais')?>
    <!--</div>-->

    <?php get_footer() ?>