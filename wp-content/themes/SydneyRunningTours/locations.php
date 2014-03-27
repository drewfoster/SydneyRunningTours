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

<?php 
		
	$slides = get_field( 'image_quote', $current_page ); 

	if( $slides ) : ?>

	<?php 

		foreach ($slides as $slide):
			$trip_advisor = get_field('trip_advisor', $slide->ID);
			$name = get_field( 'name', $slide->ID );		
			$quote = get_field('quote', $slide->ID);
			$bg_img = get_field('background_image', $slide->ID);			
		?>

			<section data-type="background" data-speed="4"  class="parallax-bg image imageBox" style="background-image: url('<?php echo $bg_img;?>')">

				<div class="captionBox quote">
				
				<?php

				if( $trip_advisor == 'Yes' ) :?>
			        <a href="http://www.tripadvisor.com.au/Attraction_Review-g255060-d1886431-Reviews-UDU_Understand_Down_Under_Sydney_Night_Day_Experiences-Sydney_New_South_Wales-m11900.html" target="_blank">
			            <img id="tripadvisor-quote" src="http://localhost/WPSydneyRunningTours/wp-content/uploads/2014/02/tripadvisor.png">
			            <h4>&ldquo;<?php echo $quote; ?>&rdquo;<em> - <?php echo $name;?></em></h4>
			        </a>
			   
			    <?php else : ?>

			    	<h4>&ldquo;<?php echo $quote; ?>&rdquo;<em> - <?php echo $name;?></em></h4>

			    <?php endif; ?>

			    </div>
			</section>

		<?php endforeach; else :?>

		<?php get_template_part('content', 'slides'); ?>

	<?php endif; ?>
<?php get_footer() ?>