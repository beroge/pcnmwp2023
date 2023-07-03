<?php
/**
 * Template part for displaying our products
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_our_products_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_product_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_our_products_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_our_products_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_our_products_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_our_products_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $products_loop="";
  if(get_theme_mod('vw_computer_repair_pro_our_products_slider_loop',true)=='1')
  {
    $products_loop="true";
  }else{
    $products_loop="false";
  }
  
?>
<section id="our-products" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row our-product-head pb-4">
      <div class="col-lg-1 col-md-1 col-sm-2">
         <?php if(get_theme_mod('vw_computer_repair_pro_our_products_small_heading')!=''){ ?>
          <p class="small-title">
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_products_small_heading')); ?>
          </p>
        <?php } ?>
      </div>
      <div class="col-lg-11 col-md-11 col-sm-10">
        <?php if(get_theme_mod('vw_computer_repair_pro_our_products_main_heading')!=''){ ?>
          <h3>
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_products_main_heading')); ?>
          </h3>
        <?php } if(get_theme_mod('vw_computer_repair_pro_our_products_text')!=''){ ?>
          <p class="services-text mb-0 pt-3">
            <?php echo (get_theme_mod('vw_computer_repair_pro_our_products_text')); ?>
          </p>
        <?php } ?>
      </div>
    </div>
    <?php if ( class_exists( 'WooCommerce' ) ) { ?>
      <div class="owl-carousel">
        <?php
        $args = array( 
        'post_type' => 'product', 
        'posts_per_page' => get_theme_mod('vw_computer_repair_pro_our_products_number'),
        'order' => 'ASC'
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          <div class="product-content">
            <div class="product-image">
              <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
              <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" alt="Placeholder" />'; ?>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-8 col-8">
                <h4 class="mb-1">
                  <a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>">
                    <?php the_title(); ?>
                  </a>
                </h4>
                <?php echo $product->get_price_html(); ?>
              </div>
              <div class="col-lg-4 col-md-4 col-4 p-cart">
                <span class="cart"><?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                </span>
              </div>
            </div>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    <?php } else{ ?>
      <h3 class="post-type-msg text-center"><?php echo esc_html_e('Install WooCommerce plugin and add your product details to enable this section','vw-computer-repair-pro')?></h3>
    <?php }?>
  </div>
  <span id="products-loop" class="d-none"><?php echo esc_html($products_loop); ?></span>
</section>