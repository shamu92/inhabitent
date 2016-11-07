<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="hero-banner">
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div>
    <h2 class ="latest-adventures">Latest Adventures</h2>

    <section class= "adventures">
        <div class="box-1">
            <a class = "adventure-link" href ="#">Getting Back to Nature in a Canoe</a>
            <p><a class = "read-more-button" href ="#">Read More</a></p>
        </div>
        <div class="right-box">
            <div class="box-2">
                <a class = "adventure-link" href ="#">A night with Friends at the Beach</a><br>
                <p><a class = "read-more-button" href ="#">Read More</a></p>

            </div>
            <div class = "bottom-right-box">  
                <div class="box-3">
                    <a class = "adventure-link" href ="#">Taking in the View at Big Mountain</a>
                    <p><a class = "read-more-button" href ="#">Read More</a></p>

                </div>
                <div class="box-4">
                    <a class = "adventure-link" href ="#">Star-Gazing at the Night Sky</a>
                    <p><a class = "read-more-button" href ="#">Read More</a></p>

                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
