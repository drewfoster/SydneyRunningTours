
</div> <?php /* close main-wrapper div from header.php */?>
<footer>
	<div class="footerBox">
	<?php $footer = 29; ?>
		<div class="col colLeft">
			<div class="udu-green">
				<a href="http://udu.com.au/" target="_blank">
					<img src="<?php the_field('left_footer_image', $footer);?>">
				</a>  
			</div>
			
			<?php the_field('contact_information', $footer);?>
			
		</div>
		<div class="col colMid">
			<?php the_field('middle_footer', $footer);?>
			<?php query_posts('page_id=29');
			if (have_posts()) : ?>
			<div>
				<?php while (have_posts()) : the_post(); ?>
					<?php echo the_content(); endwhile; ?>
				</div>
			<?php endif; ?>
			
		</div>
		<div class="col colRight">
			<?php the_field('right_footer', $footer);?>
		</div>

	</div>

	<div id="footerEnd">
	<span>&copy; <?php echo date('Y'); ?> Understand Down Under. All rights reserved.
		<?php
			$args = array(
				'menu' => 'footer-menu',
				'echo' => false
				);
			echo strip_tags(wp_nav_menu( $args ), '<a>');
		?>
	</span>                
	</div>

</footer>
<?php wp_footer() ;?>
<script type="text/javascript">
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>