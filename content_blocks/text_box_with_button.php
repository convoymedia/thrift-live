<div class="abs-holder" data-aos="flip-down">
    <div class="holder-content">
        <div class="styled-background" style="background-image:url(<?php the_sub_field("text_box_bg_image"); ?>)">
            <?php the_sub_field("text_box"); ?>
        </div>
    </div>
</div>
<div class="text_box_with_button" style="color:white">
    <div class="holder-content" style="opacity:0;margin-bottom:10px;">
        <div class="styled-background" style="background-image:url(<?php the_sub_field("text_box_bg_image"); ?>)">
            <?php the_sub_field("text_box"); ?>
        </div>
    </div>
    <?php
            if (get_sub_field("include_button")) {
                switch (get_sub_field("button_gradient_or_colour")) {
                    case "colour":
                        ?>
                        <a href="<?php the_sub_field("button_link"); ?>">
                            <button style="background: <?php the_sub_field("button_colour"); ?>;color:<?php the_sub_field("button_text_colour"); ?>;">
                                <?php the_sub_field("button_title"); ?>
                            </button>
                        </a>
                        <?php
                    break;
                    case "gradient":
                        ?>
                        <a href="<?php the_sub_field("button_link"); ?>">
                            <button style="background: <?php the_sub_field("button_start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("button_start_colour"); ?> 0%, <?php the_sub_field("button_end_colour"); ?> 100%);color:<?php the_sub_field("button_text_colour"); ?>;">
                                <?php the_sub_field("button_title"); ?>
                            </button>
                        </a>
                        <?php
                    break;
                }
            }
        ?>
</div>