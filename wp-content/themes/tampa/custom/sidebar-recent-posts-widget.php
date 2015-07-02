<?php 

add_filter('pls_widget_recent_posts_post_inner', 'custom_side_recent_posts_widget_html', 10, 2);

function custom_side_recent_posts_widget_html ($post_item, $post_html) {
	
	//pls_dump($post_html);

	ob_start();
	?>

<div class="post">
	<h5><a href="#"><?php echo $post_html['post_title'] ?></a></h5>
	<p class="recent-info">
		<?php printf( __('Posted by %s at %s', 'tampa'), $post_html['author'], $post_html['data']); ?>
	</p>
	<p><?php echo $post_html['excerpt']; ?></p>
</div><!--post-->

<?php
	return trim(ob_get_clean());

}
