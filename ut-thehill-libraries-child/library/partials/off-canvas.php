<div id="megamenu"<?php if ( has_nav_menu( 'single-menu' ) ) { echo '" class="singlemenu"'; }?>>
  <ul class="mainnav" role="menu">
	    		<!-- Begin Home -->
              <li>
                <a class="home_button" href="https://www.lib.utk.edu/" tabindex="2"  role="button"  >University Libraries - Home <i class="icon-fa-home pull-right"></i></a>
              </li>
              <!-- End Home -->
      <?php /*
  
      Our navigation menu.  If one isn't filled out, wp_nav_menu falls
      back to wp_page_menu.  The menu assigned to the primary position is
      the one used.  If none is assigned, the menu with the lowest ID is
      used. 

      CE: There is a toggle for a single menu or multiple menus. 
      Single menus are single tier and do not allow sublinks. This is typically for sites with a shallow  nav structure. 
      */

      if ( has_nav_menu( 'single-menu' ) ): ?>

         <?php 
           // Is "home button" desired in the theme options
           $settings = get_option( 'ut_options');
              if ( 'true' != $settings['home_button'] ) { ?> 
              <li>
                <a id="drop2" tabindex="4" class="home_button" href="<?php echo esc_url( home_url( '/' ) ); ?>"  role="button"  >Home <i class="icon-fa-home pull-right"></i></a>
              </li>
          <?php }    ?>

                <?php
                  wp_nav_menu( array(
                    'container' => '',
                    'items_wrap'=>'%3$s',
                    'depth'           => 1,
                    'theme_location' => 'single-menu',
                    ) ); 
                ?>
      <?php else:


  
         // If there is a home button.
           $settings = get_option( 'ut_options');
              if ( 'true' != $settings['home_button'] ) { ?> 
              <li>
                <a class="home_button" href="<?php echo esc_url( home_url( '/' ) ); ?>" tabindex="4"  role="button"  >Home <i class="icon-fa-home pull-right"></i></a>
              </li>                                                       
              
          <?php }   

         // If there is a menu-one, then show it.
 // Begin Branch or Unit submenu
        if ( has_nav_menu( 'menu-one' ) ) { ?>
          <li class="top-menu-item">
            <button id="drop2" class="list-item-button" aria-haspopup="true" role="button" tabindex="5"><?php echo gm_get_theme_menu_name('menu-one'); ?> <i class="icon-fa-chevron-right pull-right"></i></button>
            <div class="megamenu-sub" id="menu-one"  aria-labelledby="drop2" aria-expanded="false">
              <button class="menu-back btn"  data-toggle="dropdown"  role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
              <h3><?php echo gm_get_theme_menu_name('menu-one'); ?> </h3>
                <div class="inner">
                  <?php
                    wp_nav_menu( array( 'container_class' => 'menu-header','theme_location' => 'menu-one',  "walker" => new ut_add_aria_to_menu(), ) ); 
                  ?>
                </div>
            </div>
          </li>
        <?php }; 
         endif; 
// End Branch or Unit submenu

      // Giving Bar Options

      $settings = get_option( 'ut_options');
             if ( 'default' == $settings['givingbar_status'] ) { 
              ?>
                <li id="giving">
                  <a href="http://giveto.utk.edu">Give to UT <i class="icon-fa-gift fa-lg pull-right"></i></a>
                </li>
              <?php } 
            else if ( 'custom' == $settings['givingbar_status'] ){
              ?>
                <li id="giving">
                  <a tabindex="15" href="<?php if( $settings['give_uri_text'] != '' ) : echo $settings['give_uri_text'];  endif; ?>">Give to <?php if( $settings['give_place_text'] != '' ) : echo $settings['give_place_text'];  endif; ?><i class="icon-fa-gift pull-right"></i></a>
                </li>
              <?php
              }
        ?>
        
                                          <li id="giving"><!-- LibAnswers Chat Widget 5669 - Hodges Button pop-out - White --><script type="text/javascript" src="//v2.libanswers.com/load_chat.php?hash=bd424d3d3d93b89b7215b2ac519a7d7e"></script><div id="libchat_bd424d3d3d93b89b7215b2ac519a7d7e"></div></li>
        
<!-- Begin Library Navigation -->
<?php include("https://www.lib.utk.edu/template/2016/includes-utlibraries/libnav.php"); ?>
<!-- End Library Navigation -->
        </ul>
      </div>
    </nav>
</div>