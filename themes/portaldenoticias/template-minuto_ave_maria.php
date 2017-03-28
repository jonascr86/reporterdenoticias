<?php
/*
  Template Name: Minuto Ave Maria
 */
get_header();
?>

<div class="row">
    <div class="col-md-9 ">
        <?php get_template_part('partes/loop', 'minuto_ave_maria') ?>
    </div>
    <?php get_template_part('partes/loop', 'propagandas_laterais'); ?>
</div>
</div>
<?php get_footer(); ?>