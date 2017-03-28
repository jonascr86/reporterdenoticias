<?php if ( have_posts() ) : while( have_posts() ) : the_post() ;  ?>

    <?php get_template_part('partials/content', 'default') ?>

<?php endwhile;?>

<?php else: ?>

    <?php get_template_part('partials/content', 'none') ?>

<?php endif; ?>

<div class="page-navigation clearfix">
    <div class="nav-next">
        <?php previous_posts_link(' &#8592; Posts recentes'); ?>
    </div>
    <div class="nav-previous">
        <?php next_posts_link(' Posts anteriores &#8594;'); ?>
    </div>
</div>
