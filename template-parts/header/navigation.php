<div class="menubar" id="sticky-menu-box">
  <div class="right_menu">
    <div class="menu-box">
      <div class="headerbar text-right">
          <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger pl-2" id="open_nav"><i class="<?php echo esc_html( get_theme_mod( 'vw_computer_repair_pro_res_open_menu_icon' )); ?>"></i></div>
      </div>
      <div class="main-header">
          <div class="side-navigation text-left">
              <?php 
              wp_nav_menu( array( 
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
              ) ); 
            ?>
          </div>
      </div>
      <amp-sidebar id="sidebar1" layout="nodisplay" side="left">
          <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar pr-3 text-right" id="close_nav"><i class="<?php echo esc_html( get_theme_mod( 'vw_computer_repair_pro_res_close_menus_icon' )); ?>"></i></div>
          <div class="side-navigation text-left">
              <?php 
              wp_nav_menu( array( 
                  'theme_location' => 'primary',
                  'menu_class'     => 'primary-menu',
              ) ); 
            ?>
          </div>
      </amp-sidebar>
    </div>
  </div>
</div>