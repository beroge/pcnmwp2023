<?php 
function vw_computer_repair_pro_widgets_init() {

 register_sidebar( array(
   'name'          => __( 'Blog Right Sidebar', 'vw-computer-repair-pro' ),
   'description'   => __( 'Appears on blog page sidebar', 'vw-computer-repair-pro' ),
   'id'            => 'vw-sidebar-1',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'Blog Left Sidebar', 'vw-computer-repair-pro' ),
   'description'   => __( 'Appears on blog page sidebar', 'vw-computer-repair-pro' ),
   'id'            => 'vw-sidebar-left',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'Page Right Sidebar', 'vw-computer-repair-pro' ),
   'description'   => __( 'Appears on page sidebar', 'vw-computer-repair-pro' ),
   'id'            => 'vw-sidebar-2',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'Page Left Sidebar', 'vw-computer-repair-pro' ),
   'description'   => __( 'Appears on page sidebar', 'vw-computer-repair-pro' ),
   'id'            => 'vw-page-left-sidebar',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'Footer 1', 'vw-computer-repair-pro' ),
   'description'   => __( 'Appears on footer', 'vw-computer-repair-pro' ),
   'id'            => 'vw-footer-1',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'Footer 2', 'vw-computer-repair-pro' ),
   'description'   => __( 'Appears on footer', 'vw-computer-repair-pro' ),
   'id'            => 'vw-footer-2',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'Footer 3', 'vw-computer-repair-pro' ),
   'description'   => __( 'Appears on footer', 'vw-computer-repair-pro' ),
   'id'            => 'vw-footer-3',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'Footer 4', 'vw-computer-repair-pro' ),
   'description'   => __( 'Appears on footer', 'vw-computer-repair-pro' ),
   'id'            => 'vw-footer-4',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
}
add_action( 'widgets_init', 'vw_computer_repair_pro_widgets_init' );