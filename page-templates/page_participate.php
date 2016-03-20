<?php

/*

Template Name: 報名頁面

*/
	//get_header();
?>
<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( get_theme_mod('site_favicon') ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
<?php endif; ?>

<?php
wp_head();
?>



</head>

<body <?php body_class(); ?>>
<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php sydney_slider_template(); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
                <div class="row">
				<div class="col-md-4 col-sm-8 col-xs-12">
		        <?php if ( get_theme_mod('site_logo') ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
		        <?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
		        <?php endif; ?>
				</div>
				<div class="col-md-8 col-sm-4 col-xs-12">
					<div class="btn-menu"></div>
					<nav id="mainnav" class="mainnav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="header-image"><?php sydney_header_overlay(); ?></div>


	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">	


	<style>
	.container{
		padding:0;
	}
	body{
		background-color: #ffffff;
		background-image: url(http://www.transparenttextures.com/patterns/batthern.png);

	}
	img{
		border-radius: 7px;
	}
	#masthead{
		display: none;
	}
	.page-wrap {
    padding: 17px 0 100px;
    clear: both;
}
.page-wrap .content-wrapper{
	background-color: inherit;
}
	#apply_form{
		//text-align: center;
	}
	.center-block{
		margin: 0 auto;
		float: none;

	}
.overlay{
	    background-color: initial;
}
.header-image {
    height: 333px;
    background-size: contain;
    background-position-x: 50%;
    background-repeat: no-repeat;
}
.ninja-forms-cont{
	background-color: rgba(255,255,255,.7);
    padding:17px 21px;
    border-radius: 17px;
}
.ninja-forms-form input,.ninja-forms-form textarea,.ninja-forms-form select{
	border: 2px solid #CAC6C6;
}
.ninja-forms-form label{
	font-size: 21px;
}
.ninja-forms-cont p{
	line-height: 1.5;
}
@media only screen and (max-width:768px){
	.container{
		padding: 17px;
	}
	.ninja-forms-cont{
	    padding:17px 0px;
	}
}

.ninja-forms-all-fields-wrap .submit-wrap,.text-wrap{
	text-align: center;
}

</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="apply_form" class="col-md-10  col-sm-12 col-xs-12 center-block">
			
			<?php
				$page_fields= get_field_objects();
				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( $page_fields['form-id']['value'] ); }
			?>
			</div>
			
			
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php 
	//enqueue_jquery_ui();
	?>
<script type="text/javascript">
// Facebook Pixel Code
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1591191897832819');
fbq('track', "PageView");

//
var $ = jQuery.noConflict();

$(document).ready(function () {
	$('.ninja-forms-cont [type="submit"]').click(function() {
	    var $btn = $(this);
	    $btn.button('loading');
	    // Then whatever you actually want to do i.e. submit form
	    // After that has finished, reset the button state using
	    setTimeout(function () {
	        $btn.button('reset');
	        $('html, body').animate({scrollTop:$('#ninja_forms_field_22_label').position().top}, 'slow');
	    }, 3700);
		fbq('track', 'Lead');
	});
	#('')
/*
	$('.ninja-forms-response-msg').each(function(){
		$(this).bind("DOMSubtreeModified",function(){
			$(this).find( "#dialog" ).dialog({
			  modal: true,
			  draggable: false,
			  buttons: {
				Ok: function() {
				  $( this ).dialog( "close" );
				}
			  }
			});
			btn_submit.button('reset');
		});
	});
*/
});
</script>
<!-- Facebook Pixel Code -->
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1591191897832819&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php get_footer(); ?>

