<?php
$args = array(
	'post_type' => 'image_slides',
	'posts_per_page' => 1,
	'orderby' => 'rand'
	);
 $the_query = new WP_Query( $args );?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<section data-type="background" data-speed="4"  class="parallax-bg image imageBox" style="background-image: url('<?php the_field("background_image");?>')">

		<div class="captionBox wrap quote">
		
		<?php 
		$trip_advisor = get_field('trip_advisor');

		if( $trip_advisor == 'Yes' ) :?>
	        <a href="http://www.tripadvisor.com.au/Attraction_Review-g255060-d1886431-Reviews-UDU_Understand_Down_Under_Sydney_Night_Day_Experiences-Sydney_New_South_Wales-m11900.html" target="_blank">
	            <img id="tripadvisor-quote" src="http://localhost/WPSydneyRunningTours/wp-content/uploads/2014/02/tripadvisor.png">
	            <h4>&ldquo;<?php the_field('quote'); ?>&rdquo;<em> - <?php the_field('name');?></em></h4>
	        </a>
	   
	    <?php else : ?>

	    	<h4>&ldquo;<?php the_field('quote'); ?>&rdquo;<em> - <?php the_field('name');?></em></h4>

	    	<?php endif; ?>

	    </div>
	</section>

<?php endwhile; endif; ?>