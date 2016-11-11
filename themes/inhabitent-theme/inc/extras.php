<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}


function my_login_logo() { ?>
   <style type="text/css">
       #login h1 a, .login h1 a {
           background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
           padding-bottom: 30px;
            background-size: 310px !important; width: 310px !important;background-position: bottom !important;
       }
   </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

 /**
* Custom About Page background image
*/
function tent_styles_method() {

                if(!is_page_template( 'about.php' )){
                    return;
                }

       $url = CFS()->get( 'about_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
               .about-hero{
                       background: linear-gradient(rgba(0, 0, 0, .2) 0%, rgba(0, 0, 0, .2) 100%), url({$url}) no-repeat center bottom;
                       background-size: cover, cover;
               }";
       wp_add_inline_style( 'red-starter-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'tent_styles_method' );

// get sixteen posts on product page ************************************

function get_product_posts($query) {
	if( is_post_type_archive( 'product') && !is_admin() && $query->is_main_query()) {
		$query->set ('posts_per_page', '16');
		$query->set ('orderby', 'title');
		$query->set ('order', 'ASC');
	}
}
add_action( 'pre_get_posts', 'get_product_posts');

// filter archive title


function archive_product_title( $title ) {

    if(is_post_type_archive('product')) {

        $title = 'Shop Stuff';
    }

    return $title;
}

add_filter( 'get_the_archive_title', 'archive_product_title');

