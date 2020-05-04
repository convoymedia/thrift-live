<div class="form_with_curved_bottom" style="background-color:<?php the_sub_field("under_curve_colour"); ?>;position:relative;display:block">
    <div class="image_left_content_right">
        <div class="left" style="width:50%;position: relative;display: block;z-index: 50;">
            <img src="<?php the_sub_field("left_image"); ?>" style="width:100%;height:100%;object-fit:cover;margin-top:<?php the_sub_field("image_margin"); ?>px" />
        </div>
        <div class="right" style="width:50%;">
            <div class="text-content form">
                <h3><?php the_sub_field("title"); ?></h3>
                <?php the_sub_field("form"); ?>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/reverse-curved-bottom.png" class="curved-bottom" style="position: absolute;bottom: 140px;"/>
</div>