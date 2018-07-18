<?php

/*

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package storefront

 */



?>



		</div><!-- .col-full -->

	</div><!-- #content -->



	<?php //do_action( 'storefront_before_footer' ); ?>



	<footer>

	  <div class="col-full">

	    <div class="row">

	       

	           <ul class="menu links-sociais">

	            <li class="leaf facebbok"><a href="http://www.facebook.com/Psicodelia.org" title="" target="_blank"><i class="fa fa-facebook"></i></a></li>

	            <li class="leaf twitter"><a href="http://twitter.com/psicodelia" title="" target="_blank"><i class="fa fa-twitter"></i></a></li>

	            <li class="leaf instagram"><a href="https://www.instagram.com/psicodelia_org/" title="" target="_blank"><i class="fa fa-instagram"></i></a></li>          

	          </ul>



	      <div class="blocks">

	      

	      <div class="block cogumelo">&nbsp;</div>

	        

	      <div class="block">

	        <h5>Loja</h5>

	        <ul class="list-unstyled">

	          <li><a href="index.php?route=product/category&amp;path=61">Camisetas Psicodelia</a></li>

	          <li><a href="#">Camisetas detroitbr</a></li>          

	          <li><a href="http://psicodelia.org/" target="_blank">Notícias</a></li>

	        </ul>         

	      </div>



	      <div class="block">

	        <h5>Minha conta</h5>

	        <ul class="list-unstyled">

	          <li><a href="https://loja.psicodelia.org/index.php?route=account/account">Minha conta</a></li>

	          <li><a href="https://loja.psicodelia.org/index.php?route=account/order">Histórico de pedidos</a></li>

	          <li><a href="https://loja.psicodelia.org/index.php?route=account/wishlist">Lista de desejos</a></li>

	          <li><a href="https://loja.psicodelia.org/index.php?route=account/newsletter">Informativo</a></li>

	        </ul>

	 

	      </div>

	      <!--div class="block">

	      	

	       

	      </div-->

	    </div>

	    </div>    

	   

	    <hr>



	    <div class="extras">

	    <p class="termos">Dúvidas, reclamações ou sugestões: <a href="mailto:contato@psicodelia.org">contato@psicodelia.org</a></p>    

	    <p class="termos">Desenvolvido por&nbsp;<a href="http://agenciam2e.com.br" target="_blank">M2E Comunicação Digital</a> com tecnologia <a href="http://www.opencart.com/" target="_blank">OpenCart</a></p>   

	    </div>

	  </div>

	</footer>



	<?php //do_action( 'storefront_after_footer' ); ?>



</div><!-- #page -->






<?php wp_footer(); ?>


<script type="text/javascript">

jQuery(document).ready(function ($) {

   var image = $('.destaque img').attr('src');

     $('.destaque img').hide();

      $('.destaque').css({               

         'background-image': 'url('+ image +')'

      });    

 });

    

</script>  


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3210499-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-3210499-4');
</script>


</body>

</html>

