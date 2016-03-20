<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */

?>
<!DOCTYPE html>
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
enqueue_makervillage();
wp_head();
 ?>

</head>

<body <?php body_class(); ?>>
      <!--Import jQuery before materialize.js-->
	    <script type="text/javascript">
        $( window ).scroll(function() {
          //console.log($("body").scrollTop());
          //logo & navbar
          if($(document).scrollTop()>250){
            $('nav .brand-logo .top').removeClass("top");
            $('nav .brand-logo img').attr("src","<?php echo get_template_directory_uri().'/'; ?>pic/LOGO-2.png");

            $('nav .nav-wrapper').addClass("alpha-5");
          }else{
            $('nav .brand-logo img').addClass("top");
            $('nav .brand-logo img').attr("src","<?php echo get_template_directory_uri().'/'; ?>pic/LOGO.png");
            
            $('nav .nav-wrapper').removeClass("alpha-5");
          }

          //top picture
          var scal;
          if( screen.availWidth < 900)
            scal = 0.9;
          else
            scal = 1.07;
          var h = (650-$(document).scrollTop()*scal);
          var value = "clip: rect(0px, 2000px, " + h + "px, 0px); ";
          $("#top_pic").attr("style", value);
        });
        
        $(document).ready(function(){
          $('.scrollspy').scrollSpy();
          $(".button-collapse").sideNav({
            edge: 'right',
            closeOnClick: true
          });
        });

      </script>
      <!--navbar-->
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper red">
            <a href="#" class="brand-logo" ><img class="top" src = "<?php echo get_template_directory_uri().'/'; ?>pic/LOGO.png" ></img></a>
            <!--
            <ul class="right hide-on-med-and-down ">
              <li><a href="#about_us">關於我們</a></li>
              <li><a href="#device">空間設備</a></li>
              <li><a href="#event_info">活動資訊</a></li>
              <li><a href="#project">開發專案</a></li>
              <li><a href="#member">空間成員</a></li>
              <li><a href="#footer">聯絡我們</a></li>
            </ul>

            <ul id="mobile-nav" class="side-nav">

              <li><a href="#about_us">關於我們</a></li>
              <li><a href="#device">空間設備</a></li>
              <li><a href="#event_info">活動資訊</a></li>
              <li><a href="#project">開發專案</a></li>
              <li><a href="#member">空間成員</a></li>
              <li><a href="#footer">聯絡我們</a></li>
            </ul>
            -->
            <style>
				.menu-mobile-nav-container{
					float: right;
				}
            </style>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
             <a href="#" data-activates="mobile-nav" class="right button-collapse"><i class="material-icons">menu</i></a>
          </div>
        </nav>
      </div>
      <!--contact icon-->

<div class="<?php 
if(has_action("header_container")){
  do_action("header_container");
}else{
  echo "container_fluid";
}
?> maincontent">
  <div class="row">