<?php 

add_filter('pls_widget_agent_inner', 'custom_side_agent_widget_html', 10, 2);

function custom_side_agent_widget_html ($post_item, $post_html) {

	//pls_dump($post_html);
	$agent = PLS_Plugin_API::get_user_details();

	ob_start();
?>

	<section class="agent">
		<?php if (pls_get_option('pls-user-image')) { ?>
			<img src="<?php echo pls_get_option('pls-user-image') ?>" alt="<?php _e('agent photo', 'tampa'); ?>" height=120>
		<?php } else if (isset($agent['user']['headshot']) && $agent['user']['headshot']) { ?>
			<img src="<?php echo $agent['user']['headshot'] ?>" alt="<?php _e('agent photo', 'tampa'); ?>" height=120>
		<?php } ?>

		<?php if (pls_get_option('pls-user-name')) { ?>
			<h4><?php echo pls_get_option('pls-user-name'); ?></h4>
		<?php } else { ?>
			<h4><?php echo $agent['user']['first_name'] . ' ' . $agent['user']['last_name']; ?></h4>
		<?php } ?>

		<?php if (pls_get_option('pls-user-phone')) { ?>
			<span><?php echo pls_get_option('pls-user-phone'); ?></span>
		<?php } else { ?>
			<span><?php echo $agent['user']['phone']; ?></span
		<?php } ?>

		<?php if (pls_get_option('pls-user-email')) { ?>
			<span><a href="mailto:<?php echo pls_get_option('pls-user-email'); ?>"><?php echo pls_get_option('pls-user-email'); ?></a></span>
		<?php } else { ?>
			<span><a href="mailto:<?php echo $agent['user']['email']; ?>"><?php echo $agent['user']['email']; ?></a></span>
		<?php } ?>

		<?php if (pls_get_option('pls-user-description')) { ?>
			<p><?php echo pls_get_option('pls-user-description'); ?></p>
		<?php } ?>

	</section>

<?php

	return trim(ob_get_clean());
}