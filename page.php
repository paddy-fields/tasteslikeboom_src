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

  
  <div id="fullpage">

     <div id="section1" class="section bg-image" style="background-image: url('<?php echo $image1;?>')">
  
      <div class="content-block half-width left-align shade1">
        
        <div class="content-block-inner">

          <h2><?php the_field('section1-title');?></h2>

          <p><?php the_field('section1-text');?></p>

          <div class="bottom-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/boom-bottom-logo.png"/>
          </div>

        </div>

      </div><!--content-block-->
      
    </div><!--/section2-->
  
    <div id="section2" class="section bg-image" style="background-image: url('<?php echo $image2;?>')">
  
      <div class="content-block half-width right-align shade1">
        
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

          <!-- menu sides -->
          <h4><?php the_field('menu-sides-title');?></h4>
          <p><?php the_field('menu-sides-text');?></p>

          <div class="bottom-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/boom-bottom-logo.png"/>
          </div>

        </div>

      </div><!--content-block-->
      
    </div><!--/section2-->

    

    <div id="section2a" class="section bg-image" style="background-image: url('<?php echo $image2;?>')">
  
      
    </div><!--/section2a-->



    <div id="section3" class="section bg-image" style="background-image: url('<?php echo $image3;?>')">
  
      <div class="content-block half-width left-align shade1">
        
        <div class="content-block-inner">

          <h2><?php the_field('section3-title');?></h2>
          
          <p><?php the_field('section3-text');?></p>

          <div class="bottom-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/boom-bottom-logo.png"/>
          </div>
        
        </div>

      </div><!--content-block-->
      
    </div><!--/section3-->

    <div id="section4" class="section bg-image" style="background-image: url('<?php echo $image4;?>')">
  
      <div class="content-block half-width right-align shade1">
        
        <div class="content-block-inner">

          <h2><?php the_field('section4-title');?></h2>
          
          <p><?php the_field('section4-text');?></p>

          <div class="bottom-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/boom-bottom-logo.png"/>
          </div>

        </div>

      </div><!--content-block-->
      
    </div><!--/section4-->

    <!-- map section -->
    <div id="section5" class="section">
  
      <div id="map" class="google-map" class="position: absolute">
      </div>

      <div class="content-block half-width left-align shade1">

         <div class="content-block-inner">

            <h2><?php the_field('section5-title');?></h2>
          
            <p><?php the_field('section5-text');?></p>

            <div class="bottom-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/boom-bottom-logo.png"/>
            </div>

        </div>

      </div><!--content-block-->

  
      
    </div><!--/section5-->

    <div id="section6" class="section bg-image" style="background-image: url('<?php echo $image6;?>')">
  
      <div class="content-block half-width right-align shade1">

         <div class="content-block-inner">

            <h2><?php the_field('section6-title');?></h2>
          
            <p><?php the_field('section6-text');?></p>

            <div class="social-media mt-30">

              <a href="<?php the_field('social-facebook'); ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png">
              </a>
              <a href="<?php the_field('social-twitter'); ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png">
              </a>
              <a href="<?php the_field('social-instagram'); ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png">
              </a>

            </div>

            <div class="bottom-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/boom-bottom-logo.png"/>
            </div>

        </div>

      </div><!--content-block-->
      
    </div><!--/section6-->

  </div><!--/fullpage-->

  <div class="barb holder"></div>

  <nav class="menu">

  
    <ul class="menu--inner">

      <?php 

      $menuOptions = array(
        'container'       => false,
        'items_wrap'      => '%3$s',
        'depth'           => 0,
        'theme_location' => 'primary-menu',
      );

      wp_nav_menu($menuOptions); ?>

      <li class="social-media">
        <a href="<?php the_field('social-facebook'); ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png">
        </a>
        <a href="<?php the_field('social-twitter'); ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png">
        </a>
        <a href="<?php the_field('social-instagram'); ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png">
        </a>
      </li>

    </ul>
   
  </nav>

  <?php get_footer(); ?>