<?php

/*

 * The header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package storefront

 */



?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<script src="https://use.fontawesome.com/fa0f5ca587.js"></script>



<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<?php

	do_action( 'storefront_before_header' ); ?>



	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<div class="col-full">



			<div class="redes-sociais">

                <a class="facebook" href="https://www.facebook.com/Psicodelia.org/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>

                <a class="twitter" href="https://twitter.com/psicodelia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                <a href="http://feeds.feedburner.com/psicodelia" class="rss" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a>

              

            </div>



			<?php

			/*

			 * Functions hooked into storefront_header action

			 *

			 * @hooked storefront_skip_links                       - 0

			 * @hooked storefront_social_icons                     - 10

			 * @hooked storefront_site_branding                    - 20

			 * @hooked storefront_secondary_navigation             - 30

			 * @hooked storefront_product_search                   - 40

			 * @hooked storefront_primary_navigation_wrapper       - 42

			 * @hooked storefront_primary_navigation               - 50

			 * @hooked storefront_header_cart                      - 60

			 * @hooked storefront_primary_navigation_wrapper_close - 68

			 */

			do_action( 'storefront_header' ); ?>



		<?php if ( is_home() ) { ?>

			 <!--div class="banners"><a href="http://loja.psicodelia.org/categoria/psicodelia/"><img src="http://loja.psicodelia.org/wp-content/themes/lojapsicodelia/img/banner-site.png" /></a></div-->

		<?php } ?>



		</div>

	</header><!-- #masthead -->



	<?php

	/**

	 * Functions hooked in to storefront_before_content

	 *

	 * @hooked storefront_header_widget_region - 10

	 */

	do_action( 'storefront_before_content' ); ?>



	<div id="content" class="site-content" tabindex="-1">

		<div class="col-full">



		<?php

		/**

		 * Functions hooked in to storefront_content_top

		 *

		 * @hooked woocommerce_breadcrumb - 10

		 */

		do_action( 'storefront_content_top' );

