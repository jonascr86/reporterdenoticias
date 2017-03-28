<?php 
    $categoria = obterCategoria($post);
    $letra = obterPrimeiraLetra($categoria);
    
?>
<article class="item leading-item gradient-major gradient-color02">
    <div class="article-inner">
        <div class="overlay"></div>
        <?php if (has_post_thumbnail()) : ?>
            <div class="img-wrapper">
                <?php the_post_thumbnail('noticia-slide_image'); ?>
            </div>
        <?php else : ?>
            <div class="img-wrapper">
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