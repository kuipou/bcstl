<?php 
get_header();
the_post(); get_sidebar('left');
$category = get_the_category();

$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$aid = $post->post_author; ?>
<section id="page">
<div id="page-wrap">
<header>
<div class="categp"><?php if($category[0]){
echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?></div>
</header>
<section>

<h1 id="titl"><?php the_title();?></h1>
<h6>Par <?php the_author(); ?>, le <?php the_date("l \\l\e j F Y");?></h6>
<? the_content(); ?>
</section>
<footer>Source: <?php the_source(); ?>
</footer>
 </div>

 </div></div></section><? get_footer();?>