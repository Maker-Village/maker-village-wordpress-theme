<?php
/*
Template Name: Front Page
*/

get_header(); ?>
<style>
	#primary{
		width: 1100px;
		margin: 100px auto;
	}
/**/

	.preview {
    float: left;
    overflow: hidden;
}
@media screen and (min-width: 1421px){
.preview {
        float: left;
    max-width: 50%;
}

.info {
    float: left;
    width: 50%;
    text-align: right;
}
}
.info h3,.info .description{
	text-align: right;
}
.info hr {
    border: none;
    border-right: 100px solid #ff6300;
    height: 1px;
    margin: 0 0 19px;
}
.test{
	overflow: hidden;
}
</style>
	<div id="primary" class="">
		<main id="main" class="site-main" role="main">
<div class="test">
<div class="preview">
<div class="thumbnail">
    <img width="800" height="310" src="http://maker-village.tk/wordpress/wp-content/uploads/2015/12/123123123.jpg" class="attachment-post-thumbnail wp-post-image" alt="default-calendar"> 
     </div>                       </div>
<div class="info">
<h3 class="title">Maker Village 工作空間</h3>
<hr>
<div class="description"> 
<p>每個成功的自造者後面，都有一間應有盡有的工作室……</p>
</div>
</div>
</div>
			<div class="entry-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
