<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
			wp_title( '-', true, 'right' );
			bloginfo( 'name' );
		?> 
	</title>
	<?php 
		wp_head(); 
		//Store uploads directory into variable
		$uploads = wp_upload_dir();
		$upload_dir = $uploads['baseurl'];
	?>
	<link rel="shortcut icon" href="<?php echo $upload_dir; ?>/2014/03/favicon.png" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	
	<?php if(is_front_page() || is_page('Locations')) : ?>
		<script type="text/javascript"
	      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANBOp0nle1Ud7D4DtQFW8KRDhX107gy5Y&sensor=false">
	    </script>
	<?php endif;?>
</head>
<body>
	<?php if( is_front_page() || is_home() ): ?>
			<div id='fb-root'></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = '//connect.facebook.net/en_GB/all.js#xfbml=1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		<?php endif; ?>
	<header>
		<nav>
			<ul class="mobile-menu">
				<li class="logo">
					<a href="<?php bloginfo('url'); ?>">                       
						<img src="<?php echo $upload_dir; ?>/2014/02/srt-logo.png">
					</a>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="menu-icon"><span aria-hidden="true" data-icon="&#xe603;" class="menu-toggle"></span></li>
			</ul>
			<section class="full-menu">
				<?php
					$args = array(
						'menu' => 'main-menu',
						'echo' => false
						);
					echo strip_tags(wp_nav_menu( $args ), '<ul><li><a>');
				?>
				<ul>
					<li id="fb-icon">
                        <a href="#" title="Find us on facebook" class="facebook-icon" target="_blank">
                            <!-- <i class="entypo-social s-facebook"></i> -->
                        </a>
                        <a href="#" title="Tripadvisor" class="tripadvisor-social-icon" target="_blank"></a>
                    </li>
				</ul>
			</section>	
		</nav>
	</header>

<div class="main-wrapper">
