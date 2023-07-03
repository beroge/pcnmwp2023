<!-- Template to show the content of page editor -->

<?php 
	$vw_page_content="";
	while ( have_posts() ) : the_post(); 
		$vw_page_content= get_the_content();
	endwhile;
	if($vw_page_content != "" || $vw_page_content != null){ ?>
		<section id="content-area">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="container editor_content">
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
		</section>
	<?php } ?>