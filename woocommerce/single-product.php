<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.6.3
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$single_product_col1="";
$single_product_col2="";
if(get_theme_mod('vw_computer_repair_pro_products_single_page_sidebar',true)=='1')
{
	$single_product_col1="col-lg-9 col-md-12";
	$single_product_col2="col-lg-3 col-md-12";
	
}else
{
	$single_product_col1="col-lg-12 col-md-12";
	$single_product_col2="";
}

get_header(); ?>
<main id="maincontent" role="main">
	<div class="container shop" id="single-product-page">
		<div class="row">
			<div class="<?php echo esc_html($single_product_col1); ?>">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'single-product' ); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
			<?php if(get_theme_mod('vw_computer_repair_pro_products_single_page_sidebar',true)=='1'){ ?>
				<div class="<?php echo esc_html($single_product_col2); ?>" id="sidebar">
					
					<?php
						/**
						 * woocommerce_sidebar hook.
						 *
						 * @hooked woocommerce_get_sidebar - 10
						 */
						dynamic_sidebar('vw-sidebar-1'); 
					?>
				</div>
			<?php } ?>
		</div>
		<?php
			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
		?>
	</div>
</main>
<?php get_footer();
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */