<?php get_header() ?>

    <h2> Desenvolvendo um site de noticias </h2>

<?php //query_posts(['category_name' => 'politica'])?>
<?php
    while (have_posts()) :
        the_post(); ?>

    <h1><?php the_title()?></h1>

    <?php the_content()?>

<?php endwhile; ?>

<br>
<h1>Outro bloco</h1>

<?php get_template_part('esportes', 'index') ?>

<?php get_footer() ?>