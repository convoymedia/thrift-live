<div style="background-color:<?php the_sub_field("bg_colour"); ?>;">
<div class="icon_text_square" style=" width:80%;margin-left:auto;margin-right:auto;flex-wrap:wrap">
    <?php
        if (have_rows("icon_module")) {
            while (have_rows("icon_module")) {
                the_row();
                ?>
                <?php if (get_sub_field("style_grad") === "colour") { ?>
                    <a href="<?php the_sub_field("link"); ?>" class="box" style="background-color:<?php the_sub_field("colour"); ?>" data-aos="fade-down">
                <?php } else { ?>
                    <a href="<?php the_sub_field("link"); ?>" class="box" style="background: <?php the_sub_field("start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("start_colour"); ?> 0%, <?php the_sub_field("end_colour"); ?> 100%);" data-aos="fade-down">
                <?php } ?>
                    <div class="inner">
                        <img src="<?php the_sub_field("icon"); ?>" />
                        <div class="inner-text" style="color:white;font-size:21px;"> 
                            <h3><?php the_sub_field("title"); ?></h3>
                            <div style="text-align:left;">
                                <?php the_sub_field("text"); ?>
                             </div>
                        </div>
                    </div>
                </a>
                <?php
            }
        }
    ?>
</div>
    </div>