<div class="contact_form_video contacts" style="background-image:url(<?php the_sub_field("bg_image"); ?>);<?php the_sub_field("background_css") ?>">
    <div class="form-text-holder">
        <div class="form-text">
            <?php the_sub_field("text"); ?>
        </div>
        <div class="form">
            <h3><?php the_sub_field("title") ?></h3>
            <?php the_sub_field("form"); ?>
        </div>

        
    </div>
    <div class="the-contact">
            <?php $location = get_sub_field("location_1"); ?>
            <div style="width:30%">
                <?php echo do_shortcode($location['map']); ?>
                <?php echo $location["address"]; ?>
            </div>
            <?php $location = get_sub_field("location_2"); ?>
            <div style="width:30%">
                <?php echo do_shortcode($location['map']); ?>
                <?php echo $location["address"]; ?> 
            </div>
            <?php $location = get_sub_field("location_3"); ?>
            <div style="width:30%">
                <?php echo do_shortcode($location['map']); ?>
                <?php echo $location["address"]; ?> 
            </div>
        </div>
</div>