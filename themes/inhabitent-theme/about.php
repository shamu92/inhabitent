<?php /* Template Name: About Page */?>
<?php get_header();?>
<div class = "about-hero">
<h1>About</h1>
</div>
<section class = "about-content">
	<h2><?php echo CFS()->get( 'our_story' );?></h2>
	<p><?php echo CFS()->get( 'content_of_our_story' );?></p>
	<h2><?php echo CFS()->get( 'our_team' );?></h2>
	<p><?php echo CFS()->get( 'content_of_our_team' );?></p>
	
</section>
<?php get_footer(); ?>
