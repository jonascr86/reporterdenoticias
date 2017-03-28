<?php get_header(); ?>

<div id="main">
    <div class="wrapper clearfix">

        <div id="posts-list">
            <h2 class="page-heading"><span>BLOG</span></h2>
            <?php get_template_part('partials/loop', 'main')?>
        </div>

        <!-- ENDS posts list -->

        <!-- sidebar -->
        <?php get_sidebar(); ?>
        <!-- ENDS sidebar -->

    </div>
</div>

<?php get_footer(); ?>