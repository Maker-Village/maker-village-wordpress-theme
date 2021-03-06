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
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri().'/'; ?>css/materialize.css"  media="screen,projection"/>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri().'/'; ?>js/materialize.min.js"></script>


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
      
      <!--fitst picture-->
      
      <img id= "top_pic"src="<?php echo get_template_directory_uri().'/'; ?>pic/first_pic.jpg">
      <div id= "top_word" class="card">
        <div class="card-content row">
          <h1><a style="font-size: 135%; color: #FFFFFF ;">M</a>AKER <a style="font-size: 135%; color: #FFFFFF;">V</a>ILLAGE</h1>
          <p>坐落於鳳梨田中的maker space</p>
          </br>
          <a id="top_btn" href="#about_us" class="waves-effect waves-light mobile-nav">關於我們</a>
        </div>
      </div>
      

      <!--content-->


      
      <div class="content" >
        <!--about us-->
        <div id ="about_us" class= "container section  scrollspy">
          
          <div class="card row">
            <p>我們是?</p>
            <p  class= "col s12 m6 l8">
              我們是一群喜愛動手做，將腦海中的創意化為現實的夥伴。
            </p>
            <img class= "right  col s6 m6 l4" src="<?php echo get_template_directory_uri().'/'; ?>pic/LOGO-3.jpg"></img>
          </div>
          <div class="card row">
            <p>我們希望?</p>
            <p class= "col s12 m6 l8">
              希望將動手實作的Maker精神介紹給中正的師生們，藉由空間與工具的提供，降低大家實務上的門檻；
            </p>
            <img class= "right  col s6 m6 l4" src="<?php echo  get_template_directory_uri().'/'; ?>pic/LOGO-3.jpg"></img>
          </div>
          <div class="card row">
            <p>我們會?</p>
            <p class= "col s12 m6 l8">
              不定期舉辦Maker講座、手作工作坊讓同學們學習與體驗手作的樂趣，</br>更是要讓來自不同學院、帶著不同的思維的同學們，匯聚於此地，一起碰撞出各種創新創意的火花！
            </p>
            <img class= "right col s6 m6 l4" src="<?php echo  get_template_directory_uri().'/'; ?>pic/LOGO-3.jpg"></img>
          </div>
        </div>
        
        <div class="divider"></div>
        <!--device-->
        <div id ="device" class ="container row section  scrollspy">
          <h2>空間設備</h2>
          
          <div class="card medium col s12 m4 l4">
            <div class="card-image">
              <img src="<?php echo  get_template_directory_uri().'/'; ?>pic/3Dprinter.jpg">
              <span class="card-title">3D 印表機</span>
            </div>
            <div class="card-content">
              <p>創造你的無限可能</p>
            </div>
            <div class="card-action">
              <a href="#">代印服務</a>
              <a href="#">線上估價</a>
            </div>
          </div>
        
          <div class="card medium col s12 m4 l4">
            <div class="card-image">
              <img src="<?php echo  get_template_directory_uri().'/'; ?>pic/Soldering_iron.jpg">
              <span class="card-title">電子焊接器材</span>
            </div>
            <div class="card-content">
              <p>焊出網羅</p>
            </div>
          </div>

        </div>

        <div class="divider"></div>
        <!--class info-->
        <div id ="event_info" class="section container  scrollspy">
          <h2>課程資訊</h2>
          <img style="width: 100%" src="<?php echo  get_template_directory_uri().'/'; ?>pic/class.jpg"></img>
        </div>
        
        <div class="divider"></div>
        <!--project-->
        <div id ="project" class="section container">  
          <h2>開發專案</h2>
          <!--Delta 3DP 校平升級-->
          <!--LED 表演系列-->

        </div>
        
        <div class="divider"></div>
        <!--member-->
        <div id ="member" class="section grey  scrollspy">
          <div class ="container">
            <h2>空間成員</h2>
            <div class="row">
               
              <div class="card member col l12 m12 s12 ">
                <p>路人甲</p>
                <img src="<?php echo  get_template_directory_uri().'/'; ?>pic/no-pic.jpg"> </img>
                <div>
                  真的只是個路人甲
                </div>
              </div>

              <div class="card member col l12 m12 s12 ">
                <p>路人乙</p>
                <img src="<?php echo get_template_directory_uri().'/'; ?>pic/no-pic.jpg"> </img>            
                <div>
                  我是路人乙
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      
      
      <!--footer-->
      <footer id="footer" class="grey darken-3">
       
       <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">相關連結</h5>
              <ul class="grey-text text-lighten-4">
                <li><a href="https://www.facebook.com/ccuMakerVillage">粉絲專頁</a></li>
                <li><a href="http://maker-village.tk/">部落格</a><li>
              </ul>
            </div>

            <div class="col l6 s12">
              <h5 class="white-text">引用資源</h5>
              <ul class="grey-text text-lighten-4">
                <li>jQuery</li>
                <li>materializecss</li>
              </ul>
            </div>

          </div>
        </div>

        <div class="footer-copyright">
          <div class="container grey-text text-lighten-4"> 
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="創用 CC 授權條款" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />本著作由<span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Maker Village</span>製作，以<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">創用CC 姓名標示-非商業性-相同方式分享 4.0 國際 授權條款</a>釋出。
          </div>
        </div>
      </footer>



<?php get_footer(); ?>
