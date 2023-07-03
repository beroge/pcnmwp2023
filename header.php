<?php
/**
 * The Header for our theme.
 *
 * @package vw-computer-repair-pro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="#">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
if(get_theme_mod('vw_computer_repair_pro_slider_enabledisable') == 'Disable'){
  $headerchoose = "position:relative; background:#121212;";
}
else{
  $headerchoose = "";
}
?>
  <header role="banner" id="masthead" class="site-header">
    <?php if ( get_theme_mod('vw_computer_repair_pro_products_spinner_enable',true) == "1" ) { ?>
      <div class="spinner-loading-box">
        <div class="loading-lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      </div>
    <?php } ?>
    <a class="screen-reader-text skip-link" href="#maincontent" ><?php esc_html_e( 'Skip to content', 'vw-computer-repair-pro' ); ?></a>
    <div id="header">
      <div id="header-menu">
        <div class="header-wrap" style="<?php echo esc_attr($headerchoose);?>">
          <?php 
            get_template_part('template-parts/header/top-bar');
          ?>
          <div id="sticky-menu">
            <?php 
              get_template_part('template-parts/header/section-contact-details');
            ?>
          </div>
          <?php 
            get_template_part('template-parts/header/content-header');
          ?>
        </div>
      </div>
    </div>
  </header>