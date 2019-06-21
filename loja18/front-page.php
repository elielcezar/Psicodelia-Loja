
<?php
/*
Template Name: Homepage Custom
*/

//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>


<?php
echo do_shortcode('[products orderby="rand" order="rand" category="camisetas"]');
?>




<?php get_footer(); ?>
