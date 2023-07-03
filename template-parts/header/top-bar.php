<?php
/**
 * Template part for displaying Top Bar Content
 *
 * @package advance_startup_pro
 */ 

$about_section = get_theme_mod( 'vw_computer_repair_pro_topbar_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('vvw_computer_repair_pro_topbar_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vvw_computer_repair_pro_topbar_bgcolor','')).';';
}elseif( get_theme_mod('vw_computer_repair_pro_topbar_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_topbar_bgimage')).'\')';
}else{
  $about_backg='';
}

?>
<section id="site_top" class="top_bar p-0" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-0">

      </div>
      <div class="col-lg-4 col-md-6 topbar-social">
        <?php get_template_part('template-parts/home/social-icons'); ?>

      </div>
      <div class="col-lg-5 col-md-6 cart-box text-lg-right text-md-center text-center">
        <?php if ( class_exists( 'WooCommerce' ) ) { ?>
          <?php if(get_theme_mod('vw_computer_repair_pro_topbar_cart_icon')!=''){ ?>
            <a href="<?php echo wc_get_cart_url(); ?>" class="cart">
              <i class="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_topbar_cart_icon','fas fa-shopping-basket')); ?>"></i>
              <span class="cart-value d-inline-block text-center"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
            </a>
        <?php } } if(get_theme_mod('vw_computer_repair_pro_topbar_button_title')!=''){ ?>
          <a href="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_topbar_button_url')); ?>" class="topbar-button py-3 px-3 d-inline-block text-center">
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_topbar_button_title','BOOK AN APPOINTMENT')); ?>
          </a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>