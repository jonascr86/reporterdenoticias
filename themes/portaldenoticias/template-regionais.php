<?php
/*
  Template Name: Regionais
 */
get_header();
?>

<div class="row">
    <div class="col-md-9 ">
        <?php get_template_part('partes/loop', 'regionais') ?>
    </div>
    <?php get_template_part('partes/loop', 'propagandas_laterais'); ?>
</div>
</div>
<?php get_footer(); ?>