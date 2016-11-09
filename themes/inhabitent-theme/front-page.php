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

<section class="recent-posts">    
    <?php
        $args = array( 'post_type' => 'post',
                        'order' => 'ASC', 
                        'posts_per_page'=> 3 );
        $posts = get_posts( $args ); // returns an array of posts
    ?>
    <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

        <?php the_post_thumbnail(["400px, 400px"]); ?>
        <div class = "home-page-journal-info">
            <?php the_date(); ?>
            <?php comments_number(); ?>
            <?php the_permalink();?>
              <h2><?php the_title();?></h2>
        </div>


    <?php endforeach; wp_reset_postdata(); ?>
</section>

    



<div class= "latest-adventures">
    <h2 class ="latest-adventures-title">Latest Adventures</h2>

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
     <p><a class = "more-adventures-button" href ="#">More Adventure</a></p>
</div>
<?php get_footer(); ?>
