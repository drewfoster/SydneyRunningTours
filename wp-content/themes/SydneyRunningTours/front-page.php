<?php get_header();?>

<section id="slider" class="flexslider">
    <img class="mobile-slide" src="<?php the_field('mobile_fallback');?>">
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
    <div class="slider-caption">
        <h2><?php the_field('homepage_slider_text'); ?></h2>
        <a href="#" class="blueButton">Book Now</a>
    </div>
</section>

<?php /* About Section */ ?>
<section id="about" class="clearfix">
    <div class="wrap">
		<?php the_field('content_section_1'); ?>
	</div>
</section>

<?php /* Image 1 */ ?>
<section data-type="background" data-speed="8" data-offsetY="50"  class="parallax-bg image imageBox" id="image01">

        <div class="captionBox wrap quote">
            <h4>&ldquo;<?php the_field('quote_1'); ?>&rdquo;</h4>

    </div>
</section>

<?php /* Tours Section */ ?>
<section class="cleafix" id="tours"> 
    <div class="wrap">
    <?php the_field('content_section_2'); ?>
    </div>
</section>

<!-- IMAGE 02 SECTION -->
<section data-type="background" data-offsetY="600" data-speed="4"  class="parallax-bg image imageBox" id="image02">
	<div class="captionBox wrap quote">
        <a href="http://www.tripadvisor.com.au/Attraction_Review-g255060-d1886431-Reviews-UDU_Understand_Down_Under_Sydney_Night_Day_Experiences-Sydney_New_South_Wales-m11900.html" target="_blank">
            <img id="tripadvisor-quote" src="http://localhost/WPSydneyRunningTours/wp-content/uploads/2014/02/tripadvisor.png">
            <h4>&ldquo;<?php the_field('quote_2'); ?>&rdquo;</h4>
        </a>
    </div>
</section>

<!-- BASIC MAP WITH MARKERS SECTION -->
<section id="mapstatic">
    <?php the_field('map_image'); ?>
</section>


<!-- IMAGE 03 SECTION -->
<section class="parallax-bg image imageBox" data-type="background" data-offsetY="850" data-speed="4"   id="image03">
    <div class="captionBox wrap quote">
        <h4><?php the_field('quote_3'); ?></h4>
    </div>
</section>

<!-- GUIDES SECTION -->
<section class="clearfix" id="guides">
    <h3>Our Tour Guides</h3>
    <?php 

        $args = array(
            'post_type' => 'tour_guides'
        );

        $the_query = new WP_Query( $args );
    ?>
<ul class="guideBox wrap">
    
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
        <?php get_template_part('content', 'fpguides'); ?>
    
    <?php endwhile; endif;?>
    <?php wp_reset_query(); ?>
</ul>    
</section>

 <!-- IMAGE 04 SECTION -->
<section data-type="background" data-offsetY="1000" data-speed="4"  class="parallax-bg image imageBox" id="image04">
    <div class="captionBox wrap caption">
        <h4><?php the_field('call_to_action_2'); ?></h4>  
    </div>
</section>

<!-- PRESS SECTION -->
<section id="press">
    <div class="wrap clearfix">
        <h3><?php the_field('press_section'); ?></h3>
        <?php 
            $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
        );

        $the_query = new WP_Query( $args );
        ?>
        <div class="grid_4 alpha">
            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
                <?php get_template_part('content', 'post'); ?>
    
            <?php endwhile; endif;?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="grid_4 mobile-hide"><?php the_field( 'press_content_1' ); ?></div>
        <div class="grid_4 omega"><?php the_field( 'press_section_2' ); ?></div>
    </div>
</section>

<?php get_footer();?>