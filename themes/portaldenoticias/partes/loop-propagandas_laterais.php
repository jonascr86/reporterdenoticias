<?php
$args = array(
    'post_type' => 'post',
    'cat' => 6   //propagandas laterais   
);
$posts = new WP_Query($args);
$slug = 'partes/propagandas';
$name = 'laterais';
?>

<?php while ($posts->have_posts()) : $posts->the_post(); ?>
    <div class="col-md-3">
        
        <?php get_template_part($slug, $name); ?>
    </div>
<?php endwhile; ?>

<?php wp_reset_query(); ?>

