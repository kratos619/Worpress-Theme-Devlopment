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
                     if ($categories) {
                         foreach ($categories as $category) {
                             $output = '<a href="'. get_category_link($category->term_id) .'">'. $category->cat_name .'</a>' . $seprator;
                         }
                     }
                     echo trim($output, $seprator);
                     ?>

				 </p>
				<?php if (has_post_thumbnail()) : ?>
				<div class="post-thumbnail">
					<?php the_post_thumbnail() ?>
				</div>	
				<?php endif; ?>
				<?php the_excerpt(); ?>
				
				<a class="button" href="<?php the_permalink(); ?>">Read More</a>
			</article>