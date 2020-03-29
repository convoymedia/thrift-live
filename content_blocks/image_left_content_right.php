<div class="image_left_content_right_holder" style="background-color:<?php the_sub_field("colour"); ?>">
    <div class="image_left_content_right">
        <div class="left">
            <img src="<?php the_sub_field("image"); ?>" style="margin-top:<?php the_sub_field("image_margin"); ?>px" />
        </div>
        <div class="right">
            <div class="text-content">
                <?php the_sub_field("content"); ?>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/curved-bottom.png" class="curved-bottom"/>
</div>