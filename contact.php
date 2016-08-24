<?php /*
Template Name: Contactez nous
*/
get_header(); 
the_post();
get_sidebar();
 ?>

<section id="page">
<div id="page-wrap">
<header>

<h1 id="titl" style="text-align:center;"><?php the_title();?></h1>

</header>
<section>


<?php the_content(); ?>
<p style="text-align: center;"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bcstl/images/bcstl_ptserv.png" width="677" height="373"></p></section>
<?php the_contacts(); ?>
</section>

 </div></div></section>
 <?php get_footer();?>