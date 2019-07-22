<div class="middle-post">
	<?php
		$my_postid = 41;
		
		$content_post = get_post($my_postid);
		$title = $content_post->post_title;
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo "<h1>" . $title . "</h1>", "<p>" . $content . "</p>";
	?>
</div>