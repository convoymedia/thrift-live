<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<div class="header_banner" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/news.jpg)">
    <img src="<?php bloginfo('template_directory'); ?>/images/news.jpg" />
    <div class="text-holder">
        <h2>News</h2>
        <div class="texts">For the latest industry news,<br/>scroll down.</div>
    </div>
    <div class="left-texts">
        <?php the_sub_field("left_text"); ?>
    </div>
</div>
<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
		<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
		<?php get_search_form(); ?>

<?php endif; ?>

<div class="the-posts">
	<div class="latest">
	<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page'=>2,
			'order'=>'DESC',
		);

		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				?>
				<div>
					<div class="sub-title">LATEST</div>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" />
					<h3><?php the_title(); ?></h3>
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</div>
				<?php
			}
		}
		wp_reset_postdata();
	?>
	</div>
	<div class="filter">
		<div class="filter-title">Filter:</div>
		<ul class="cats"><?php wp_list_categories(array('title_li'=>'')); ?></ul>
	</div>
	<div class="posts">
	<?php 
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				?>
					<div>
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" />
						<h3><?php the_title(); ?></h3>
						<div class="excerpt"><?php the_excerpt(); ?></div>
					</div>
					<?php
			}
		}
	?>
	</div>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
<div class="pages">
	<?php 
		if ( get_previous_posts_link() ) {
			previous_posts_link( 'PREVIOUS', 0 );
		}
		else {
			?><span class="no">PREVIOUS</span><?php
		}
		if ( get_next_posts_link() ) {
			next_posts_link( 'NEXT', 0 );
		}
		else {
			?><span class="no">NEXT</span><?php
		}
	?>
</div>
<?php endif; ?>

</div>
<div class="two_column_logo">
    <div class="logo-h2"><h2>Quality service</h2></div>
    <div class="logo-text">We don't do things by half, rest assured. Thrift Energy is proud to boast a team of motivated experts committed to providing the best possible service - from our experienced and vetted tradesmen, to our helpful customer service team.</div>
</div>
<div class="logos"><img class="alignnone size-full wp-image-546" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-3.png" alt="" width="170" height="52" /> <img class="alignnone size-full wp-image-547" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-2.png" alt="" width="66" height="19" /> <img class="alignnone size-full wp-image-548" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-4.png" alt="" width="53" height="25" /> <img class="alignnone size-full wp-image-549" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-5.png" alt="" width="66" height="23" /> <img class="alignnone size-full wp-image-550" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-6.png" alt="" width="93" height="20" /> <img class="alignnone size-full wp-image-551" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-8.png" alt="" width="107" height="35" /> <img class="alignnone size-full wp-image-552" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-9.png" alt="" width="69" height="27" /> <img class="alignnone size-full wp-image-553" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-10.png" alt="" width="44" height="45" /> <img class="alignnone size-full wp-image-554" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-11.png" alt="" width="59" height="29" /> <img class="alignnone size-full wp-image-555" src="http://www.convoyportal.com/thrift2/wp-content/uploads/2020/04/Asset-12.png" alt="" width="59" height="33" /></div>