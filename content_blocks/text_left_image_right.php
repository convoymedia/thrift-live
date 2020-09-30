<div class="text_left_image_right 
<?php 
    if (get_sub_field("additional_class")) { 
        the_sub_field("additional_class"); 
    } 
    if (get_sub_field("include_speech_box")) { 
        ?>sbox sbox2
<?php 
    } 
?>" style="background-color:<?php the_sub_field("colour") ?>">
    <div class="block" style="display:flex;flex-direction:row;">
        <div class="text-left" data-aos="fade-right">
            <h2 style="color:<?php the_sub_field("text_colour"); ?>"><?php the_sub_field("title"); ?></h2>
            <?php the_sub_field("text"); ?>
            <div class="bb">
                <?php 
                    if (get_sub_field("include_speech_box")) {
                    ?>
                        <div class="bubble <?php the_sub_field("speech_box_style"); ?>"><?php the_sub_field("speech_box_text"); ?></div>
                    <?php
                    }
                ?>
                <?php if (get_sub_field("include_button")) { ?>
                    <?php 
                                if (get_sub_field("button_gradient_or_colour") === "colour") {
                                    ?>
                                    <a href="<?php the_sub_field("button_link"); ?>" class="<?php the_sub_field("speech_box_style")?>_button">
                                        <button style="background-color:<?php the_sub_field("button_colour"); ?>;color:<?php the_sub_field("button_text_colour"); ?>">
                                            <?php the_sub_field("button_title"); ?>
                                        </button>
                                    </a>
                                    <?php
                                }
                                else {
                                    ?>
                                    <a href="<?php the_sub_field("button_link"); ?>" class="<?php the_sub_field("speech_box_style")?>_button">
                                        <button style="background: <?php the_sub_field("button_start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("button_start_colour"); ?> 0%, <?php the_sub_field("button_end_colour"); ?> 100%);color:<?php the_sub_field("button_text_colour"); ?>">
                                            <?php the_sub_field("button_title"); ?>
                                        </button>
                                    </a>
                                    <?php
                                }
                            }
                    ?>
            </div>
        </div>
        <div class="image-right" data-aos="fade-left">
            <img src="<?php the_sub_field("image"); ?>" />
        </div>
    </div>
</div>