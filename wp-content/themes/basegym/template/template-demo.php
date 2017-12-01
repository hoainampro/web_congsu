<?php
/**
 * Template Name: Page dad
 *
 * @package flex-theme
 */
	get_header();
?> 
<div class="slider-acc">
    <?php 
     $jladev = new WP_Query(array(
      'post_type'  => 'slider',
      'post_status' => 'publish',
      'order'   => 'rank',
      'posts_per_page'=> 12
      
     ));
     $stt=0;
     ?>
     <div>
      <?php if($jladev->have_posts()) : ?>
      	<div class="owlslider owl-carousel owl-theme">
       <?php while($jladev->have_posts()): $jladev->the_post();  ?>
       <?php if( $stt % 2 == 0) { ?>
       
	        <div class="col-md-12 col-sm-4 col-xs-6 item ">
	        	<?php the_title(); ?>
	        </div>
    	
       <?php } ?> 
       
   	   </div>
       <?php $stt++; ?> 
       <?php wp_reset_postdata(); ?>
      <?php endwhile; ?> 
     <?php endif; ?> 
    </div>
    <!-- slider1 -->
    <div>
     <?php 
     $jladev_1 = new WP_Query(array(
      'post_type'  => 'slider',
      'post_status'=>'publish',
      'order'   => 'rank',
      'posts_per_page'=> 12
     ));
     $stt1=0;
     ?>
     <?php 
      if($jladev_1->have_posts()) : while($jladev_1->have_posts()): $jladev_1->the_post();
     ?>
      <?php if( $stt1 % 2 == 1){ ?>
     <div class="owlslider owl-carousel owl-theme">
        <div class="col-md-12 col-sm-4 col-xs-6 item ">
         
        <?php the_title(); ?>
        </div>
	</div>
    <?php } ?>   
    <?php $stt1++;endwhile;endif;wp_reset_postdata(); ?>
    </div>
   </div>

   <?php get_footer(); ?> 