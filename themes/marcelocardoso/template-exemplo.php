<?php
    /*
     * Template Name: Exemplo
     */
?>

<?php  get_header() ?>

<h1> Página de exemplo </h1>

<div class="exemplo">
    <?php if( have_posts() ) : the_post(); ?>

        <h1> <?php the_title('Jonas ') ?> </h1>

        <?php the_content() ?>

    <?php endif; ?>
</div>

<?php  get_footer() ?>
