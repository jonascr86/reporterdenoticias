<div class="row noticias">
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-sm-3 col-lg-3 col-md-3">
            <div class="thumbnail">
                <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail('pagina-principal');
                    ?>
                <?php elseif (@has_video_destacado()) : ?>
                    <div class="thumbnail texto-noticia-home"> <?php @video_destacado(); ?> </div>
                <?php else : ?>
                    <div class="thumbnail texto-noticia-home"> <?php the_excerpt(); ?> </div>
                <?php endif; ?>
            </div>
            <h4>
                <a href="<?php the_permalink(); ?>" class="titulo-noticia"> <?php the_title(); ?> </a>
            </h4>
        </div>
    <?php endwhile; ?>
</div>