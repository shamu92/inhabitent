<?php get_header(); ?>
	
<header class="page-header">
<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
</header><!-- .page-header -->

<section class = "product-types">
		<?php
    	$terms = get_terms('product_type');
    
		foreach ($terms as $term):
    	?>
    	<div class="categories-on-shop-page">
        	<?php $url = get_term_link ($term->slug , 'product_type'); ?>
       		<a href="<?php echo $url ?>"> <?php echo $term->name; ?> </a>
    	</div>

<?php endforeach; ?>
	</div>
</section>


<div id="primary" class="content-area product-area">

		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
    <section class= "all-products">



			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
            
                <div class = "one-product">
				    <?php
					    get_template_part( 'template-parts/content-products' );
				    ?>
                
                </div>
              
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content-products', 'none' ); ?>

		<?php endif; ?>
    </section>  
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

