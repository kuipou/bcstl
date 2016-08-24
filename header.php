<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <meta name="theme-color" content="#191921">
  <?php wp_head(); ?>
</head>


<body>
<div id="wrapperxl">
<header id="top">
  <aside id="logo"><a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bcstl/images/bcstl_logo.png" width="645" height="71"></a></aside>
  <aside id="conv">
    <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bcstl/images/bcstl_conv.png" alt="Conventions" width="240" height="130" usemap="#Map2">
    <map name="Map2">
      <area shape="rect" coords="0,1,241,61" href="http://docs.google.com/viewer?url=http://sttbcstl.org/wp-content/uploads/2012/07/Statuts-mis-%C3%A0-jour-le-1er-f%C3%A9vrier-2011-C1...pdf" alt="Status et Reglement">
      <area shape="rect" coords="0,70,240,130" href="<?php bloginfo('wpurl'); ?>/conventions-collectives" alt="Convention Collectives">
    </map>
  </aside>
  </header>
<nav id="navtop">
  <?php wp_nav_menu(array('container_class' => '', 'menu_class' => 'menu-top', 'theme_location' => 'menu-top')); ?>
</nav>