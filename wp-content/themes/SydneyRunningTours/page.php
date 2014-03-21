<?php

echo "this is page.php";

?>

<?php get_header(); ?>

<div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title() ;?></h3>	
		<?php the_content(); ?>


	<?php endwhile; else: ?>
		
		<p>There are no posts or pages here</p>

	<?php endif; ?>

</div>
<?php
$posts = get_field('relationship_field_name');
echo $posts;
?>
<section data-type="background" data-speed="4"  class="parallax-bg image imageBox" id="image02">
	<div class="captionBox quote">
        <a href="http://www.tripadvisor.com.au/Attraction_Review-g255060-d1886431-Reviews-UDU_Understand_Down_Under_Sydney_Night_Day_Experiences-Sydney_New_South_Wales-m11900.html" target="_blank">
            <img id="tripadvisor-quote" src="http://localhost/WPSydneyRunningTours/wp-content/uploads/2014/02/tripadvisor.png">
            <h4>&ldquo;<?php the_field('quote'); ?>&rdquo;</h4>
        </a>
    </div>
</section>

<?php get_footer(); ?>