<div class="image_left_gradient_title_right block2" data-aos="fade-down">
    <div class="left-image-side">
        <img src="<?php the_sub_field("image"); ?>" />
    </div>
    <?php
        switch (get_sub_field("gradient_or_colour")) {
            case "colour":
                ?><div class="right-text-side" style="background: <?php the_sub_field("colour"); ?>;"><?php
            break;
            case "gradient":
                ?><div class="right-text-side" style="background: <?php the_sub_field("start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("start_colour"); ?> 0%, <?php the_sub_field("end_colour"); ?> 100%);"><?
            break;
        }
    ?>
        <h2><?php the_sub_field("title"); ?>
        <?php
            if (get_sub_field("include_button")) {
                switch (get_sub_field("button_gradient_or_colour")) {
                    case "colour":
                        ?>
                        <a href="<?php the_sub_field("button_link"); ?>">
                            <button style="background: <?php the_sub_field("colour"); ?>;color:<?php the_sub_field("button_text_colour"); ?>;">
                                <?php the_sub_field("button_title"); ?>
                            </button>
                        </a>
                        <?php
                    break;
                    case "gradient":
                        ?>
                        <a href="<?php the_sub_field("button_link"); ?>">
                            <button style="background: <?php the_sub_field("button_start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("start_colour"); ?> 0%, <?php the_sub_field("button_end_colour"); ?> 100%);color:<?php the_sub_field("button_text_colour"); ?>;">
                                <?php the_sub_field("button_title"); ?>
                            </button>
                        </a>
                        <?php
                    break;
                }
            }
        ?>
    </div>
</div>