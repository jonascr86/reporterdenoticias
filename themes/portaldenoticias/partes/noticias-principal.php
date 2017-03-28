<div class="pagina-noticias">
    <div>
        <div class="data">
            <h3><span class="label label-default"><?php echo the_time('j F, Y G:i'); ?></span></h3>
        </div>

        <h2 class="titulo-pagina-noticias">
            <a href="<?php the_permalink(); ?>" class="titulo-noticia"> <?php the_title(); ?> </a>
        </h2>
        <div class="imagem-destacada-noticias">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('pagina-noticias');
            } elseif (@has_video_destacado()) {
                @video_destacado(TRUE);
            }
            ?>
        </div>
        <div class="resumo-texto-noticia">
            <p><?php the_excerpt(); ?></p>
        </div>
        <div class="leia-mais">
            <a href="<?php the_permalink(); ?>"> 
                <span class="label label-success">leia mais</span> 
            </a>
        </div>
    </div>




</div>

