<div class="text_left_image_right <?php if (get_sub_field("include_speech_box")) { ?>sbox<?php } ?>" style="background-color:<?php the_sub_field("colour") ?>;<?php if (get_sub_field("add_2nd_colour")) { ?>margin-bottom:27px;<?php } ?>">
    <?php
        if (get_sub_field("add_2nd_colour")) {
            ?>
            <div class="second-colour" style="background:<?php the_sub_field("2nd_colour"); ?>">
            <?php 
                if (get_sub_field("include_button")) { ?>
                    
                    <?php 
                        if (get_sub_field("button_gradient_or_colour") !== "gradient") {
                            ?>
                            <a href="<?php the_sub_field("button_link"); ?>">
                                <button style="background-color:<?php the_sub_field("button_colour"); ?>;color:<?php the_sub_field("button_text_colour"); ?>">
                                    <?php the_sub_field("button_title"); ?>
                                </button>
                            </a>
                            <?php
                        }
                        else {
                            ?>
                            <a href="<?php the_sub_field("button_link"); ?>">
                                <button style="background: <?php the_sub_field("button_start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("button_start_colour"); ?> 0%, <?php the_sub_field("button_end_colour"); ?> 100%);color:<?php the_sub_field("button_text_colour"); ?>">
                                    <?php the_sub_field("button_title"); ?>
                                </button>
                            </a>
                            <?php
                        }
                    }
            ?>
            </div>
            <?php
        }
    ?>
    <div class="image-right">
        <?php 
             if (get_sub_field("include_speech_box")) {
            ?>
            <div class="bubble <?php the_sub_field("speech_box_style"); ?>"><?php the_sub_field("speech_box_text"); ?></div>
            <?php
             }
        ?>
        <img src="<?php the_sub_field("image"); ?>" />
    </div>
    <div class="text-left">
        <h2><?php the_sub_field("title"); ?></h2>
        <?php the_sub_field("text"); ?>
        <?php 
            if (!get_sub_field("add_2nd_colour")) { 
                if (get_sub_field("include_button")) { ?>
                    <?php if (get_sub_field("button_gradient_or_colour") !== "gradient") { ?>
                        <a href="<?php the_sub_field("button_link"); ?>"><button style="background-color:<?php the_sub_field("button_colour"); ?>;color:<?php the_sub_field("button_text_colour"); ?>"><?php the_sub_field("button_title"); ?></button></a>
                    <?php } else { ?>
                        <a href="<?php the_sub_field("button_link"); ?>"><button style="background: <?php the_sub_field("button_start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("button_start_colour"); ?> 0%, <?php the_sub_field("button_end_colour"); ?> 100%);color:<?php the_sub_field("button_text_colour"); ?>"><?php the_sub_field("button_title"); ?></button></a>
                    <?php } ?>
                <?php
                }
            }
        ?>
    </div>
    
</div>