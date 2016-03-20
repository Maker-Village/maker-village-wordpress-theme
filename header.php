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
      <!--Facebook like box SDK -->
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      <!--navbar-->
      <style>
      nav ul a{
        font-size: 1.6rem!important;
      }
      </style>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper red">
            <a href="http://maker-village.github.io/" class="brand-logo" ><img class="top" src = "<?php echo get_template_directory_uri(); ?>/pic/LOGO.png" ></img></a>
            <ul class="right hide-on-med-and-down ">
              <li><a href="http://maker-village.github.io/#about_us_content">關於我們</a></li>
              <li><a href="http://maker-village.github.io/#event_info">活動資訊</a></li>
              <li><a href="device.html">空間設備</a></li>
              <li><a href="project.html">開發專案</a></li>
              <li><a href="http://maker-village.github.io/#member">空間成員</a></li>
              <li><a href="http://maker-village.github.io/#footer">聯絡我們</a></li>
              <li><a href="http://maker-village.tk/?page_id=412" target="_blank">預約系統</a></li>
              <li><a href="http://maker-village.tk/"  target="_blank">部落格</a></li>
              <li><a href="https://www.facebook.com/ccuMakerVillage"  target="_blank"><i class="fa fa-facebook-square"></i></a></li>
            </ul>
 
            <ul id="mobile-nav" class="side-nav">
              <li><a href="http://maker-village.github.io/#about_us_content">關於我們</a></li>
              <li><a href="http://maker-village.tk/"  target="_blank">部落格</a></li>
              <li><a href="https://www.facebook.com/ccuMakerVillage"  target="_blank">粉絲專頁</a>
              <li><a href="http://maker-village.github.io/#event_info">活動資訊</a></li>
              <li><a href="device.html">空間設備</a></li>
               <li><a href="http://maker-village.tk/?page_id=412" target="_blank">預約系統</a></li>
              <li><a href="project.html">開發專案</a></li>
              <li><a href="http://maker-village.github.io/#member">空間成員</a></li>
              <li><a href="http://maker-village.github.io/#footer">聯絡我們</a></li>
            </ul>
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