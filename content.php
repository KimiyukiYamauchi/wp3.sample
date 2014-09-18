<div class="post">
<h2>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h2>
<p class="postcat"><?php the_category(' '); ?></p>

<?php the_post_thumbnail(); ?>

<?php the_content(); ?>

<?php if(function_exists('related_posts')): ?>
<?php related_posts(); ?>
<?php endif; ?>
</div>
