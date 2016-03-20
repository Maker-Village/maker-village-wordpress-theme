<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sydney
 */
add_action("header_container","no_fluid");
get_header(); ?>

<style>
	body,#primary,#secondary{
		//background-color: black;
	}
	.maincontent{
		/*		width: 1350px;
		max-width: 100%;
		margin: 0 auto;*/
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
	.content-area{
		padding-right: 13px;
	}
	.post-wrap,#secondary{
		background: white;
		padding: 13px;
		border: 2px solid #ddd;
	}

</style>
	<?php if (get_theme_mod('fullwidth_single')) { //Check if the post needs to be full width
		$fullwidth = 'fullwidth';
	} else {
		$fullwidth = '';
	} ?>

	<div id="primary" class="content-area col-md-8 <?php echo $fullwidth; ?>">
		<main id="main" class="post-wrap" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php sydney_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php if ( get_theme_mod('fullwidth_single', 0) != 1 ) {
	get_sidebar();
} ?>
<?php get_footer(); ?>
