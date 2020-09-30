<div class="image-overlap" style="background:<?php the_sub_field("background_colour") ?>;">
    <div style="display: flex;flex-direction: row;position: relative;margin-top: -130px;margin-bottom: -130px;">
        <div style="width: 50%;text-align: right;padding-right: 5%;box-sizing: border-box;">
            <img src="<?php the_sub_field("image"); ?>" />
        </div>
        <div class="push-down-text">
            <?php the_sub_field("text"); ?>
        </div>
    </div>
</div>