<?php

$args = array(
				'post_type' => 'poi'
			);

			$the_query = new WP_Query( $args );
?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php get_template_part('content', 'json'); ?>

		<?php endwhile; endif; ?>