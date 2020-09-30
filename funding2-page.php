<?php
/**
 * Template Name: Funding Page No Header 2
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	 wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="theme-color" content="#92237c" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	wp_enqueue_script("jquery");
	wp_head();
?>

<style>
body {margin-top:0px;}
#slider {display:none;}
.footer-top-right{display:none;}
.border-bottom  {border-bottom:none;}
.border-bottom ul:last-child {display:none;}
footer ul .widget-even { display:none; }
.block { max-width:1100px; }
.titlei, .title { color:white !important; }
.row .wpcf7-list-item-label, .wpcf7-list-item-label, .step.active .heading { color:white !important; }
.step-header::before {border-bottom: 1px solid white !important;  }
.step.active .circle {
	border: 1px solid white !important;
}
</style>
		
</head>

<body <?php body_class(); ?>>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<input type="hidden" value="<?php the_field("subject"); ?>" id="email_subject" />
	<?php if (get_field("hide_css")) { ?>
	<style>
		.radio-images.service .wpcf7-checkbox .wpcf7-list-item:nth-child(9), .radio-images.service .wpcf7-checkbox .wpcf7-list-item:nth-child(10), .radio-images.service .wpcf7-checkbox .wpcf7-list-item:nth-child(7) {
			display:none;
		}
	</style>
	<?php } ?>
    <div class="green-holder gbg" style="text-align:center;">
		
        <div class="block">
            <h2 class="g2"><?php the_field("header_text"); ?><br/><br/><span><?php the_field("sub_title"); ?></span></h2>
        </div>
	
        
        <div class="block">
            <?php echo do_shortcode('[contact-form-7 id="1352" title="Apply for funding"]'); ?>
        </div>
        </div>	
    <div class="white-holder">
        <div class="block hf">
            <div>
                <a href="https://thriftenergy.co.uk"><img src="https://thriftenergy.co.uk/wp-content/uploads/2020/03/thrift-logo.png"></a>
            </div>
            <h2 style="color:#92237C;">Call us on 0191 466 1624 </h2>
        </div>
        <div class="block">
            <div class="flex50">
                <div>
                    <?php the_field("side_text_content"); ?>
                </div>
                <div>
                    <h3 class="gpurple"><?php the_field("purple_box_content"); ?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="block truck-holder flex" style="background:#1E003F;margin-top:100px;align-items:center;margin-bottom: 250px;">
        <div class="ltruck">
            <?php the_field("bottom_box_content"); ?>
        </div>
        <div class="rtruck">
            <img src="https://thriftenergy.co.uk/wp-content/uploads/2020/04/van.png" />
        </div>
    </div>
    <div class="block">
        <img src="https://thriftenergy.co.uk/wp-content/uploads/2020/07/members.png" style="width:100%;"/>
    </div>
<?php endwhile; ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF6LXHCi7KK5RjtV4Tubv68SShrQWfOio&libraries=places"></script>
<script>
	  
	jQuery(document).ready(function($) {
		$("#subject").val($("#email_subject").val());

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

		$(".wpcf7-list-item label").append("<span class='checkmark'></span>");
		$(".how .checkmark").remove();
		$(".accept .checkmark").remove();
		$("<span class='checkmark'></span>").insertBefore(".how .wpcf7-list-item-label");
		$("<span class='checkmark'></span>").insertBefore(".accept .wpcf7-list-item-label");



		$(".fa-bars").click(function() {
			$("header").toggleClass("open");
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

		function scrollToAnchor(aid){
			var aTag = $(aid);
			$('html,body').animate({scrollTop: aTag.offset().top},'slow');
		}

		$(".cf7mls_next").click(function() {
			scrollToAnchor(".wpcf7-form");
		})

	});
</script>	
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<?php get_footer(); ?>