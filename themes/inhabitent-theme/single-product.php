<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		 <?php the_post_thumbnail( 'large' ); ?>
			<?php the_title( sprintf( '<p class="entry-title">', esc_url( get_permalink() ) ), '</p>' ); ?>
		  	<p><?php echo CFS()->get( 'product_price' ); ?><p>
			</p><?php echo $_product->post->post_excerpt; ?></p>

<div class= "social-buttons">
	<a class = "like-button" href ="#"><i class="fa fa-facebook" aria-hidden="true">  Like</i></a>
    <a class = "twitter-button" href ="#"><i class="fa fa-twitter" aria-hidden="true">  Tweet</i></a>
	<a class = "pinterest-button" href ="#"><i class="fa fa-pinterest" aria-hidden="true">  Pin</i></a>
</div>


		</main><!-- #main -->
		</div><!-- #primary -->


<?php get_footer(); ?>