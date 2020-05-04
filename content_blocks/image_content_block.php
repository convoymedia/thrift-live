<!-- 
<div class="image_content_block">
    <div class="gutter-sizer"></div>
    <?php
        if (have_rows("image_content_module")) {
            while (have_rows("image_content_module")) {
                the_row();
                ?>
                <div class="item <?php the_sub_field("type"); ?>">
                    <div class="item-inner" style="background-color:<?php the_sub_field("bg_colour"); ?>">
                    <img src="<?php the_sub_field("image"); ?>" />
                    <h3><?php the_sub_field("title"); ?></h3>
                    </div>
                </div>
                <?php
            }
        }
    ?>
</div>
    -->