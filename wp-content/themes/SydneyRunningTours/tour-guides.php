<?php 
/*
	Template Name: Tour Guides
*/
get_header();
$current_page = get_the_ID();
?>
<div class="wrap content-page guides">
	<h1><?php the_title(); ?></h1>

	<div><?php the_field('page_intro', 11);?></div>

	<?php

				$args = array(
					'post_type' => 'tour_guides',
					'order' => 'ASC'
				);

				$the_query = new WP_Query( $args );

			?>

	<ul>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<?php get_template_part('content', 'tourguides'); ?>

			<?php endwhile; endif; wp_reset_query(); ?>

	</ul>
</div>

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

			<section class="parallax-bg image imageBox" style="background-image: url('<?php echo $bg_img;?>')">

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

<?php get_footer(); ?>