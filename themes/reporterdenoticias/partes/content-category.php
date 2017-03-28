<?php // get_template_part('partes/content', 'category_slider')   ?>
<div class="col-md-4 col-sm-6">
    <article class="gradient-color04">
        <div class="article-inner">
            <div class="overlay"></div>
            <?php if(has_video_thumbnail()) : ?>
                <div class="img-wrapper noticia">
                    <img src="<?php video_thumbnail();?>" alt="<?php the_title(); ?>">
                </div>
                <?php elseif (has_post_thumbnail()) :  ?>
                    <div class="img-wrapper noticia">
                        <?php the_post_thumbnail('noticia-thumbnail'); ?>
                    </div>    
                    <?php else : ?>
                        <div class="img-wrapper noticia">
                            <img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/article-img/thumbnail01.jpg" alt="img">
                        </div>
            <?php endif; ?>
            <div class="article-info">
                <h4 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h4>
            </div>
        </div>
    </article>
</div> <!-- //col-md-4 col-sm-6 -->