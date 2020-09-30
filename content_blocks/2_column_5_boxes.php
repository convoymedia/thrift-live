<div class="two-columns-five-boxes block2" style="display:flex;flex-direction:row;max-width:75%;margin-left:auto;margin-right:auto;">
    <div class="left-col" style="width:50%;padding-right:20px;display:flex;flex-direction:column">
        <?php $box = get_sub_field("first_box_left") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>"  data-aos="fade-up">
            <img src="<?php echo $box['image']; ?>" style="max-height: 464px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
            <div><?php echo $box['title']; ?></div>
                <a href="<?php echo $box['link']; ?>"><button>MORE</button></a>
            </div>
        </div>
        <?php $box = get_sub_field("second_box_left") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>"  data-aos="fade-up">
        <img src="<?php echo $box['image']; ?>" style="max-height: 339px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
                <div><?php echo $box['title']; ?></div>
                <a href="<?php echo $box['link']; ?>"><button>MORE</button></a>
            </div>
        </div>
    </div>
    <div class="right-col" style="width:50%;padding-left:20px;display:flex;flex-direction:column">
        <?php $box = get_sub_field("first_box_right") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>"  data-aos="fade-up">
        <img src="<?php echo $box['image']; ?>" style="max-height: 407px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
                <div><?php echo $box['title']; ?></div>
                <a href="<?php echo $box['link']; ?>"><button>MORE</button></a>
            </div>
        </div>
        <?php $box = get_sub_field("second_box_right") ?>
        <div class="boxes" style="background-color:<?php echo $box['colour']; ?>" data-aos="fade-up">
        <img src="<?php echo $box['image']; ?>" style="max-height: 407px;width: 100%;height: 100%;object-fit: cover;">
            <div class="titles">
                <div><?php echo $box['title']; ?></div>
                <a href="<?php echo $box['link']; ?>"><button>MORE</button></a>
            </div>
        </div>
        <?php $box = get_sub_field("third_box_right") ?>
        <div class="boxes make200 minus100" style="background-color:<?php echo $box['colour']; ?>" data-aos="fade-up">
            <div class="titles" style="text-align:center;"><?php echo $box['title']; ?></div>
        </div>
    </div>
</div>