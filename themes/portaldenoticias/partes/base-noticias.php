
<?php get_template_part('partes/paginacao'); ?>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <?php get_template_part('partes/noticias', 'principal') ?>
<?php endwhile; ?>

<?php get_template_part('partes/paginacao'); ?>

