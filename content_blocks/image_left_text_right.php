<div class="text_left_image_right" style="background-color:<?php the_sub_field("colour") ?>">
    <div class="image-right">
        <img src="<?php the_sub_field("image"); ?>" />
    </div>
    <div class="text-left">
        <h2><?php the_sub_field("title"); ?></h2>
        <?php the_sub_field("text"); ?>
        <?php if (get_sub_field("include_button")) { ?>
            <a href="<?php the_sub_field("button_link"); ?>"><button style="background-color:<?php the_sub_field("button_colour"); ?>;color:<?php the_sub_field("button_text_colour"); ?>"><?php the_sub_field("button_title"); ?></button></a>
        <?php } ?>
    </div>
    
</div>