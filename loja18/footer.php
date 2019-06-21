<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>


</div><!-- container -->

</div><!-- principal -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer>

        		<div class="container">
        			        		</div>

            <div class="conteudo-rodape">
            	<div class="container">

            			<div class="col-sm-3 cogumelo"> </div>
            			<div class="col-sm-9 info">
                    <h5>Psicodelia.org</h5>
            				<ul>
                      <li><a href="http://psicodelia.org/">Notícias</a></li>
                      <li><a href="https://psicodelia.org/festivais">Festivais</a></li>
                      <li><a href="https://psicodelia.org/envie-uma-noticia">Escreva no Psicodelia</a></li>
            					<li><a href="http://psicodelia.org/contato">Contato</a></li>
            				</ul>
                    <h5>Siga</h5>
                    <ul class="menu links-sociais">
                      <li class="leaf Facebook"><a href="http://www.facebook.com/Psicodelia.org" title=""><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                      <li class="leaf Twitter"><a href="http://twitter.com/psicodelia" title=""><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                      <li class="leaf Instagram"><a href="http://instagram.com/psicodelia_org" title=""><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                      <li><a class="soundcloud" href="https://soundcloud.com/psicodelia"><i class="fab fa-soundcloud"></i> Soundcloud</a></li>
                      <li class="leaf first RSS"><a href="http://feeds.feedburner.com/psicodelia" title="RSS do Psicodelia"><i class="fas fa-rss"></i> RSS</a></li>
                    </ul>

										<a class="selo-google" href="https://transparencyreport.google.com/safe-browsing/search?url=https:%2F%2Fpsicodelia.org%2Floja%2F" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/selo-google.png" /></a>

            			</div>

            		<div class="row">
            			<div class="col-sm-12 termos">
            				<p>Dúvidas, reclamações ou sugestões: </span><a href="mailto:contato@psicodelia.org">contato@psicodelia.org</a></p>
        					  <p>Desenvolvido por&nbsp;<a href="http://psicodelia.org/agencia" target="_blank">Agência Psicodelia</a>.</p>
            			</div>
            		</div>

        			        	</div>
         </div>

				 	<?php do_action( 'storefront_footer' ); ?>
	</footer>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>

<script>
jQuery(document).ready(function($){

	function hideLoader() {
	 $('#loading').hide();
	}
	$(window).ready(hideLoader);
	setTimeout(hideLoader, 20 * 1000);

	$('.slider').slick({
		dots: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay:true,
	  autoplaySpeed:5000,
	  arrows:true,
		fade: true,
	 	cssEase: 'linear'
	});

	$('.single-product .box-parceled').insertAfter('.cart');

	$('#nav-icon').click(function(){
	   $('body, #nav-icon, .container-menus').toggleClass('open');
	 });

	 $('.storefront-primary-navigation').appendTo('header');

	 $('.storefront-primary-navigation').wrap('<div class="container" />');

	// menu click event
	$('.menuBtn').click(function() {
		$(this).toggleClass('act');
			if($(this).hasClass('act')) {
				$('.mainMenu').addClass('act');
			}
			else {
				$('.mainMenu').removeClass('act');
			}
	});

	var tela = $( window ).width();

	if(tela<=767){
		$('#menu-primary').appendTo('.menu-mobile .mainContainer .menu-loja');
	}

});

</script>

<!-- livezilla.net PLACE SOMEWHERE IN BODY -->
<script type="text/javascript" id="lzdefsc" src="//psicodelia.org/loja/chat/script.php?id=lzdefsc" defer></script>
<!-- livezilla.net PLACE SOMEWHERE IN BODY -->

</body>
</html>
