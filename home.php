<?php get_header(); ?>

<p class="title">RECENT POSTS</p>

<?php if(have_posts()): while(have_posts()): the_post() ?>
	<?php get_template_part('content'); ?>
<?php endwhile; endif; ?>

<?php get_template_part('pagenation'); ?>

<?php get_footer(); ?>
