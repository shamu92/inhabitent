<?php /* Template Name: Find Us */?>
<?php get_header();?>


<div class = "find-us-content-and-sidebar">
	
	<section class ="find-us-content">
		<h1 class = "find-us-title">Find Us</h1>
		<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
							<?php
								get_template_part( 'template-parts/content-page' );
							?>
					
					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</section>
	<div class="find-us-side-bar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>

