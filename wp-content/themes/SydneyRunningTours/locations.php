<?php
/* 
	Template Name: Locations
*/

?>
<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title() ;?></h3>	
		<?php the_content(); ?>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages here</p>

	<?php endif; ?>

<?php

	$args = array(
		'post_type' => 'places_to_see'
	);

	$the_query = new WP_Query( $args );

	?>
	<script type="text/javascript">
		var PoI = [<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?><?php get_template_part('content', 'json'); ?><?php endwhile; endif; ?>];
	</script>

<?php

	$args = array( 'post_type' => 'meeting_locations');

	$the_query = new WP_Query( $args );

	?>
	<script type="text/javascript">
		var runRoutes = [<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?><?php get_template_part('content', 'json'); ?><?php endwhile; endif; ?>];
	</script>

<?php get_footer() ?>