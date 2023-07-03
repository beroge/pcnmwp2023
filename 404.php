<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package vw-computer-repair-pro
 */
get_header(); ?>
<div class="title-box">
	<div class="container">
		<h1><?php the_title();?></h1>	
		<?php if ( get_theme_mod('vw_computer_repair_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
            <div class="bradcrumbs py-3">
                <?php vw_computer_repair_pro_the_breadcrumb(); ?>
            </div>
        <?php } ?>	
	</div>
</div>
<div class="content_page">
	<main id="maincontent" role="main">
		<div class="container">
			<div class="page-content">
					<h3><span class="heading3"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_404_page_title'));?></span></h3>
					<p class="text-404"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_404_page_content'));?></p>  
					<div class="read-moresec">
						<div><a href="<?php echo esc_url( home_url() ); ?>" class="btn btn-primary">
						<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_404_page_button_text'));?></a></div>
					</div>			
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</main>
</div>
<?php get_footer(); ?>