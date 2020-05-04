<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	 wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	wp_enqueue_script("jquery");
	wp_head();
?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	jQuery(document).ready(function($) {
		AOS.init();
		$(".icon-repeater").slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			nextArrow: '<div class="next-arrows"></div>',
			prevArrow: '<div class="prev-arrows"></div>'
		});

		$(".the-video").click(function(event){
			event.preventDefault();
			l = $(this).attr("data-video");
			a = l.split("?v=");
			$(this).children(".video-responsive").html('<iframe width="560" height="315" src="https://www.youtube.com/embed/' + a[1] + '?controls=0&autoplay=1&showinfo=0&rel=0&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
		})
	});
</script>		
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<ul class="call-to-action">
				<?php dynamic_sidebar( 'header-widget-area' ); ?>
			</ul>
			<a class="site-home-logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_header_image(); ?>" /></a>
			<div id="access" role="navigation">
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div>
			<br class="clear"/>
		</div>
	</header>