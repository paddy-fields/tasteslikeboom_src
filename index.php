<?php get_header(); ?>

<?php 

// background images from acf
$image1 = get_field('section1-image'); 
$image2 = get_field('section2-image'); 
$image3 = get_field('section3-image'); 
$image4 = get_field('section4-image'); 
$image5 = get_field('section5-image'); 
$image6 = get_field('section6-image'); 

?>

<div class="barb holder"></div>

    <nav class="menu">

       <?php

      $defaults = array(
        'container' => 'ul',
        'theme_location' => 'primary-menu',
        'menu_class' => 'menu-inner'
      );

      wp_nav_menu($defaults);

    ?>
     
    </nav>
    
    <div id="fullpage">

      <div id="section1" class="section bg-image" style="background-image: url('<?php echo $image1;?>')">
    
        <div class="content-block half-width left-align shade1">
          
         
              <div class="site-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/boom-logo.png"/>
                <img class="boom-sublogo" src="<?php echo get_template_directory_uri(); ?>/img/boom-sublogo.png"/>
              </div>


        </div><!--content-block-->

        <div class="content-block half-width right-align shade2 hide-on-mobile">

          <div class="content-block-inner">

            <img class="boom-logo-small" src="<?php echo get_template_directory_uri(); ?>/img/boom-logo-invert.png"/>
            <p><?php the_field('section1-text');?></p>

          </div>

          <div class="down-arrow bounce">
            <img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.svg"/>
          </div>

        </div><!--content-block-->
        
      </div><!--/section1-->
    
      <div id="section2" class="section bg-image" style="background-image: url('<?php echo $image2;?>')">
    
        <div class="content-block half-width right-align shade2">
          
          <div class="content-block-inner">

            <h2><?php the_field('section2-title');?></h2>

            <!-- menu item 1 -->
            <h3><?php the_field('menu-item1-title');?></h3>
            <p><?php the_field('menu-item1-text');?></p>

            <!-- menu item 2 -->
            <h3><?php the_field('menu-item2-title');?></h3>
            <p><?php the_field('menu-item2-text');?></p>

            <!-- menu item 3 -->
            <h3><?php the_field('menu-item3-title');?></h3>
            <p><?php the_field('menu-item3-text');?></p>
            
            <p><?php the_field('section2-text');?></p>

          </div>

        </div><!--content-block-->
        
      </div><!--/section2-->

      <div id="section3" class="section bg-image" style="background-image: url('<?php echo $image3;?>')">
    
        <div class="content-block half-width left-align shade1">
          
          <div class="content-block-inner">

            <h2><?php the_field('section3-title');?></h2>
            
            <p><?php the_field('section3-text');?></p>
          
          </div>

        </div><!--content-block-->
        
      </div><!--/section3-->

      <div id="section4" class="section bg-image" style="background-image: url('<?php echo $image4;?>')">
    
        <div class="content-block half-width right-align shade2">
          
          <div class="content-block-inner">

            <h2><?php the_field('section4-title');?></h2>
            
            <p><?php the_field('section4-text');?></p>

          </div>

        </div><!--content-block-->
        
      </div><!--/section4-->

      <div id="section5" class="section bg-image" style="background-image: url('<?php echo $image5;?>')">
    
        <div class="content-block half-width left-align shade1">

           <div class="content-block-inner">

              <h2><?php the_field('section5-title');?></h2>
            
              <p><?php the_field('section5-text');?></p>

          </div>

        </div><!--content-block-->
        
      </div><!--/section5-->

      <div id="section6" class="section bg-image" style="background-image: url('<?php echo $image6;?>')">
    
        <div class="content-block half-width right-align shade2">

           <div class="content-block-inner">

              <h2><?php the_field('section6-title');?></h2>
            
              <p><?php the_field('section6-text');?></p>

          </div>

        </div><!--content-block-->
        
      </div><!--/section6-->

    </div><!--/fullpage-->

    <?php get_footer(); ?>