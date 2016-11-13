<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				
				<div class="footer-content">
					
					<div class = "contact">
						<h3>Contact Info</h3>
						<p>
							<i class="fa fa-envelope fa-lg" aria-hidden="true"></i><a href="info@inhabitent.com"> info@inhabitent.com</a>
						</p>
						<p>
							<i class="fa fa-phone fa-lg" aria-hidden="true"></i><a href="tel:778-456-7891"> 778-456-7891</a>
						</p>
						<p>
							<i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
							<i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
							<i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i>
						</p>
					</div>
					<div class = "business-hours">
						<h3>Business Hours</h3>
						<p><span class="day">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="day">Saturday:</span> 10am to 2pm</p>
						<p><span class="day">Sunday:</span> Closed</p>

					</div>
					<div class = "footer-content-right">
						<div class = "logo-bottom">
							<a href = "#"><img class ="logo-bottom" src = "<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt = "inhabitent logo"></a>
						</div>
					</div>
				</div>
				
				<div class="site-info">
					Copyright &copy; 2016 Inhabitent
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
