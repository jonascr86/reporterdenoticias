<?php  get_header() ?>

    <h1> Página de exemplo </h1>

        <?php if( have_posts() ) : the_post(); ?>

            <h1> <?php the_title('Jonas ') ?> </h1>

            <?php the_content() ?>

        <?php endif; ?>

<?php  get_footer() ?>
