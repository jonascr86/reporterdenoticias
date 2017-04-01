<div class="post-meta-info">
    <div class="post-meta-info-list tags">
        <i class="fa fa-tags"></i>
        <div class="post-meta-info-list-in tags-in">
            <p>Tags</p>
            <?php obterTasg(); ?>
        </div>
    </div>
    <div class="post-meta-info-list comments">
        <i class="fa fa-comments-o"></i>
        <div class="post-meta-info-list-in comments-in">
            <p>Comentários</p>
            <?php comments_number('Sem comentário', 'Um comentário', '% comentários'); ?>
        </div>
    </div>
    <div class="post-meta-info-list category">
        <i class="fa fa-folder-open-o"></i>
        <div class="post-meta-info-list-in category-in">
            <p>Categorias</p>
            <?php get_the_termos($post->ID, 'category'); ?>
        </div>
    </div>
    <div class="post-meta-info-list date">
        <i class="fa fa-calendar-o"></i>
        <div class="post-meta-info-list-in date-in">
            <p>Data</p>
            <time class="entry-date"><?php echo the_time('j F, Y G:i'); ?></time>
        </div>
    </div>
</div> <!-- //post-meta-info -->


