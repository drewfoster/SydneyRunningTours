<?php get_header();?>

<section id="slider" class="flexslider">
    <ul class="slides">
        <li>
            <img src="<?php the_field('homepage_slider_1');?>" alt="Runners with Sydney Backdrop">
        </li>
        <li>
            <img src="<?php the_field('homepage_slider_2');?>" alt="Runners with Sydney Backdrop">
        </li>
        <li>
            <img src="<?php the_field('homepage_slider_3');?>" alt="Runners with Sydney Backdrop">
        </li>
        <li>
            <img src="<?php the_field('homepage_slider_4');?>" alt="Runners with Sydney Backdrop">
        </li>
        <li>
            <img src="<?php the_field('homepage_slider_5');?>" alt="Runners with Sydney Backdrop">
        </li>
        <li>
            <img src="<?php the_field('homepage_slider_6');?>" alt="Runners with Sydney Backdrop">
        </li>
        <li>
            <img src="<?php the_field('homepage_slider_7');?>" alt="Runners with Sydney Backdrop">
        </li>
    </ul>
    <div class="captionBox sliderquote">
        <h2><?php the_field('homepage_slider_text'); ?></h2>
        <a href="#" class="blueButton">Book Now</a>
    </div>
</section>

<?php /* About Section */ ?>
<section data-type="background" data-speed="10" id="about" class="parallax-bg">
    <div class="wrap">
		<?php the_field('content_section_1'); ?>
	</div>
</section>

<?php /* Image 1 */ ?>
<section data-type="background" data-speed="8" data-offsetY="250"  class="parallax-bg image imageBox" id="image01">

        <div class="captionBox quote">
            <h4>&ldquo;<?php the_field('quote_1'); ?>&rdquo;</h4>

    </div>
</section>

<?php /* Tours Section */ ?>
<section class="parallax-bg" data-type="background" data-speed="10" id="tours"> 
    <div class="wrap">
    <?php the_field('content_section_2'); ?>
    </div>
</section>

<!-- IMAGE 02 SECTION -->
<section data-type="background" data-offsetY="600" data-speed="4"  class="parallax-bg image imageBox" id="image02">
	<div class="captionBox quote">
        <a href="http://www.tripadvisor.com.au/Attraction_Review-g255060-d1886431-Reviews-UDU_Understand_Down_Under_Sydney_Night_Day_Experiences-Sydney_New_South_Wales-m11900.html" target="_blank">
            <img id="tripadvisor-quote" src="http://localhost/WPSydneyRunningTours/wp-content/uploads/2014/02/tripadvisor.png">
            <h4>&ldquo;<?php the_field('quote_2'); ?>&rdquo;</h4>
        </a>
    </div>
</section>

<!-- GUIDES SECTION -->
<section class="parallax-bg" data-type="background" data-speed="10" id="guides">
    <h3>Our Tour Guides</h3>
    <?php 

        $args = array(
            'post_type' => 'tour_guides'
        );

        $the_query = new WP_Query( $args );
    ?>
<ul class="guideBox">
    
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
        <?php get_template_part('content', 'fpguides'); ?>
    
    <?php endwhile; endif;?>
    <?php wp_reset_query(); ?>
</ul>    
</section>

<!-- IMAGE 03 SECTION -->
<section class="parallax-bg image imageBox" data-type="background" data-offsetY="850" data-speed="4"   id="image03">
    <div class="captionBox quote">
        <h4><?php the_field('quote_3'); ?></h4>
    </div>
</section>

<!-- FACEBOOK WIDGET SECTION -->
<section class="parallax-bg" data-type="background" data-speed="10" id="facebookFeed">
    <?php the_field('facebook_section');?>
</section>

 <!-- IMAGE 04 SECTION -->
<section data-type="background" data-offsetY="1000" data-speed="4"  class="parallax-bg image imageBox" id="image04">
    <div class="captionBox caption">
        <h4><?php the_field('call_to_action_2'); ?></h4>
        <a href="#" class="blueButton">Book Now</a>  
    </div>
</section>

<!-- PRESS SECTION -->
<section class="parallax-bg" data-type="background" data-speed="10" id="press">
    <div class="wrap">
        <?php the_field('press_section'); ?>
    </div>
</section>

<!-- BASIC MAP WITH MARKERS SECTION -->
<section class="parallax-bg" data-type="background" data-speed="10" id="mapstatic">
    <img src="<?php the_field('map_image'); ?>">
</section>

<?php get_footer();?>