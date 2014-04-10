
</div> <!-- close main-wrapper div from header.php -->
<div id="back-top">
    <p>
    	<a href="#" class="blueButton-scroll">Book Now</a>
        <a href="#top"><span>&#x25B2; top</span></a>
    </p>
</div>

<footer id="contact">
	<div class="wrap clearfix">
	<?php $footer = 29; ?>
		<div class="col colLeft grid_4 alpha">
			<div class="udu-green">
				<a href="http://udu.com.au/" target="_blank">
					<img src="<?php the_field('left_footer_image', $footer);?>">
				</a>  
			</div>
			
			<?php the_field('contact_information', $footer);?>
			
		</div>
		<div class="col colMid grid_4">
			<?php the_field('middle_footer', $footer);?>
			<?php query_posts('page_id=29');
			if (have_posts()) : ?>
			<div>
				<?php while (have_posts()) : the_post(); ?>
					<?php echo the_content(); endwhile; ?>
				</div>
			<?php endif; ?>
			
		</div>
		<div class="col colRight grid_4 tablet-hide omega">
			<?php the_field('right_footer', $footer);?>
		</div>

	</div>

	<div id="footerEnd">
	<span>&copy; <?php echo date('Y'); ?> Understand Down Under. All rights reserved. Site by <a target="_blank" href="http://drewfost.co.uk"><span aria-hidden="true" data-icon="&#xe600;"></span></a> &amp; <a target="_blank" href="http://danielkam.com">DK</a>.</span>
		<?php
			$args = array(
				'menu' => 'footer-menu',
				'echo' => false
				); ?>
		<ul class="footer-menu">
			<?php echo strip_tags(wp_nav_menu( $args ), '<li><a>'); ?>
		</ul>                
	</div>

</footer>
<?php wp_footer(); wp_reset_query();?>
<?php if(is_front_page() || is_page( 100 )) : ?>
	<script type="text/javascript">
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
<?php endif; ?>
</body>
</html>