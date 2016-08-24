<aside id="left">
 <?php get_sidebar('admin');  ?>
<aside id="social"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bcstl/images/bcstl_social.png" width="212" height="65" usemap="#Map">
  <map name="Map">
    <area shape="rect" coords="1,1,68,65" href="https://www.facebook.com/sttcsssbcstl">
    <area shape="rect" coords="74,2,140,65" href="https://twitter.com/STTBCSTL">
    <area shape="rect" coords="149,1,211,64" href="http://sttbcstl.org/feed/">
  </map>
   <div id="search"><?php $search_text = "Rechercher"; ?> 
<form method="get" id="searchform"  
action="<?php bloginfo('url'); ?>/"> 
<input type="text" value="Rechercher"  
name="s" id="s"  
onblur="if (this.value == '')  
{this.value = 'Rechercher';}"  
onfocus="if (this.value == 'Rechercher')  
{this.value = '';}" /> 
<input type="hidden" id="searchsubmit" /> 
</form></div>
</aside>
<nav>
<header id="mlefth"></header>
<section id="mlefts">
<?php wp_nav_menu(array('container_class' => 'menu-left', 'menu_class' => 'menu-left', 'theme_location' => 'menu-left')); ?></section>
<header id="mleftf"></header></nav>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left') ) : endif; ?>
<a href="http://sttbcstl.org/sinscrire"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bcstl/images/bcstl_inscrip.png" alt="S'inscrire" width="144" height="81"></a></aside>