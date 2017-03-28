<?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <?php if (is_single()) : ?>
            <?php get_template_part('partes/content', 'single'); ?>
        <?php else : ?>
            <?php get_template_part('partes/content', 'page'); ?>
        <?php endif; ?>
    <?php endwhile;
endif; ?>