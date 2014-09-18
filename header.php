<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="container">


<div id="header">
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<p id="desc"><?php bloginfo('description'); ?></p>

<div id="subinfo">
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/feed.png" alt="RSS FEED" width="28" height="28" /></a>
</div><!-- #subinfo -->

<div id="nav">
<?php
wp_nav_menu(array('theme_location' => 'navigation'));
?>
</div>

<?php if(get_header_image()): ?>
<script>
jQuery(function(){
	jQuery('#slideshow').crossSlide({
		sleep: 2,
		fade: 1
	},[
<?php $headers = get_uploaded_header_images(); ?>
<?php foreach ($headers as $key => $value): ?>
			{ src: '<?php echo $value['url']; ?>' },
<?php endforeach; ?>
		])
});
</script>

<div id="slideshow"></div>
<?php endif; ?>

</div><!-- #header -->
