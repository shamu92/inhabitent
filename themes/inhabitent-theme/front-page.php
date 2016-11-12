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

    <h2 class ="front-page-h2">Shop Stuff</h2>
<section class = "product-types-on-front-page">
    <?php

    $terms = get_terms('product_type');
    foreach ($terms as $term):
    ?>

    <div class="product-type-on-front-page">
        <?php $url = get_term_link ($term->slug , 'product_type'); ?>

        <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg">
        <p> <?php echo $term->description ?> </p>
        <div class = "category-link-button"><a href="<?php echo $url ?>"> <?php echo $term->name . ' Stuff'; ?> </a></div>
    </div>

<?php endforeach; ?>

</section>

<h2 class ="front-page-h2">Inhabitent Journal</h2>
<section class="recent-posts">    
    <?php
        $args = array( 'post_type' => 'post',
                        'order' => 'ASC', 
                        'posts_per_page'=> 3 );
        $posts = get_posts( $args ); // returns an array of posts
    ?>
    <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
    <div class = "home-page-journal-entry">
        <?php the_post_thumbnail(); ?>
        <div class = "home-page-journal-info">
           <p> <?php the_date(); ?> /
            <?php comments_number(); ?></p>
              <h2><a href="<?php echo the_permalink();?>" <h2><?php the_title();?></h2></a></h2>
              <a class = "journal-link-button" href="<?php echo the_permalink();?>">Read Entry</a>
        </div>
    </div>


    <?php endforeach; wp_reset_postdata(); ?>
</section>

    



<div class= "latest-adventures">
    <h2 class ="front-page-h2">Latest Adventures</h2>

    <section class= "adventures">
        <div class="box-1">
            <h3><a class = "adventure-link" href ="#">Getting Back to Nature in a Canoe</a></h3>
            <p><a class = "read-more-button" href ="#">Read More</a></p>
        </div>
        <div class="right-box">
            <div class="box-2">
                <h3><a class = "adventure-link" href ="#">A night with Friends at the Beach</a></h3><br>
                <p><a class = "read-more-button" href ="#">Read More</a></p>

            </div>
            <div class = "bottom-right-box">  
                <div class="box-3">
                    <h3><a class = "adventure-link" href ="#">Taking in the View at Big Mountain</a></h3>
                    <p><a class = "read-more-button" href ="#">Read More</a></p>

                </div>
                <div class="box-4">
                    <h3><a class = "adventure-link" href ="#">Star-Gazing at the Night Sky</a></h3>
                    <p><a class = "read-more-button" href ="#">Read More</a></p>

                </div>
            </div>
        </div>
        
    </section>
     <p><a class = "more-adventures-button" href ="#">More Adventures</a></p>
</div>
<?php get_footer(); ?>
