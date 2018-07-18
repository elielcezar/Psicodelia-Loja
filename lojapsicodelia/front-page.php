

<?php

/*

Template Name: Homepage

*/



//the content of page.php and now you can do what you want.

?>





<?php get_header(); ?>



<!-- destaque -->

<!--div class="container">

<div class="destaque">

     



</div>

</div-->






<!-- Page Content -->

    <div class="container">



        <div class="row">

            <!-- Blog Entries Column -->

            <div class="col-sm-12">               

                <ul class="products">

                    <?php

                      $args = array(

                        'post_type' => 'product',

                        'posts_per_page' => 12

                        );

                      $loop = new WP_Query( $args );

                      if ( $loop->have_posts() ) {

                        while ( $loop->have_posts() ) : $loop->the_post();

                          wc_get_template_part( 'content', 'product' );

                        endwhile;

                      } else {

                        echo __( 'No products found' );

                      }

                      wp_reset_postdata();

                    ?>

                  </ul><!--/.products-->

            </div>







        </div>

        <!-- /.row -->



    </div>

    <!-- /.container -->







<?php get_footer(); ?>








