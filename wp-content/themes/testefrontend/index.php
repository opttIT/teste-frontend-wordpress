<?php get_header(); ?>
<section>
	<div class="header-image">
	<div class="color-overlay"></div><img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	<div class="siteIdentity"><?php
								if (display_header_text() == true) {
									echo '<h1>' . get_bloginfo('name') . '</h1>';
									echo '<h2>' . get_bloginfo('description') . '</h2>';
								} else {
									//do something
								}
								?>
	</div></div>
</section>
<div class="content-area">
	<main>
		<section class="services">
			<div class="container">
				<div class="row">
					<div class="services-title">
						<h1>best offers</h1>
						<?php $i = 0; ?>
						<div class="services col-md-12">
							<?php
							query_posts('cat=3');
							while (have_posts()) : the_post();
								if ($i == 0) {
									echo '<div class="row">';
								}

								get_template_part('template-parts/content');
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
					<div class="image col-md-6">
						<?php get_template_part('template-parts/content-image'); ?>
						<button type="button" class="btn btn-primary">BOOK NOW</button></div>
					<div class="image col-md-6">
						<?php get_template_part('template-parts/content-middle-image'); ?> </div>
				</div>
		</section>
		<section class="home-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="subscribe">
							<h1>Always updated</h1>
							<div class="input-group">
								<input type="email" class="form-control" placeholder="Enter your email">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="submit">SUBMIT</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php get_footer(); ?>