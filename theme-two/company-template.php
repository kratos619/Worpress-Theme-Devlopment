<?php
/*
    Template Name: Company Layout
*/
?>
<?php get_header(); ?>

	<div class="container content">
		<div class="main block">
		<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post()?>
			<article class="page">
                <h2><?php the_title(); ?></h2>
                <p class="phone">1212121</p>
                <?php the_content(); ?>
            </article>
		<?php endwhile; ?>
		<?php else: ?>
		   <?php echo wpautop('sorry no post found') ?>
		<?php endif; ?>
		</div>
		<div class="side">
			<div class="block">
			<?php if (is_active_sidebar('sidebar')) : ?>
			<?php dynamic_sidebar('sidebar'); ?>
			<?php else: ?>
			<p>No Recient Activitys</p>
			<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>