		<?php 
		$email = pls_get_option('pls-user-email');
		$phone = pls_get_option('pls-user-phone');
		$email_str = $phone_str = $contact_str = '';

		$street = pls_get_option('pls-company-street');
		$locality = pls_get_option('pls-company-locality');
		$region = pls_get_option('pls-company-region');
		$postal = pls_get_option('pls-company-postal');
		$street_str = $address_str = '';

		$agent = PLS_Plugin_API::get_user_details();

		$email = strval( $email ? $email : $agent['user']['email'] );
		$phone = strval( $phone ? $phone : $agent['user']['phone'] );

		$street = strval( $street ? $street : $agent['location']['address'] );
		$locality = strval( $locality ? $locality : $agent['location']['locality'] );
		$region = strval( $region ? $region : $agent['location']['region'] );
		$postal = strval( $postal ? $postal : $agent['location']['postal'] );

		if ($email) {
			$email_str = sprintf( __('Email: <a href="mailto:%s">%s</a><br />', 'tampa'), esc_attr($email), esc_html($email) );
		}

		if ($phone) {
			$phone_str = sprintf( __('Phone: <strong>%s</strong>', 'tampa'), esc_html($phone) );
		}

		if ($email_str || $phone_str) {
			$contact_str = sprintf('<p class="contact">%s%s</p>', $email_str, $phone_str);
		}

		if ($street) {
			$street_str = esc_html($street) . '<br />';
		}

		if ($street || $locality || $region || $postal) {
			$address_str = sprintf('<p class="address">%s %s %s %s<br /></p>', $street_str, esc_html($locality), esc_html($region), esc_html($postal) );
		}

		?>

		<footer>
			<nav id="footer-nav">
				<?php wp_nav_menu(array('menu' => 'Main Nav Menu')) ?>
			</nav><!--footer-nav-->

			<section id="footer-logo">
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<h2><?php bloginfo( 'description' ); ?></h2>
			</section><!--logo-->

			<?php echo $contact_str; ?>

			<?php echo $address_str; ?>

			<p id="copyright">&copy;2012 <?php bloginfo( 'name' ); ?> | <a href="https://placester.com/" rel="nofollow"><?php _e('Real Estate Marketing', 'tampa'); ?></a> <?php _e('by', 'tampa'); ?> Placester</p>

			<div class="clr"></div>
		</footer>

  </div><!--container-->

</div><!--TOP BACKGROUND-->

	<?php wp_footer(); ?>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>