<div class="text-left-image-right-half reverse" style="background-color:<?php the_sub_field("colour"); ?>">
    <div>
        <div>
            <h2 style="color:<?php the_sub_field("text_colour"); ?>"><?php the_sub_field("title"); ?></h2>
            <div style="color:<?php the_sub_field("text_colour"); ?>"><?php the_sub_field("text"); ?></div>
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
    <div style="background-image:url(<?php the_sub_field("image"); ?>"></div>
</div>