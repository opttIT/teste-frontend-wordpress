<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row"></div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<div class="row">
						<div class="services-title"><h1>best offers</h1>
					<?php $i = 0; ?>
						<div class="services col-md-12">
							<?php 
								while( have_posts() ): the_post();
								if ( $i == 0 ) echo '<div class="row">';
								get_template_part( 'template-parts/content' ); 
								$i++;
								endwhile;
							?>
						</div>						
		
					</div>

				</div>				
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
					<?php get_template_part( 'template-parts/content-image' ); ?>
					<div class="image col-md-6"></div>
					<div class="image col-md-6"></div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>