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
<meta name="theme-color" content="#92237c" />
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
<script src="<?php echo bloginfo("template_url"); ?>/jquery.slidereveal.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF6LXHCi7KK5RjtV4Tubv68SShrQWfOio&libraries=places"></script>
<script>
	  
	jQuery(document).ready(function($) {
		function initialize() {
			c = 0;
			var autocomplete = [];

			$(".auto-address").each(function() {
				$(this).attr("ID", "id"+c)
				temp = new google.maps.places.Autocomplete(document.getElementById('id'+c), {componentRestrictions: {country: "uk"}});
				temp.addListener('place_changed', fillIn);
				autocomplete.push(temp);
				c++;
			});

			function fillIn() {
				console.log(this);
        		var place = this.getPlace();
				
				for (var i = 0; i < place.address_components.length; i++) {
					for (var j = 0; j < place.address_components[i].types.length; j++) {
						if (place.address_components[i].types[j] == "postal_code") {
							$(".postcode").val(place.address_components[i].long_name);
						}
						else if (place.address_components[i].types[j] == "postal_town") {
							$(".city").val(place.address_components[i].long_name);
						}
					}
				}
    		}
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);

		$("#slider").on("click", ".action-button", function() {
			$(".content-holder-form").animate({ scrollTop: 0 }, "fast");
		})
		$('#slider').slideReveal({
			trigger: $("#trigger"),
			push: false,
			position: "right",
			width:"1000px",
			show: function(slider, trigger){
				$("#slider").addClass("open");
			},
			hide: function(slider, trigger){
				$("#slider").removeClass("open");
			}
		});

		$(".open-form").click(function(event) {
			event.preventDefault();
			$(this).parent().parent().parent().parent().next(".show-form").toggleClass("fully-open");
		});

		$(".wpcf7-list-item label").append("<span class='checkmark'></span>");
		$(".how .checkmark").remove();
		$(".accept .checkmark").remove();
		$("<span class='checkmark'></span>").insertBefore(".how .wpcf7-list-item-label");
		$("<span class='checkmark'></span>").insertBefore(".accept .wpcf7-list-item-label");

		if ($("body").hasClass("home")) {
			AOS.init();
		}
		else {
			AOS.init();
		}

		$(".fa-bars").click(function() {
			$("header").toggleClass("open");
		})

		$(".icon-repeater").slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			nextArrow: '<div class="next-arrows"></div>',
			prevArrow: '<div class="prev-arrows"></div>',
			responsive: [
				{
      				breakpoint: 940,
					settings: "unslick"
				}
			]
		});

		$(".the-video").click(function(event){
			event.preventDefault();
			l = $(this).attr("data-video");
			a = l.split("?v=");
			$(this).children(".video-responsive").html('<iframe width="560" height="315" src="https://www.youtube.com/embed/' + a[1] + '?controls=0&autoplay=1&showinfo=0&rel=0&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
		});

		$(".page-id-34 .openf").click(function(event) {
			event.preventDefault();
			console.log("clicked");
			$('#_tq-button-cta').trigger('click');
		})

		var tc;
		var bc;
		$("button").hover(function() {
			tc = $(this).css("color");
			bc = $(this).css("background-image");
			if (bc === "none") {
				bc = $(this).css("background-color");
				$(this).css({"color": bc, "background": tc});
			}
			else {
				console.log($(this).width());
				$(this).css({"background-position": "-" + $(this).outerWidth() + "px", "color": "white"});
			}
				
			
		}, function() {
			$(this).css({"color": tc, "background": bc, "background-position": 0});
		})

		$(window).on("scroll", function() {
    		if($(window).scrollTop() > 50) {
        		$("header").addClass("active");
			} else {
				$("header").removeClass("active");
			}
		});

		$.fn.isInViewport = function() {
			var elementTop = $(this).offset().top;
			var elementBottom = elementTop + $(this).outerHeight();

			var viewportTop = $(window).scrollTop();
			var viewportBottom = viewportTop + $(window).height();

			return elementBottom > viewportTop && elementTop < viewportBottom;
		};

		AOS.refresh();
	});
</script>		
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<ul class="call-to-action hide-mobile">
				<?php dynamic_sidebar( 'header-widget-area' ); ?>
			</ul>
			<ul class="mobile-call-to-action show-mobile">
				<?php dynamic_sidebar( 'header-mobile-widget-area' ); ?>
			</ul>
			<a class="site-home-logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_header_image(); ?>" /></a>
			<div id="access" role="navigation" class="hide-mobile">
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div>
			<br class="clear"/>
		</div>
		<i class="fas fa-bars show-mobile"></i>
		<div id="mobile-menu" class="show-mobile">
			<?php wp_nav_menu( array( 'container_class' => 'mobile-menu-header', 'theme_location' => 'mobile' ) ); ?>
		</div>
	</header>