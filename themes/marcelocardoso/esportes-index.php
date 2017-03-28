<?php $esportes = new WP_Query(['category_name' => 'esportes', 'posts_per_page' => '3']) ?>

<?php while ($esportes->have_posts()) : $esportes->the_post(); ?>

    <h1> <?php the_title() ?> </h1>
    <?php the_content()?>

<?php endwhile; ?>
