<div class="contact_form_video" style="background-image:url(<?php the_sub_field("bg_image"); ?>);<?php the_sub_field("background_css") ?>">
    <div class="form-text-holder">
        <div class="form-text">
            <?php the_sub_field("text"); ?>
        </div>
        <div class="form">
            <h3><?php the_sub_field("title") ?></h3>
            <?php the_sub_field("form"); ?>
        </div>
    </div>
    <div class="the-video"  data-video="<?php the_sub_field("video_embed"); ?>">
        <div class="video-responsive">
            
        </div>
    </div>
</div>