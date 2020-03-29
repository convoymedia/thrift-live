<div class="text_icon_repeater">
    <div class="header-and-text">
        <?php the_sub_field("text");  ?>
    </div>
    <div class="icon-repeater">
        <?php
            if (have_rows("icon_module")) {
                while (have_rows("icon_module")) {
                    the_row();
                    ?>
                    <div class="icon-holder">
                        <img src="<?php the_sub_field("image"); ?>" />
                        <h3><?php the_sub_field("title"); ?></h3>
                        <?php if (get_sub_field("include_button")) { ?>
                            <a href="<?php the_sub_field("button_link"); ?>"><button><?php the_sub_field("button_title") ?></button></a>
                        <?php } ?>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
    <div class="text_icon_repeater_footer">
        <?php the_sub_field("info_text"); ?>
    </div>
</div>