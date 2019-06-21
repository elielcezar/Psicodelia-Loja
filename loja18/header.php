<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3210499-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-3210499-1');
</script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity ="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css"/>

<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>

  <div id="loading"></div>


  <div class="menu-mobile">

  	<div class="mainContainer">

  			<nav class="mainMenu">

  				<ul class="principal">
            <li class="menu-item noticias">
              <a href="https://psicodelia.org/noticias">
                <h5>Notícias</h5>
                <span>Acompanhe a cena trance</span>
              </a>
            </li>
             <li class="menu-item festivais">
               <a href="https://psicodelia.org/festivais">
                 <h5>Festivais</h5>
                 <span>Próximos eventos na sua cidade</span>
               </a>
             </li>
             <li class="menu-item loja">
               <a href="https://psicodelia.org/loja">
                 <h5>Loja</h5>
                 <span>Leve o PsyTrance com você</span>
               </a>
             </li>
  				</ul>

          <div class="menu-loja">

          </div>

  			</nav>



  	</div>
  </div>

<header>

    <div class="container">

      <div class="logo">
        <a href="https://psicodelia.org/loja">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/psicodelia-logo.png" />
        </a>
      </div>

      <a href="#" class="menuBtn">
            <span class="lines"></span>
          </a>

      <ul class="main-menu">
        <li class="menu-item noticias">
          <a href="https://psicodelia.org/noticias">
            <h5>Notícias</h5>
            <span>Acompanhe a cena trance</span>
          </a>
        </li>
         <li class="menu-item festivais">
           <a href="https://psicodelia.org/festivais">
             <h5>Festivais</h5>
             <span>Próximos eventos na sua cidade</span>
           </a>
         </li>
         <li class="menu-item loja">
           <a href="https://psicodelia.org/loja">
             <h5>Loja</h5>
             <span>Leve o PsyTrance com você</span>
           </a>
         </li>
       </ul>

        <div class="redes-sociais">
             <a class="facebook" href="https://www.facebook.com/Psicodelia.org/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
             <a class="twitter" href="https://twitter.com/psicodelia" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
             <a class="soundcloud" href="https://soundcloud.com/psicodelia"><i class="fab fa-soundcloud"></i></a>
         </div>


    </div>

</header>

			<?php
			do_action( 'storefront_header' ); ?>

		</div>
	</header><!-- #masthead -->

<div id="principal">

  <?php if( is_front_page() ) { ?>

    <div class="banners-destaque">
        <div class="slider">
            <?php
            /*  $args = array( 'post_type' => 'banner', 'orderby' => 'rand', 'order' => 'ASC');
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
            ?>
              <div>
                <?php the_content(); ?>
              </div>
            <?php endwhile;*/ ?>

            <?php
              echo do_shortcode('[smartslider3 slider=2]');
            ?>
        </div>
    </div>

<?php } ?>


<div class="container">

  <div class="diferenciais"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/diferenciais.jpg" class="img-fluid" /></div>
