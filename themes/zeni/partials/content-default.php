<article class="format-standard">
    <div class="entry-date"><div class="number"><?php the_time('j'); ?></div> <div class="year"><?php the_time('F', 'Y'); ?>, 2011</div></div>
    <div class="feature-image">
        <?php if (has_post_thumbnail()) the_post_thumbnail('post_thumb'); ?>
    </div>
    <h2  class="post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="read-more">leia mais &#8594;</a>
    <div class="meta">
        <div class="categories">In <a href="#">Category 1</a>, <a href="#">Category 2</a></div>
        <div class="comments"><a href="#">5 comments </a></div>
        <div class="user">Por <?php the_author_posts_link() ?></div>
    </div>
</article>