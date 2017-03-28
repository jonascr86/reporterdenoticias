<?php
/*
  Template Name: Polícia
 */
get_header();
?>

<div class="row">
    <div class="col-md-9 ">
        <?php get_template_part('partes/loop', 'policia') ?>
    </div>
    <?php get_template_part('partes/loop', 'propagandas_laterais'); ?>
</div>
</div>
<?php get_footer(); ?>