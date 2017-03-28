<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>
<div class="row">

    <div class="col-md-9">
        <div>
            <h2 class="titulo-pagina-simples">
                <?php the_title(); ?>
            </h2>
            
        </div>

        <div class="imagem-destacada">
            <?php if(has_post_thumbnail()) the_post_thumbnail('pagina-noticia'); ?>
        </div>
        <div>
            <p class="texto-noticia">
                <?php the_content(); ?>
            </p>
        </div>

    </div>
    
    <?php endif; ?>
    <!--<div class="row">-->

    <div class="col-md-3">
        <div class="propaganda-noticias">

        </div>
        <div class="propaganda-noticias">

        </div>
        <div class="propaganda-noticias">

        </div>
    </div>
</div>
</div>
<?php get_footer(); ?> 