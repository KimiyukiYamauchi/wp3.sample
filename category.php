<?php get_header(); ?>

<div id="content">
	<p class="title"><?php single_cat_title(); ?></p>
  
  <?php if(have_posts()): while(have_posts()): the_post() ?>
  	<?php get_template_part('content'); ?>
  <?php endwhile; endif; ?>
  
  <?php get_template_part('pagenation'); ?>
</div><!-- content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
