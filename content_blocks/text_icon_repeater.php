<div class="text_icon_repeater" style="background-color:<?php the_sub_field("background_colour"); ?>;">
    <div class="header-and-text" data-aos="fade-up">
        <?php the_sub_field("text");  ?>
    </div>
    <div class="<?php if (get_sub_field("scrolling")) { ?>icon-repeater<?php } else { ?>plain<?php } ?>">
        <?php
            if (have_rows("icon_module")) {
                while (have_rows("icon_module")) {
                    the_row();
                    ?>
                   
                    <div class="icon-holder">
                    <?php if (get_sub_field("include_button")) { ?>
                            <a href="<?php the_sub_field("button_link"); ?>">
                    <?php } ?>
                        <img src="<?php the_sub_field("image"); ?>" />
                        <h3><?php the_sub_field("title"); ?></h3>
                        <?php if (get_sub_field("include_button")) { ?>
                            <button><?php the_sub_field("button_title") ?></button>
                        <?php } ?>
                        <?php if (get_sub_field("include_button")) { ?>
                            </a>
                    <?php } ?>
                    </div>
                    
                    <?php
                }
            }
        ?>
    </div>
    <div class="text_icon_repeater_footer"  data-aos="fade-up">
        <?php the_sub_field("info_text"); ?>
    </div>
</div>