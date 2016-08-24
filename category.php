<?php
 get_header(); get_sidebar('left');
 ?>

<section id="page">
<h1 id="he"><?php single_cat_title(''); ?></h1>
<div id="cat-wrap">
<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
<article id="crwrap">
<header></header>
<div class="cwrap"><div class="cwraphead">
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien Permanent &agrave; <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1><span class="catdate">Par <? the_author(); ?> <? the_date("l \\l\e j F Y");?></span></div>
<? if(has_post_thumbnail()) {?>
<aside class="tumb"><? the_post_thumbnail(); ?></aside>
<section class="catyestumb">
<?php the_excerpt();?>
</section> <? } else { ?>
<section class="notumb"><? the_excerpt(); ?></section><? } ?></div>
<footer><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien Permanent  <?php the_title_attribute(); ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bcstl/images/bcstl_catsf.png" width="681" height="41" alt="En lire plus"usemap="#Maprm">
    <map name="Maprm">
      <area shape="rect" coords="17,1,49,43" href="#">
      <area shape="rect" coords="56,-2,89,49" href="#">
    </map></a></footer>
</article>
<?php endwhile; else: ?>
          <p><?php _e('Aucun article ou document ne correspond aux termes de recherche spécifiés '); ?></p>
      <?php endif; ?>


</div>

      
</section></div>
 </div>
 <? get_footer();?>