<div class="post-<?php the_ID(); ?> col-md-4">
<article>
	<?php the_post_thumbnail( array( 275, 275 ) ); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</article>
</div>