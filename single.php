<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="header_banner" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
</div>
<div class="container bsingle">
	<div class="the-content">
		<h1><?php the_title();?></h1>
		<?php the_content(); ?>
	</div>
	<div class="bside">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>