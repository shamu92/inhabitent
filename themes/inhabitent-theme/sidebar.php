<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class= "contact-info">
	<h3>Contact Info</h3>
	<p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="info@inhabitent.com">info@inhabitent.com</a></p>
	<p><a href="tel:778-456-7891">778-456-7891</a></p>
	<p> 1490 W Broadway Vancouver, BC V6H 1H5</p>
</div>


<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
