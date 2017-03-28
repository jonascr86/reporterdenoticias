<?php 
    $categoria = obterCategoria($post);
    $letra = obterPrimeiraLetra($categoria);
    //Arquivo utilizado nos destaques laterais
?>
<article class="gradient-color02">
    <div class="article-inner">
        <div class="overlay"></div>
        <?php if (has_post_thumbnail()) : ?>
            <div class="img-wrapper noticia">
                <?php the_post_thumbnail('noticia-thumbnail'); ?>
            </div>
        <?php else : ?>
            <div class="img-wrapper noticia">
                <img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/article-img/thumbnail04.jpg" alt="img">
            </div>
        <?php endif; ?>
        <div class="article-info">
            <p class="slide-cat">
                <span class="cat-icon cat-icon-color09"> <?php echo $letra; ?></span><?php echo $categoria; ?>
            </p>
            <h4 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
        </div>
    </div>
</article>

