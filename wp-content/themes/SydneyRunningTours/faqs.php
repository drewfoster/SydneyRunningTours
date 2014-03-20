<?php
/*

	Template Name: FAQs Page

*/
get_header(); ?>

		<?php

			$args = array(
				'post_type' => 'faqs'
			);

			$the_query = new WP_Query( $args );

		?>

	<h1>Frequently Asked Questions</h1>

	<dl>

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php get_template_part('content', 'faqs'); ?>

		<?php endwhile; endif; ?>

	</dl>

<?php get_footer(); ?>