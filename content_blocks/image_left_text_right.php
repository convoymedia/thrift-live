<div class="text_left_image_right <?php if (get_sub_field("additional_class")) { 
        the_sub_field("additional_class"); 
    } if (get_sub_field("include_speech_box")) { ?>sbox<?php } ?>" style="background-color:<?php the_sub_field("colour") ?>;<?php if (get_sub_field("add_2nd_colour")) { ?>padding-bottom:27px;<?php } ?>">
 <div class="block">
    <?php
        if (get_sub_field("add_2nd_colour")) {
            ?>
            <div class="second-colour" style="background:<?php the_sub_field("2nd_colour"); ?>">
            <?php 
                if (get_sub_field("include_button")) { ?>
                    
                    <?php 
                        if (get_sub_field("button_gradient_or_colour") !== "gradient") {
                            ?>
                            <a class="openf" href="<?php the_sub_field("button_link"); ?>">
                                <button style="background-color:<?php the_sub_field("button_colour"); ?>;color:<?php the_sub_field("button_text_colour"); ?>">
                                    <?php the_sub_field("button_title"); ?>
                                </button>
                            </a>
                            <?php
                        }
                        else {
                            ?>
                            <a class="openf" href="<?php the_sub_field("button_link"); ?>">
                                <button style="background-color: <?php the_sub_field("button_start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("button_start_colour"); ?> 0%, <?php the_sub_field("button_end_colour"); ?> 100%);color:<?php the_sub_field("button_text_colour"); ?>">
                                    <?php the_sub_field("button_title"); ?>
                                </button>
                                
                            </a>
                            <a href="https://www.phoenix-fc.co.uk/finance_landing?b=9926AFD6389F4238&t=4EA877F80433437CA6F65C47" target="_blank">
                            <button style="margin-left:20px;background: rgb(125, 189, 54) linear-gradient(94deg, rgb(125, 189, 54) 0%, rgb(18, 191, 119) 100%) repeat scroll 0% 0%;color:white;">
                                See you finance options
                                </button>
                        </a>
                            <?php
                        }
                    }
            ?>
            </div>
            <?php
        }
    ?>
    <div class="image-right" data-aos="fade-left">
        <?php 
             if (get_sub_field("include_speech_box")) {
            ?>
            <div class="bubble <?php the_sub_field("speech_box_style"); ?>"><?php the_sub_field("speech_box_text"); ?></div>
            <?php
             }
        ?>
        <img src="<?php the_sub_field("image"); ?>" />
    </div>
    <div class="text-left" data-aos="fade-right">
        <h2><?php the_sub_field("title"); ?></h2>
        <?php the_sub_field("text"); ?>
        <?php 
            if (!get_sub_field("add_2nd_colour")) { 
                if (get_sub_field("include_button")) { ?>
                    <?php if (get_sub_field("button_gradient_or_colour") !== "gradient") { ?>
                        <a href="<?php the_sub_field("button_link"); ?>"><button style="background-color:<?php the_sub_field("button_colour"); ?>;color:<?php the_sub_field("button_text_colour"); ?>"><?php the_sub_field("button_title"); ?></button></a>
                    <?php } else { ?>
                        <a href="<?php the_sub_field("button_link"); ?>"><button style="background: <?php the_sub_field("button_start_colour"); ?>;background: linear-gradient(94deg, <?php the_sub_field("button_start_colour"); ?> 0%, <?php the_sub_field("button_end_colour"); ?> 100%);color:<?php the_sub_field("button_text_colour"); ?>"><?php the_sub_field("button_title"); ?></button></a>
                    <?php } ?>
                <?php
                }
            }
        ?>
    </div>
        </div>  
</div>