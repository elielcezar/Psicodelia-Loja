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
            			<div class="col-sm-9">
                    <h5>Psicodelia.org</h5>
            				<ul>
                      <li><a href="http://psicodelia.org/">Notícias</a></li>
                      <li><a href="https://psicodelia.org/festivais">Festivais</a></li>
                      <li><a href="https://psicodelia.org/artistas">Artistas</a></li>
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
            			</div>

            		<div class="row">
            			<div class="col-sm-12 termos">
            				<p>As opiniões e comentários publicados no Psicodelia são de responsabilidade de seus respectivos autores.&nbsp;<span style="line-height: 1.6em;">O conteúdo deste site é livre para ser reproduzido, desde que a fonte seja citada de maneira clara junto de um link para o artigo original. Dúvidas, reclamações ou sugestões: </span><a href="mailto:contato@psicodelia.org">contato@psicodelia.org</a></p>
        					<p>Desenvolvido por&nbsp;<a href="http://elielcezar.com" target="_blank">elielcezar.com</a>.&nbsp;O Psicodelia.org é movido a&nbsp;<a href="http://drupal.org" target="_blank">Drupal</a></p>
            			</div>
            		</div>

        			        	</div>
         </div>
	</footer>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
jQuery(document).ready(function($){

  //$('.single-product .woocommerce-product-details__short-description').appendTo('p.price');
	$('.single-product .box-parceled').insertAfter('.cart');

	$('#nav-icon').click(function(){
	   $('body, #nav-icon, .container-menus').toggleClass('open');
	 });

	 $('.storefront-primary-navigation').appendTo('header');

});

</script>

</body>
</html>
