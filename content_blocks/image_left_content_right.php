<div class="image_left_content_right_holder block" style="background-color:<?php the_sub_field("colour"); ?>">
    <div class="image_left_content_right">
        <div class="left" style="position:relative;">
            <img src="<?php the_sub_field("image"); ?>" style="margin-top:<?php the_sub_field("image_margin"); ?>" />
        </div>
        <div class="right">
            <div class="text-content" data-aos="fade-up">
                <?php the_sub_field("content"); ?>
                <?php if (get_sub_field("include_form")) { ?>
                    <center>
                        <button class="open-form">Need help lowering your energy bills?</button>
                    </center>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php if (get_sub_field("include_form")) { ?>
    <div class="show-form">
        <?php echo do_shortcode(get_sub_field("form_shortcode")); ?>
    </div>
    <?php } ?>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/images/curved-bottom.png" style="background-color: #efeeef;display:block" class="curved-bottom"/>