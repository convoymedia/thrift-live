<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<footer>
	<ul class="show-mobile mobile-footer-menu">
		<?php dynamic_sidebar("mobile-widget-area"); ?>
	</ul>
	<div class="container hide-mobile">
		<div class="border-bottom">
			<ul class="footer-top-left">
				<?php dynamic_sidebar("ftl-widget-area"); ?>
			</ul>
			<ul class="footer-top-right">
				<?php dynamic_sidebar("ftr-widget-area"); ?>
			</ul>
			<br class="clear" />
		</div>
		<div class="border-bottom flexed">
			<ul>
				<?php dynamic_sidebar("fm1-widget-area"); ?>
			</ul>
			<ul>
				<?php dynamic_sidebar("fm2-widget-area"); ?>
			</ul>
			<ul>
				<?php dynamic_sidebar("fm3-widget-area"); ?>
			</ul>
			<ul>
				<?php dynamic_sidebar("fm4-widget-area"); ?>
			</ul>
		</div>
		<ul class="bottom-left">
			<?php dynamic_sidebar("fbl-widget-area"); ?>
		</ul>
		<ul class="bottom-right">
			<?php dynamic_sidebar("fbr-widget-area"); ?>
		</ul>
		<br class="clear" />
	</div>

	<center style="color: white;text-decoration: none;font-size:13px;">
		Site by <a href="http://jakhq.com/" targer="_blank" style="color: white;text-decoration: none;">Jak HQ</a>
	</center>
</footer>
<div id='slider'>
	<div id='trigger'>Apply for Funding</div>
	<div class="content-holder-form">
		<?php echo do_shortcode('[contact-form-7 id="1042" title="Apply for funding"]'); ?>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>