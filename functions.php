<?php
/**
 * vw-computer-repair-pro functions and definitions
 *
 * @package vw-computer-repair-pro
 */

if ( ! function_exists( 'vw_computer_repair_pro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function vw_computer_repair_pro_setup() {
  $GLOBALS['content_width'] = apply_filters( 'vw_computer_repair_pro_content_width', 640 );
  if ( ! isset( $content_width ) ) $content_width = 640;
  load_theme_textdomain( 'vw-computer-repair-pro', get_template_directory() . '/languages' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'woocommerce' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'wc-product-gallery-zoom' ); 
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );

  add_theme_support( 'custom-logo', array(
    'height'      => 240,
    'width'       => 240,
    'flex-height' => true,
  ) );
  add_image_size('vw-computer-repair-pro-homepage-thumb',240,145,true);
  register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'vw-computer-repair-pro' )
  ) );
  add_theme_support( 'custom-background', array(
    'default-color' => 'f1f1f1'
  ) );
  add_editor_style( array( 'assets/css/editor-style.css') );
}
endif;
add_action( 'after_setup_theme', 'vw_computer_repair_pro_setup' );

// To defer JS Files to help page Speed First contentfull paint.
function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 99 );
/* ----------- Amp Style ------------ */
if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
    /**
     * Dequeue JavaScript or Stylesheet.
     */ 
    wp_dequeue_style( 'amp-default' ); 
    //woocommerce block style
    remove_action( 'enqueue_block_assets', 'wp_enqueue_registered_block_scripts_and_styles' );
}
/* Theme enqueue scripts */
function vw_computer_repair_pro_scripts() {
  wp_enqueue_style( 'vw-computer-repair-pro-font', vw_computer_repair_pro_font_url(), array() );
  wp_enqueue_style( 'vw-computer-repair-pro-basic-style', get_stylesheet_uri() );
  wp_style_add_data( 'vw-computer-repair-pro-style', 'rtl', 'replace' );
  /* Inline style sheet */
  require get_parent_theme_file_path( '/inline_style.php' );
  wp_add_inline_style( 'vw-computer-repair-pro-basic-style',$custom_css );
  if(is_rtl()){
    wp_enqueue_style( 'rtl-style', get_template_directory_uri().'/rtl.css',true, null,'all');
    wp_add_inline_style( 'rtl-style',$custom_css );
  }else{
    // ---------- CSS Enqueue -----------
    if(is_front_page() || is_home() || is_page_template( 'page-template/home-page.php' )){
      wp_enqueue_style( 'home-page-style', get_template_directory_uri().'/assets/css/main-css/home-page.css',true, null,'all');
      wp_add_inline_style( 'home-page-style',$custom_css );
    }else{
      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
      wp_add_inline_style( 'other-page-style',$custom_css );
    }
    if('post' == get_post_type() && is_home()){
      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
      wp_add_inline_style( 'other-page-style',$custom_css );
    }
    wp_enqueue_style( 'header-footer-style', get_template_directory_uri().'/assets/css/main-css/header-footer.css',true, null,'all' );
    wp_enqueue_style( 'responsive-style', get_template_directory_uri().'/assets/css/main-css/mobile-main.css',true, null,'screen and (max-width: 1450px) and (min-width: 0px)' );
     
    wp_add_inline_style( 'header-footer-style',$custom_css );
    wp_add_inline_style( 'responsive-media-style',$custom_css );
  }
  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    wp_enqueue_style( 'amp-style', get_template_directory_uri().'/assets/css/main-css/amp-style.css',true, null,'all' );
  }else{
    wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/assets/css/animation.css' );
    wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
  }
  wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.min.css' );
  wp_enqueue_style( 'effect', get_template_directory_uri().'/assets/css/effect.css' );
  wp_enqueue_style( 'google-font',get_template_directory_uri().'/assets/css/google-font.css' );
  // ---------- JS Enqueue -----------
  wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/tether.js', array('jquery'), '',true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),'',true);
  wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array('jquery'),'',true);
  wp_enqueue_script( 'jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.js',array('jquery'),'',true);
  wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js',array('jquery'),'',true);
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);
  wp_enqueue_script( 'vw-computer-repair-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),'', true );
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'),'', true );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'vw_computer_repair_pro_scripts' );

/* Implement the Custom Header feature. */
require get_parent_theme_file_path( '/inc/custom-header.php' );
/* Custom template tags for this theme. */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/* Google Fonts */
require get_parent_theme_file_path( '/inc/google-fonts.php' );
/* Widget Sidebar */
require get_parent_theme_file_path( '/inc/sidebar-widgets.php' );

//social widget file
require get_parent_theme_file_path( '/inc/posttype-templates/posttype-templates.php' );

//social widget file
require get_parent_theme_file_path( '/inc/widget/socail-widget.php' );

//Contact Widget file
require get_parent_theme_file_path( '/inc/widget/contact-widget.php' );
//about us
require get_template_directory() . '/inc/widget/about-us-widget.php';
//Recent Post file
require get_parent_theme_file_path( '/inc/widget/recent-posts.php' );
/* Theme Wizard */
require get_parent_theme_file_path('/theme-wizard/config.php' );
/* Customizer additions. */
require get_parent_theme_file_path( '/inc/customize/customizer.php' );
// 
require get_parent_theme_file_path('/theme-wizard/plugin-activation.php' );


/* URL DEFINES */
define('VW_COMPUTER_REPAIR_PRO_SITE_URL','https://www.vwthemes.com/');
/* Theme Credit link */
function vw_computer_repair_pro_credit_link() {
  echo esc_html_e('Designed & Developed by','vw-computer-repair-pro'). "<a href=".esc_url(VW_COMPUTER_REPAIR_PRO_SITE_URL)." target='_blank'> VW Themes</a>";
}
/*Radio Button sanitization*/
function vw_computer_repair_pro_sanitize_choices( $input, $setting ) {
  global $wp_customize;
  $control = $wp_customize->get_control( $setting->id );
  if ( array_key_exists( $input, $control->choices ) ) {
    return $input;
  } else {
    return $setting->default;
  }
}

 /* Breadcrumb Begin */
function vw_computer_repair_pro_the_breadcrumb() {
  if (!is_home()) {
    echo '<a href="';
      echo esc_url(home_url());
    echo '">';
      bloginfo('name');
    echo "</a> ";
    if (is_category() || is_single()) {
      the_category(', ');
      if (is_single()) {
        echo "<span> ";
          the_title();
        echo "</span> ";
      }
    } elseif (is_page()) {
      the_title();
    }
  }
}

/* Excerpt Limit Begin */
function vw_computer_repair_pro_string_limit_words($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

/* Excerpt Read more overwrite */
function vw_computer_repair_pro_excerpt_more( $link ) {
  if ( is_admin() ) {
    return $link;
  }
  $link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
    esc_url( get_permalink( get_the_ID() ) ),
    /* translators: %s: Name of current post */
    sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vw-computer-repair-pro' ), get_the_title( get_the_ID() ) )
  );
  return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'vw_computer_repair_pro_excerpt_more' );

// mailing Function
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
// do your stuff
$url = get_site_url();
// The message
$message = "A new VW Computer Repair Pro Theme is activated on $url ";
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");
// Send
wp_mail('support@vwthemes.com', 'Theme Activated', $message);
}


define('VW_COMPUTER_REPAIR_PRO_THEME_DOC','https://www.vwthemesdemo.com/docs/vw-computer-repair-pro/');
define('VW_COMPUTER_REPAIR_PRO_SUPPORT','https://www.vwthemes.com/support/vw-theme/');
define('VW_COMPUTER_REPAIR_PRO_FAQ','https://www.vwthemes.com/faqs/');
define('VW_COMPUTER_REPAIR_PRO_CONTACT','https://www.vwthemes.com/contact/');
define('VW_COMPUTER_REPAIR_PRO_REVIEW','https://www.vwthemes.com/topic/reviews-and-testimonials/');
define('VW_COMPUTER_REPAIR_PRO_SHOPIFY','https://www.vwthemes.com/premium-shopify/vw-showcase-shopify-theme/');
define('VW_COMPUTER_REPAIR_PRO_MOODLE','https://vwthemes.com/lms-themes/taleem-responsive-moodle-theme/');
define('VW_COMPUTER_REPAIR_PRO_MOBILE_APP','https://www.vwthemes.com/premium-plugin/vw-woocommerce-mobile-app/');
define('VW_COMPUTER_REPAIR_PRO_VIDEO_LINK','https://www.youtube.com/watch?v=pCeJwmd-5sM&feature=youtu.be');

define('VW_COMPUTER_REPAIR_PRO_BANNER_LINK','https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/');
define('VW_COMPUTER_REPAIR_PRO_SOCIAL_ICON_LINK','https://www.youtube.com/watch?v=US-7TEl-z44');
define('VW_COMPUTER_REPAIR_PRO_SLIDER_LINK','https://www.youtube.com/watch?v=1xGlbWOzQBg&feature=youtu.be');
define('VW_JEWELLERY_PRO_VEDIO_LINK_LINK','https://www.youtube.com/watch?v=jqG2eRjgPa4');
define('VW_COMPUTER_REPAIR_PRO_WOOCOMMERCE_LINK','https://www.youtube.com/watch?v=iL3m0hHaIdU');
define('VW_COMPUTER_REPAIR_PRO_CREATE_POST_LINK','https://www.youtube.com/watch?v=j7veMuhcXYA');
define('VW_COMPUTER_REPAIR_PRO_GALLERY_LINK','https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/');
define('VW_COMPUTER_REPAIR_PRO_CREATE_MENU_LINK','https://www.youtube.com/watch?v=nLB9E6BBBv0');
define('VW_COMPUTER_REPAIR_PRO_FOOTER_WIDGET_LINK','https://www.youtube.com/watch?v=7BvTpLh-RB8');
define('VW_COMPUTER_REPAIR_PRO_CONTACT_FORM_LINK','https://www.youtube.com/watch?v=gjccwcAK47o');
define('VW_COMPUTER_REPAIR_PRO_SHORTCODES_LINK','https://www.youtube.com/watch?v=ovcok3FPRto');

define( 'IBTANA_THEME_LICENCE_ENDPOINT', 'https://vwthemes.com/wp-json/ibtana-licence/v2/' );

// define( 'IBTANA_THEME_LICENCE_ENDPOINT', 'https://vwthemes.net/pro-testing/wp-json/ibtana-licence/v2/' );

/*===================================================================================
* Add Author Links
* =================================================================================*/
function add_to_author_profile( $contactmethods ) {

$contactmethods['tumbler_url'] = 'Tumbler URL';
$contactmethods['pinterest_profile'] = 'Pinterest Profile URL';
$contactmethods['twitter_profile'] = 'Twitter Profile URL';
$contactmethods['facebook_profile'] = 'Facebook Profile URL';

return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');
//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

/**
 * Sync lite options.
 */
function vw_computer_repair_pro_sync_options() {
  $theme_mods_match_id = array(
    'the_computer_repair_top_btn_text' => 'vw_computer_repair_pro_topbar_button_title',
  );
  $matchTheme=array(
    'vw-computer-repair-pro' => 'the-computer-repair'
  );
  $newTheme = wp_get_theme();
  $themename = $newTheme->get_stylesheet();
  global $wpdb;
  if(isset($matchTheme[$themename])){
    $old_theme = $matchTheme[$themename];
    $checkWord = 'theme_mods_'.$old_theme;
    $mqr = "SELECT * FROM wp_options where option_name='$checkWord'";
    $result = $wpdb->get_row($mqr);
    if($result){
      $optionValue = $result->option_value;
      $data_array=unserialize($optionValue);
      foreach ($theme_mods_match_id as $key => $word){
        $data_array[$word] = $data_array[$key];
      }
      $increment=0;
      foreach ($data_array as $d => $old) {
        $match = 'the_computer_repair_slider_page';
        if(strpos($d, $match) !== false){
          $increment++;
          $postId = $old;
          $post = get_post($postId);
          $data_array['vw_computer_repair_pro_slide_small_heading'.$increment] = get_the_title($postId);
          $data_array['vw_computer_repair_pro_slide_heading'.$increment] = get_the_excerpt($postId);
          $data_array['vw_computer_repair_pro_slide_btn_one_url'.$increment] =  get_permalink($postId);
        }
      }
      $data_array['vw_computer_repair_pro_slide_number'] =  $increment;
      $data_array_1=serialize($data_array);
      $newWord = 'theme_mods_'.$themename;
      $update = $wpdb->update('wp_options',['option_value'=>$data_array_1],['option_name'=>$newWord]);
    }
  }
}
add_action( 'after_switch_theme', 'vw_computer_repair_pro_sync_options'  );
function GetOption($option, $debug = false) {
    $customizerOptions = _object(apply_filters("customize_changeset_data", array()));
    if (isset($customizerOptions->{$option})) {
        // var_dump("Customizer $option found as ".$customizerOptions->{$option});
        return $customizerOptions->{$option};
    }
    else {
        return null;
    }
}
/* --------- Verify Mega Menu --------- */
//require get_parent_theme_file_path( '/verify-addons/ibtana-mega-menu-verify.php' );
//-------- Bundle Notice --------- 
add_action( 'admin_notices', 'vw_theme_bundle_admin_notice' );
function vw_theme_bundle_admin_notice() {
       ?>
    <div class="notice bundle-notice is-dismissible">
      <div class="theme_box">
        <h3><?php echo esc_html('Thank You For Purchasing VW Computer Repair Pro Theme','vw-computer-repair-pro'); ?></h3>
        <p><?php echo esc_html('Get our all','vw-computer-repair-pro'); ?>
        <strong><?php echo esc_html('120+ Premium Themes','vw-computer-repair-pro'); ?></strong>
        <?php echo esc_html('worth $7021 With Our','vw-computer-repair-pro'); ?>
        <strong><?php echo esc_html('WP Theme Bundle','vw-computer-repair-pro'); ?></strong>
        <?php echo esc_html('in just $89.','vw-computer-repair-pro'); ?></p>
        
      </div>
      <div class="bubdle_button">
        <a href="https://www.vwthemes.com/premium/all-themes/" class="button button-primary button-hero" target="_blank" rel="noopener"><?php echo esc_html('Get Bundle at $89','vw-computer-repair-pro'); ?></a>
      </div>
    </div>
   <?php 
} 

add_action('switch_theme', 'vw_computer_repair_pro_deactivate');
function vw_computer_repair_pro_deactivate() {
  ThemeWhizzie::remove_the_theme_key();
  ThemeWhizzie::set_the_validation_status('false');
}

define('CUSTOM_TEXT_DOMAIN', 'the-computer-repair');