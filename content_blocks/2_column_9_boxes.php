<div class="two-columns-five-boxes nine-override" style="display:flex;flex-direction:row;width:75%;margin-left:auto;margin-right:auto;">
    <div class="left-col" style="width:50%;padding-right:20px;display:flex;flex-direction:column">
        <?php $box = get_sub_field("first_box_left") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>">
            <img src="<?php echo $box['image']; ?>" style="max-height: 640px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
            <div><?php echo $box['title']; ?></div>
            </div>
        </div>
        <div style="display:flex;flex-direction:row">
            <?php $box = get_sub_field("second_box_left") ?>
            <div class="boxes" style="background-color:<?php echo $box['colour']; ?>;background-color: #701153;width: 50%;border-right: 20px solid white;box-sizing: border-box;">
            <img src="<?php echo $box['image']; ?>" style="max-height: 640px;width: 100%;height: 100%;object-fit: cover;">
                <div class="titles">
                    <div><?php echo $box['title']; ?></div>
                </div>
            </div>
            <?php $box = get_sub_field("third_box_left") ?>
            <div class="boxes" style="background-color:<?php echo $box['colour']; ?>;background-color: #701153;width: 50%;border-left: 20px solid white;box-sizing: border-box;">
                <img src="<?php echo $box['image']; ?>" style="max-height: 640px;width: 100%;height: 100%;object-fit: cover;">
                <div class="titles">
                <div><?php echo $box['title']; ?></div>
                </div>
            </div>
    </div>
        <?php $box = get_sub_field("fourth_box_left") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>">
        <img src="<?php echo $box['image']; ?>" style="max-height: 640px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
                <div><?php echo $box['title']; ?></div>
            </div>
        </div>
        <?php $box = get_sub_field("fifth_box_left") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>">
            <div class="titles"><?php echo $box['title']; ?></div>
        </div>
    </div>
    <div class="right-col" style="width:50%;padding-left:20px;display:flex;flex-direction:column">
        <?php $box = get_sub_field("first_box_right") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>">
        <img src="<?php echo $box['image']; ?>" style="max-height: 407px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
                <div><?php echo $box['title']; ?></div>
            </div>
        </div>
        <?php $box = get_sub_field("second_box_right") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>">
        <img src="<?php echo $box['image']; ?>" style="max-height: 407px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
                <div><?php echo $box['title']; ?></div>
            </div>
        </div>
        <?php $box = get_sub_field("third_box_right") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>">
        <img src="<?php echo $box['image']; ?>" style="max-height: 407px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
                <div><?php echo $box['title']; ?></div>
            </div>
        </div>
        <?php $box = get_sub_field("fourth_box_right") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>">
        <img src="<?php echo $box['image']; ?>" style="max-height: 407px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
                <div><?php echo $box['title']; ?></div>
            </div>
        </div>
    </div>
</div>