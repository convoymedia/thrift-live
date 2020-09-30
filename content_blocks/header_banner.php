<div class="header_banner <?php if ( is_page() && $post->post_parent ) { ?>insulation_header<?php } ?>" <?php if ( is_page() && $post->post_parent ) { ?> style="background-image:url(<?php the_sub_field("banner"); ?>)" <?php } ?>>
<?php if (get_sub_field("left_text")) { ?><div class="block"><?php } ?>
    <img src="<?php the_sub_field("banner"); ?>" />
    <div class="text-holder">
    <?php if (!get_sub_field("left_text")) { ?><div class="block"><?php } ?>
        <h2><?php the_sub_field("title"); ?></h2>
        <div class="texts"><?php the_sub_field("text"); ?></div>
    </div>
    <div class="left-texts">
        <?php the_sub_field("left_text"); ?>
    </div>
</div>
</div>



