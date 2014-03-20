<?php 
/*
	Template Name: Tour Guides
*/
get_header();
?>

<h1>Tour Guides</h1>
<?php

			$args = array(
				'post_type' => 'tour_guides'
			);

			$the_query = new WP_Query( $args );

		?>

<ul>
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php get_template_part('content', 'tourguides'); ?>

		<?php endwhile; endif; ?>
</ul>


<?php get_footer(); ?>