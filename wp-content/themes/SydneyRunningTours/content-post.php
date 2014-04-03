<div class="post">

	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<ul>
		<li>Posted in: <?php the_category(', '); ?></li>
		<li>Written by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
		<li>On: <?php the_time('F j, Y'); ?></li>
	</ul>

	<div class="post-content">

		<?php if(is_single()): ?>

			<?php the_content(); ?>
			<?php comments_template(); ?>

		<?php else: ?>

			<?php the_excerpt(); ?>
			<p><a href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
			

		<?php endif; ?>
	</div>
</div>