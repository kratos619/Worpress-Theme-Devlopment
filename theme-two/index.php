<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?> >
	<header>
		<div class="container">
			<h1>
				<a href="<?php echo home_url('/') ?>">
					<?php bloginfo('name'); ?>
				</a>
				<small><?php bloginfo('description')?></small>
			</h1>
			<div class="h_right">
				<form method="GET" action="<?php esc_url(home_url('/')) ?>" >
					<input type="text" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<nav class="nav main-nav">
		<div class="container">
	<?php
        $args = array(
            'theme_location' => 'primary'
        )
    ?>
	<?php wp_nav_menu($args) ?>
		</div>
	</nav>

	<div class="container content">
		<div class="main block">
		<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post()?>
			<article class="post">
				<h2> <?php the_title(); ?></h2>
				<p class="meta">Posted By 
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
					<?php the_author(); ?>
					</a>	
				 	On : <?php the_date(); ?>
					Category: <?php
					 $categories = get_the_category();
					 $seprator = ',';
					 $output = '';
					 if($categories){
						 foreach ($categories as $category) {
							 $output = '<a href="'. get_category_link($category->term_id) .'">'. $category->cat_name .'</a>' . $seprator;
						 }
					 }
					 echo trim($output,$seprator);
					 ?>

				 </p>
				<?php if(has_post_thumbnail()) : ?>
				<div class="post-thumbnail">
					<?php the_post_thumbnail() ?>
				</div>	
				<?php endif; ?>
				<?php the_excerpt(); ?>
				
				<a class="button" href="<?php the_permalink(); ?>">Read More</a>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
		   <?php echo wpautop('sorry no post found') ?>
		<?php endif; ?>
		</div>

		<div class="side">
			<div class="block">
			<h3>Sidebar Head</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus lacus sit amet orci eleifend suscipit. Quisque sit amet congue elit, sit amet dictum nisl</p>
			<a class="button">More</a>
			</div>
		</div>
	</div>

	<footer class="main-footer">
		<div class="container">
			<div class="f_left">
				<p>&copy; 2016 - Advanced WP Theme</p>
			</div>
			<div class="f_right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="#">Services</a></li>
				</ul>
			</div>

		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>