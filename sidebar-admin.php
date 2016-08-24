<?php  
global $current_user;
get_currentuserinfo(); if ( is_user_logged_in() ) {?>
<aside class="admin"><?php echo $current_user->user_firstname; ?><br>
  <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bcstl/images/bcstl_adminic.png" alt="Admin" width="152" height="32" usemap="#Mapadmin">
  <map name="Mapadmin">
    <area shape="rect" coords="4,0,34,43" href="<?php bloginfo('wpurl'); ?>/wp-admin/">
    <area shape="rect" coords="40,4,73,29" href="<?php bloginfo('wpurl'); ?>/wp-admin/post-new.php">
    <area shape="rect" coords="79,0,110,32" href="<?php bloginfo('wpurl'); ?>/wp-admin/post-new.php?post_type=page">
    <area shape="rect" coords="118,1,147,30" href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=logout">
  </map>
</aside>
  <?php } else { ?>
<a href="<?php bloginfo('wpurl'); ?>/wp-login.php"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/bcstl/images/bcstl_connect.png" alt="Se connecter" width="244" height="50"></a>
<?php } ?>