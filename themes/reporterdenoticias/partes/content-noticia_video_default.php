<div class="col-sm-7">
    <div class="latest-video leading-item">
        <div class="latest-video-inner">
            <div class="overlay"></div>
            <div class="img-wrapper">
                <img src="<?php video_thumbnail();?>" alt="img">
                <a href="<?php the_permalink(); ?>"><i class="play-icon fa fa-play-circle-o"></i></a>
            </div>
            <div class="video-post-info">
                <p class="vp-cat">video</p>
                <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
        </div>
    </div> 
</div> <!-- //leading-item -->