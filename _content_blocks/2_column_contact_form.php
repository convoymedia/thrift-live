<div class="two_column_contact_form" style="background-image:url(<?php the_sub_field("bg_image"); ?>);<?php the_sub_field("background_css") ?>">
    <div class="left-holder-text" style="background-image:url(<?php the_sub_field("background_image"); ?>);background-color:<?php the_sub_field("background_colour") ?>;">
        <div class="form-text">
            <?php the_sub_field("left_content"); ?>
        </div>
    </div>
    <div class="right-holder-form" style="background-color:<?php the_sub_field("bg_colour"); ?>">
        <div class="form-right-text" style="color:<?php the_sub_field("text_colour"); ?>;">
            <?php the_sub_field("right_text"); ?>
        </div>
        <div class="form">
            <h3 style="color:<?php the_sub_field("title_colour"); ?>"><?php the_sub_field("form_title") ?></h3>
            <?php the_sub_field("form"); ?>
        </div>
    </div>
</div>