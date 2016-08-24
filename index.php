<?php get_header();
get_sidebar(); ?>

<section id="page">
<!-- index -->
<h1 id="he">Actualités</h1>
<?php the_mob();?>
<div id="news-wrap">
<?php if (have_posts()) : while (have_posts()) : the_post(); 
$category = get_the_category();  ?>
  <article class="news">
<header>
  <div class="categ"><?php if($category[0]){
echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?></div>
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Lien Permanent &agrave; <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  </header>
  
  <div class="nwrap"><?php if(has_post_thumbnail()) {?>
  <aside class="tumb"><?php the_post_thumbnail(); ?></aside>
  <section><?php the_excerpt();?></section><?php } else { ?>
  <section><?php the_excerpt();?></section><?php } ?></div>
  <footer>
  <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bcstl/images/bcstl_readm.png" alt="En lire plus" width="317" height="40" usemap="#Map<?php the_ID(); ?>">
    <map name="Map<?php the_ID(); ?>">
      <area shape="rect" coords="9,-61,43,110" href="http://www.facebook.com/share.php?u=<?php the_permalink() ?>">
      <area shape="rect" coords="49,0,83,54" href="http://twitter.com/home?status=En de lire <?php the_permalink() ?>">
      <area shape="rect" coords="153,3,318,35" href="<?php the_permalink(); ?>">
    </map></footer>
  </article>
  <?php endwhile; 
  else : echo "<p>Désolé aucun article ne convient</p>";  endif; ?>

</div>

<!-- news wrap-->

</section><div id="catwrapperbox">
<div id="cat2"><ul>
<?php
$tag_cat2 = new WP_Query();
$tag_cat2-> query('tag=cat2&showposts=3');
while($tag_cat2->have_posts()) : $tag_cat2->the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien Permanent &agrave; <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?></ul>

</div>
<div id="cat3"><ul>
<?php
$tag_cat3 = new WP_Query();
$tag_cat3-> query('tag=cat3&showposts=3');
while($tag_cat3->have_posts()) : $tag_cat3->the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien Permanent &agrave; <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?></ul>

</div>
</div></div>
<?php get_footer(); ?>