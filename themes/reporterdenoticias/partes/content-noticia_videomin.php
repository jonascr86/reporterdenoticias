<div class="col-sm-5">
    <div class="latest-video sub-leading-item media">
        <div class="latest-video-inner">
            <div class="img-wrapper media-left">
                <img src="<?php video_thumbnail(); ?>" alt="img">
                <a href="<?php the_permalink(); ?>"><i class="play-icon fa fa-play-circle-o"></i></a>
            </div>
            <div class="video-post-info media-body">
                <p class="vp-cat">video</p>
                <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>
        </div>
    </div>  
</div> <!-- //sub-leading-item -->
