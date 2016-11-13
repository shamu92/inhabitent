<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<section class = "single-product-content">
	<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title">', '</h1>' )); ?>
	</header><!-- .entry-header -->
	<p class = "single-page-price"><?php echo CFS()->get( 'product_price' ); ?><p>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class= "social-buttons">
		<a class = "like-button" href ="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
		<a class = "twitter-button" href ="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
		<a class = "pinterest-button" href ="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
	</div>

</section>
	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->