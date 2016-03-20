<?php
/**
Template Name: POSTS
 */

get_header(); ?>
<?php 
// the query START
$args = array(
	'orderby' => 'date'
);
$the_query = new WP_Query($args);
?>
<style>
	body,#primary,#secondary{
		//background-color: black;
	}
	.maincontent{
				width: 1350px;
		max-width: 100%;
		margin: 0 auto;
	}
	.content-area .hentry:after{
		width: 100%;
	}
	#primary,#secondary{
		margin-top: 91px;
		
	}
	.container-fluid{
		padding:0 17px;
	}
	.title-post a{
		    color: #F33C3C;
	}
	.hentry .meta-post, .hentry .meta-post a,.entry-post{
		color: #B3AEAE;
	}

	/*g*/

</style>


	<div id="primary" class="content-area col-md-9 <?php echo sydney_blog_layout(); ?>">
		<main id="main" class="post-wrap" role="main">


		<?php if (  $the_query->have_posts() ) : ?>

		<div class="posts-layout">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<?php
					get_template_part( 'content', get_post_format() );
				?>
			
			<?php endwhile; ?>
		</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
	if ( get_theme_mod('blog_layout','classic') == 'classic' ) :
	//get_sidebar();
	endif;
?>



<?php get_footer(); ?>
