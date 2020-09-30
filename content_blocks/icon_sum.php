<div class="item-sum">
    
        <?php 
            if (have_rows("icons")) {
                ?><div class="sum-holder"><?php
                while (have_rows("icons")) {
                    the_row();
                    ?>
                    <img src="<?php the_sub_field("icon"); ?>" />
                    <?php if (get_sub_field("additional") === "plus") { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/plus.png" class="sum" />
                    <?php } else if (get_sub_field("additional") === "equals") { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/equals.png" class="sum" />
                    <?php }
                }
                ?></div><div class="sum-info-holder"><?php
                while (have_rows("icons")) {
                    the_row();
                    ?>
                    <div><?php the_sub_field("text"); ?></div>
                    <?php
                }
                ?></div><?php
            }
        ?>

        <center><a href="<?php echo site_url(); ?>/contact/"><button style="color:white;background: rgb(107,22,111);background: linear-gradient(94deg, rgba(107,22,111,1) 0%, rgba(36,16,105,1) 100%);">ENQUIRE</button></a></center>
</div>