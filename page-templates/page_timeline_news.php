<?php
/**
Template Name: timeline NEWS
*/

add_action("header_container","no_fluid");

enable_masonry();
get_header();
$orderBy = 'date';


?>
<div id="primary" class="content-area col-md-12 col-sm-12 col-sx-12 nopadding">
	<main id="main" class="post-wrap" role="main">
	<div id="blog-posts" class="row">
		<?php
		// the query START
		$args = array(
			'orderby' => $orderBy,
		);
		$the_query = new WP_Query($args);
		?>
		
		<?php //if ( $the_query->have_posts() ) : ?>
		
		
		<!-- the loop --><!-- package-tour items -->
		<div id="news-masonry" class="col-md-12 col-sm-12 col-xs-12" style="">
			<div class="grid">
				<div class="timeline_container">
					<div class="top-date"><div class="mdi-action-today"></div><br><span>DATE</span></div>
					<div class="timeline">
						<div class="plus"></div>
					</div>
				</div>
				<div class="grid-sizer"></div>
				<?php
				if (have_posts()) :
					while ($the_query->have_posts()) :$the_query->the_post();
				?>
						
<?php 
	global $wtf_nth;
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'sydney-large-thumb', true);
	
	/*	<?php the_title(); ?>
		the_permalink();
		echo $thumb_url[0];
		the_title();
		the_excerpt();
		<?php echo the_date('Y-m-d', '', '',false); ?>
		the_date('M')
	*/ 
		?>
<?php //DEBUG
/*	echo '<pre>';
	print_r($thumb_url);
	echo '</pre>';*/
	$wtf_nth++;
?>

<?php
	// trouble if-else
	if ($wtf_nth==1) {
    echo '';
		$post_year_first = get_the_date('Y');
		echo '<div class="year-box grid-item"><div class="timeline-obj"></div><div class="year-box-item"><h2>'.$post_year_first.'</h2></div></div>';
 $wtf_nth++;
	}else{
		$post_year = get_the_date('Y','','',false);
		if($post_year_first !=$post_year){
   $post_year_first = $post_year;
			echo '<div class="year-box grid-item"><div class="timeline-obj"></div><div class="year-box-item"><h2>'.$post_year.'</h2></div></div>';
   $wtf_nth++;
		}
	}
	//$post_date = the_date('M D','','',false);
?>

<div class="thumbnail grid-item <?php echo ($wtf_nth==2)?'nth-child-not-working-sad':$wtf_nth;?>" post-date="<?php
$days_old = (current_time(timestamp) - get_the_time('U') - (get_settings('gmt_offset') *3600 ) ) / (60*60*24);
if ($days_old <=1) {
echo 'Today';
} elseif ($days_old > 1 & $days_old <= 2) {
echo 'Yesterday';
} else {
the_time('M d');
}
?>">
	<div class="timeline-obj"></div>
	<a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_url[0]; ?>" alt=""></a>
    <div class="caption">
    	<h4><?php echo get_the_title(); ?></h4>
    	<?php 
    	//the_excerpt_custom();
    		//echo "CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT";
    	the_excerpt(); 
    	?>
    	<p class="more"><a href="<?php the_permalink(); ?>" class="btn btn-success" role="button">READ MORE...</a></p>
    </div>
</div>

				<?php	endwhile; ?>
				<?php endif; ?>
				<?php
				/*
				while ( have_posts() ) : the_post();
						the_content();
				endwhile; // end of the loop.
				*/
				?>
			</div><!-- .masonry-layout>.grid -->
		</div> <!-- .masonry-layout -->
		<?php //endif; ?>
		<style type="text/css">
		.grid-item{
			border: 2px solid #ddd;
		}
		.year-box{
			border: none!important;
		}
		.grid-item img{
			border-radius: 7px;
		}
		@media screen and (min-width: 768px) and (max-width: 991px){
			.container {
			width: 100%;
			}
		}
		@media screen and (max-width: 768px){
			.grid-item img{
				max-height: 768px;
			}
			.container {
			//width: 100%;
			}
			.grid-item{
				width: 100%;
				margin-left: 0;
			margin-right: 0;
			margin-top: 57px;
			}
			.timeline-obj [class^="left"]:not(.leftLine),.timeline-obj [class^="right"]{
				margin-left: 50%;
			}
			.leftDate, .rightDate{margin-top: -49px !important;}
			.leftLine, .rightLine{margin-top: -8px !important;}
			.leftCorner,.rightCorner{
				margin-top: -17px !important;
				//transform: translateX(-17px) !important;
				left: -14px !important;
			}
			.leftLine,.rightLine{
				display: none!important;
			}
			.year-box.grid-item {
			margin-top: 17px;
			margin-bottom: 17px;
			}
			.year-box-item{
				float: none !important;
				border-radius: 100px;
			display: inline-block;
			padding: 3px 23px;
			border: 4px solid #FD6260; /* TOP DATE*/
			margin-top: 0;
			background-color: #FD6260;
			}
			.year-box-item>h2{
				margin: 0;
				color: white;
			}
			.year-box .leftCorner,.year-box .rightCorner{
				display: none;
			}
		}
		@media screen and (min-width: 769px){

			#primary{
				/*padding: 0 37px!important;*/
			}
			

			.thumbnail{
				padding: 11px!important;
			}
			.grid-item.nth-child-not-working-sad{
				margin-top: 153px !important;
			}
			.grid-item{
				width: 40%;
				margin-left: 5%;
				margin-right: 5%;
				margin-top: 53px;
			}

			.timeline-obj [class^="left"]:not(.leftLine){
			margin-left: 112.5%;
			}
			.timeline-obj [class^="right"]{
				margin-left: -12.5%;
			}
			.year-box.grid-item{
				margin-top: 27px;
				margin-bottom: 77px;
			}
			.year-box-item{
				border-radius: 100px;
			display: inline-block;
			padding: 7px 23px;
			border: 4px solid #FF312E;
			margin-top: 65px;
			}
			.year-box-item>h2{
				margin: 0;
				color: #FF312E;
			}
		}
		.year-box.grid-item{
			/*padding: 2px; equal to .thumb -2px */
			text-align: center;
		}
		.caption>.more{
			text-align: center;
			margin-top: 16px;
		}
		.top-date{
			color: #FD6260;
			margin-top: -51px;
		position: absolute;
		left: 0;
		right: 0;
		}
		.top-date>div{
			font-size: 33px;
		margin-top: -50px;
		
		}
		.top-date>span{
			border-radius: 99px;
		background-color: #FD6260;
		padding: 3px 15px;
		color: white;
		font-size: 23px;
		}
		.timeline_container{
			text-align: center;
			margin: 0 auto;
			cursor:pointer;
			display: block;
		}
		.timeline{
			height: 100%;
			left: 50%;
			transform: translateX(-2px);
			margin: 0 auto;
			background-color:#FD6260;
			display: block;
			float: left;
			margin-top: -13px;
			position: absolute;
			width: 6px;
			border-radius: 6px;
			margin-top: 13px;
		}
		.timeline div.plus{width: 14px;height: 14px;position: relative;left: -6px;}
		.leftDate, .rightDate{
		width: 80px;
		background-color: rgba(0,0,0,.3);
		color: white;
		border-radius: 100px;
		padding: 3px 7px;
		text-align: center;
		position: absolute;
		margin-top: 11px;
		}
		.leftDate{
		//transform: translateX(-42px);
		left: -38px;
		margin-top: 47px;
		}
		.rightDate{
		//transform: translateX(-46px);
		//transform: translateX(-41px)\9;
		left: -42px;
		left: -41px\9;
		margin-top: 11px;
		}
		.leftLine,.rightLine{
			display: block;
		/*margin-top: 62px;*/
		padding: 0;
		vertical-align: top;
		z-index: 90;
		position: absolute;
		background-color: #FF312E;
		height: 4px;
		width: 12.5%;
		}
		.leftLine{
			//transform: translateX(-4px);
			left: 0;
			margin-left: 100%;
			margin-top: 98px;
		}
		.rightLine{
		//transform: translateX(-5px);
		left: -1px;
		left: -1px\9;
		margin-top: 62px;
		}
		.leftCorner,.rightCorner{
		height: 28px;
		width: 28px;
		background-color: #FF312E;
		border-radius: 100px;
		//box-shadow: 2px 2px 3px rgba(0,0,0,.6);
		border: 2px solid white;
		display: block;
		padding: 0;
		z-index: 20;
		position: absolute;
		 /* margin-top: 50px; */
		vertical-align: top;
		}
		.year-box {
			left: -13px;
		}
		.leftCorner{
		//transform: translateX(-15px);
		left: -11px;
		left: -12px\9;
		margin-top: 86px;
		}
		.rightCorner {
		//transform: translateX(-18px);
		//transform: translateX(-14px)\9;
		left: -14px;
		margin-top: 50px;
		}
		#main{
			padding: 0;
			//padding-top: 53px;
		}
		.grid{
			margin-top: 77px;
		}
		#blog-posts{
			overflow: hidden;
		}
		.news-front{
			position: absolute;
			top:0;
			left: 0;
			width: 100%;
			height: 100%;
			color: white;
		}
		.news-hover{
			position: absolute;
			top:0;
			left: 0;
			width: 100%;
			height: 100%;
			color: white;
			background-color: rgba(0,0,0,.5);
			overflow: hidden;
			z-index: 100;
			text-align: center;
		}
							.news-hover .news-title{
			position: relative;
			display: block;
			padding: 15px 5px 15px 5px;
		text-align: center;
		width: 100%;
		}
							.news-hover .news-date{
			position: relative;
			display: inline-block;
		text-align: center;
		margin-top: 20%;
		//width: 100%;
		}
		.news-title{
			font-size: 24px;
			font-weight: bold;
		}
		.news-date{
		text-align: center;
		outline: 2px solid #FF312E;
		font-size: 20px;
		}
		.news-month{
			display: block;
			border-bottom: 2px solid #FF312E;
			font-size: 90%;
		}
		.news-day{
			display: block;
		line-height: 1;
		padding: 7px 12px;
		text-align: center;
		font-size: 30px;
		font-weight: bold;
		}
		.news-date,.news-title{
			position: inherit;
			word-break:keep-all;
			//white-space: pre-line;
			word-wrap:break-word;
			overflow-wrap: break-word;
		}
		.news-front>.news-date{
			color: black;
			top:10px;
			right: 10px;
		}
		.news-front>.news-title{
			bottom: 10px;
			margin-left: 7px;
			margin-right: 7px;
			
			text-shadow: 1px 1px black;
		}
		.grid-item,.grid-sizer{
			float: left;
			//max-height: 500px;
			//background-color: blue;
		}
		</style>
		<script>
			;(function($){
				var $grid = $('#news-masonry .grid').masonry({
					// options
					itemSelector: '.grid-item',
					columnWidth: '.grid-sizer',
						percentPosition: true
				});
				$grid.imagesLoaded().progress( function() {
					$grid.masonry('layout');
				});
				$grid.on( 'layoutComplete',
					function( event, laidOutItems ) {
						Arrow_Points();
					}
				);
				$(document).ready(function($) {
					$grid.masonry('layout');
					alg_news_hover();
				});
				function Arrow_Points()
				{
					var s = $('#news-masonry .grid').find('.grid-item');
					$.each(s,function(i,obj){
						var posLeft = $(obj).css("left");
						$(obj).addClass('borderclass');
						if(posLeft != "0px")
						{
							html = "<span class='rightCorner'></span><div class=\"rightLine\"></div>";
							if($(obj).attr('post-date')){
								html += "<div class=\"rightDate\">"+$(obj).attr('post-date')+"</div>";
							}
							$(obj).children('.year-box-item').css('float', 'left');
						}
						else
						{
							html = "<span class=\"leftCorner\"></span><div class=\"leftLine\"></div>";
							if($(obj).attr('post-date')){
								html += "<div class=\"leftDate\">"+$(obj).attr('post-date')+"</div>";
							}
							$(obj).children('.year-box-item').css('float', 'right');
						}
						$(obj).children('.timeline-obj').hide();
						$(obj).children('.timeline-obj').html(html);
						$(obj).children('.timeline-obj').fadeIn('slow');
					});
				}
			})(jQuery);
		</script>
	</div><!-- .container+.row -->
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>