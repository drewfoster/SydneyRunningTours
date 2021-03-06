<?php get_header(); 
$current_page = get_the_ID();?>

<div class="wrap grid_12 blog content-page">
	<div>
		<?php the_field('blog_page_content', 45); ?>
	</div>

	<div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('content', 'post'); ?>

		<?php endwhile; else: ?>
			
			<p>There are no posts or pages here</p>

		<?php endif; ?>

	</div>
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