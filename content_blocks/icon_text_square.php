<div class="icon_text_square" style="background-color:<?php the_sub_field("bg_colour"); ?>">
    <?php
        if (have_rows("icon_module")) {
            while (have_rows("icon_module")) {
                the_row();
                ?>
                <?php if (get_sub_field("style_grad") === "colour") { ?>
                    <a href="<?php the_sub_field("link"); ?>" class="box" style="background-color:<?php the_sub_field("bg_colour"); ?>">
                <?php } else { ?>
                    <a href="<?php the_sub_field("link"); ?>" class="box" style="background: <?php the_sub_field("start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("start_colour"); ?> 0%, <?php the_sub_field("end_colour"); ?> 100%);">
                <?php } ?>
                    <div class="inner">
                        <img src="<?php the_sub_field("icon"); ?>" />
                        <div class="inner-text">
                            <h3><?php the_sub_field("title"); ?></h3>
                            <?php the_sub_field("text"); ?>
                        </div>
                    </div>
                </a>
                <?php
            }
        }
    ?>
</div>