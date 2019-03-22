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
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="nav-icon">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <p>
    Menu
  </p>
</div>

<div class="container-menus">
     <ul class="main-menu">
      <li class="menu-item ">
        <a href="https://psicodelia.org/">Notícias</a>
        <section class="block block-menu clearfix">
          <ul class="menu nav">
            <li class="first leaf"><a href="https://psicodelia.org/noticias" title=""><i class="far fa-play-circle"></i>Todas</a></li>
            <li class="leaf"><a href="https://psicodelia.org/noticias/cena" title=""><i class="far fa-play-circle"></i>Cena</a></li>
            <li class="leaf"><a href="https://psicodelia.org/noticias/djs" title=""><i class="far fa-play-circle"></i>DJs</a></li>
            <li class="leaf"><a href="https://psicodelia.org/noticias/reducao-de-danos" title=""><i class="far fa-play-circle"></i>Redução de Danos</a></li>
            <li class="leaf"><a href="https://psicodelia.org/noticias/tecnologia" title=""><i class="far fa-play-circle"></i>Tecnologia</a></li>
            <li class="last leaf"><a href="https://psicodelia.org/envie-uma-noticia" title=""><i class="far fa-play-circle"></i>Envie uma Notícia</a></li>
          </ul>
        </section>
      </li>
      <li class="menu-item  active ">
        <a href="/festivais/festivais">Festivais</a>
        <section class="block block-menu clearfix block-menu-festivais">
          <!--ul class="menu nav">
            <li class="first leaf"><a href="https://psicodelia.org/festivais/todos"><i class="far fa-play-circle"></i>Todos os Festivais</a></li>
            <li class="leaf"><a href="https://psicodelia.org/festivais/cadastro-de-festivais"><i class="far fa-play-circle"></i>Envie um Festival</a></li>
            <li class="leaf"><a href="https://psicodelia.org/festivais/user"><i class="far fa-play-circle"></i>Login</a></li>
            <li class="leaf"><a href="https://psicodelia.org/festivais/user/register"><i class="far fa-play-circle"></i>Criar Conta</a></li>
          </ul-->
        <section id="block-system-user-menu" class="block block-system block-menu clearfix">


  <ul class="menu nav"><li class="first leaf"><a href="/festivais/todos"><i class="far fa-play-circle"></i>Todos os Festivais</a></li>
<li class="leaf"><a href="/festivais/cadastro-de-festivais"><i class="far fa-play-circle"></i>Envie um Festival</a></li>
<li class="leaf"><a href="/festivais/user?current=node"><i class="far fa-play-circle"></i>Login</a></li>
<li class="last leaf"><a href="/festivais/user/register"><i class="far fa-play-circle"></i>Criar Conta</a></li>
</ul>
</section></section>
      </li>
      <li class="menu-item ">
        <a href="/festivais/artistas">Artistas</a>
        <span>Conheça o casting de artistas do Psicodelia Bookings</span>
      </li>
      <li class="menu-item">
        <a href="/festivais/agencia">O Psicodelia apoiando o seu evento</a>
        <span>Confira tudo o que podemos fazer para divulgar seu evento!</span>
      </li>
      <li class="leaf menu-item ">
        <a href="/festivais/contato"><i class="fas fa-envelope"></i> Contato</a> /
        <a href="http://www.facebook.com/Psicodelia.org" title=""><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a> /
        <a href="http://twitter.com/psicodelia" title=""><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a> /
        <a href="http://instagram.com/psicodelia_org" title=""><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</a> /
        <a class="soundcloud" href="https://soundcloud.com/psicodelia"><i class="fab fa-soundcloud"></i> Soundcloud</a> /
        <a href="http://feeds.feedburner.com/psicodelia" title="RSS do Psicodelia"><i class="fas fa-rss"></i> RSS</a>
      </li>
    </ul>
</div>

<header>
    <div class="logo"><a href="/loja/"><img src="/festivais/sites/all/themes/festivais18n/img/psicodelia-logo.png"><span>Store</span></a></div>

    <div class="redes-sociais">
         <a class="facebook" href="https://www.facebook.com/Psicodelia.org/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
         <a class="twitter" href="https://twitter.com/psicodelia" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
         <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
         <a class="soundcloud" href="https://soundcloud.com/psicodelia"><i class="fab fa-soundcloud"></i></a>
         <a class="youtube" href="https://www.youtube.com/channel/UC6mVaMzKNokaTAv8WWOzJyw"><i class="fab fa-youtube"></i></a>
     </div>

  </header>

			<?php
			do_action( 'storefront_header' ); ?>

		</div>
	</header><!-- #masthead -->

<div id="principal">


<div class="container">
