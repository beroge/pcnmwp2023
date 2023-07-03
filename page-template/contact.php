<?php
/**
 * Template Name: Contact
*/

get_header();

get_template_part( 'template-parts/banner' ); ?>

<?php do_action('vw_computer_repair_pro_before_contact_title'); ?>
<main id="maincontent" role="main">
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 contact-head">
					<?php if(get_theme_mod('vw_computer_repair_pro_contactpage_form_title',true) != ''){ ?>
						<h3>
							<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contactpage_form_title')); ?>
						</h3>
					<?php } if(get_theme_mod('vw_computer_repair_pro_contactpage_form_text',true) != ''){ ?>
						<p>
							<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contactpage_form_text')); ?>
						</p>
					<?php } ?>
				</div>
			</div>
			<div class="contact-color-bg row">
				<div class="col-lg-5 col-md-6 contact-page-details">
					<div class="contact-info-box">
						<?php if ( get_theme_mod('vw_computer_repair_pro_address_title') != "" ) { ?>
							<div class="row">
								<div class="col-lg-12 contact-address">
									<div class="row inner-cont">
										<div class="col-lg-3 col-sm-3 contact-icon">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="col-lg-9 col-sm-9 c_content media-small">
											<span><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_address_title')); ?></span>
											<p class="m-0"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_address')); ?></p>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
						<?php if ( get_theme_mod('vw_computer_repair_pro_contactpage_email_title') != "" ) { ?>
							<div class="row">
								<div class="col-lg-12 contact-email">
									<div class="row inner-cont">
										<div class="col-lg-3 col-sm-3 contact-icon">
											<i class="far fa-envelope-open"></i>
										</div>
										<div class="col-lg-9 col-sm-9 c_content media-small">
											<span class="w-100"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contactpage_email_title')); ?></span>
											<p class="m-0"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contactpage_email_one')); ?></p>
											<p class="m-0"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contactpage_email_two')); ?></p>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
						<?php if ( get_theme_mod('vw_computer_repair_pro_contactpage_phone_title') != "" ) { ?>
							<div class="row">
								<div class="col-lg-12 contact-phone">
									<div class="row inner-cont">
										<div class="col-lg-3 col-sm-3 contact-icon">
											<i class="fas fa-phone"></i>
										</div>
										<div class="col-lg-9 col-sm-9 c_content media-small">
							 				<span><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contactpage_phone_title')); ?></span>
							 				<p class="m-0"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contactpage_phone_one')); ?></p>
							 				<p class="m-0"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contactpage_phone_two')); ?></p>
							 			</div>
							 		</div>
					 			</div>
					 		</div>
			 			<?php }?>
			 		</div>
				</div>
				<div class="contac_form col-lg-7 col-md-6">
					<?php while ( have_posts() ) : the_post(); ?>
			        	<?php the_content(); ?>
			    	<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>	
		<?php do_action('vw_computer_repair_pro_before_map'); ?>
			<div class="google-map p-0" id="map">
				<?php if ( get_theme_mod('vw_computer_repair_pro_address_latitude',true) != "" && get_theme_mod('vw_computer_repair_pro_address_longitude',true) != "" ) {?>
				  	<embed width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('vw_computer_repair_pro_address_latitude')); ?>,<?php echo esc_attr(get_theme_mod('vw_computer_repair_pro_address_longitude')); ?>&hl=es;z=14&amp;output=embed"></embed>
				<?php } ?>
			</div>
		<?php do_action('vw_computer_repair_pro_after_map'); ?>
	</div>
</main>
<?php get_footer(); ?>