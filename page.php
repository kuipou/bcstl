<?php
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
</section>

 </div></div></section>
 <?php get_footer();?>