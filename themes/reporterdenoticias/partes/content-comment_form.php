<div class="comments-form col-sm-12">
    <div class="section-title">
        <h3> <span class="cat-icon"><i class="fa fa-commenting"></i></span>Deixe um comentário</h3>
    </div>
    <div class="contact-form leave-message">
        <?php 
        
            $commenter = wp_get_current_commenter();
            $req       = get_option('require_name_email');
            
            $args = 
                    [
                        'fields' => 
                        [
                            'author'  => '<div class="form-group">
                                         <input value="'.  esc_attr($commenter['comment_author']).'" type="text" name="author" id="author" class="form-control" placeholder="Autor" ' .( $req ? 'required="required"' : "") . '>
                                         </div>',
                            'email'   => '<div class="form-group">
                                         <input value="'.  esc_attr($commenter['comment_author_email']).'" type="email" name="email" id="email" class="form-control" placeholder="Email" ' .( $req ? 'required="required"' : "") . '>
                                         </div>',
                            'url'     => '<div class="form-group">
                                         <input value="'.  esc_attr($commenter['comment_author_url']).'" type="url" name="url" id="url" class="form-control" placeholder="Url">
                                         </div>',
                        ],
                        'comment_field' => '<div class="form-group input-textarea">
                                            <textarea name="comment" rows="5" class="form-control" placeholder="Comentário" required="required"></textarea>
                                            </div>',
                        'class_form'    => 'main-contact-form',
                        'title_reply'   => ''
                    ];
            comment_form($args); 
        ?>
    </div>
</div>