<div class="row">
    <!-- previous comments -->
    <div class="col-sm-12">
        <div class="comments-content mtt60">
            <div class="section-title">
                <h3> 
                    <span class="cat-icon">
                        <i class="fa fa-comments"></i>
                    </span>
                    <?php comments_number('Sem comentário', 'Um comentário', '% comentários'); ?>
                </h3>
            </div>
            <ul class="media-list">
                <!-- start each comment -->
                <?php wp_list_comments(); ?>
            </ul>
        </div>
    </div> <!-- //previous comments -->
    