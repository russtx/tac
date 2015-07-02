<?php 

add_filter('pls_listing_home', 'tampa_custom_home_listing_list', 10, 2);

function tampa_custom_home_listing_list ($listing_html, $listing_data) {
	
	// pls_dump($listing_data);

	ob_start();
    ?>
		<section class="list-unit">

			<section class="lu-left">
				<?php if ( isset($listing_data['images']) && is_array($listing_data['images']) ): ?>
		      	<?php echo PLS_Image::load($listing_data['images'][0]['url'], array('resize' => array('w' => 144, 'h' => 93, 'method' => 'crop'), 'fancybox' => true)); ?>
					<?php else: ?>
					<?php echo PLS_Image::load('', array('resize' => array('w' => 144, 'h' => 93, 'method' => 'crop'), 'fancybox' => true)); ?>
		     <?php endif ?>

     		<?php if ( isset($listing_data['rets']['mls_id']) && $listing_data['rets']['mls_id'] ) { ?>
       		<p class="mls"><span>MLS #:</span> <?php echo $listing_data['rets']['mls_id']; ?></p>
       		<?php } ?>

			</section>	

			<section class="lu-right">
				<div class="lu-address">
					<h4><a href="<?php echo $listing_data['cur_data']['url']; ?>"><?php echo $listing_data['location']['address'] ?></a></h4>
					<p class="area"><?php echo $listing_data['location']['locality'] ?>, <?php echo $listing_data['location']['region'] ?></p>
				</div><!--lu-address-->

				<div class="lu-price">
					<p class="price"><strong><?php echo PLS_Format::number($listing_data['cur_data']['price'], array('abbreviate' => false, 'add_currency_sign' => true)); ?></strong><?php if ($listing_data['cur_data']['lse_trms'] != null) { echo $listing_data['cur_data']['lse_trms']; } ?></p>
					<p class="rent-label"><?php if (isset($listing_data['purchase_types'][0])) { echo ucwords($listing_data['purchase_types'][0]); } ?></p>
				</div><!--lu-price-->

				<div class="lu-main">
				<?php
					if (isset($listing_data['cur_data']['desc'])) {
						echo '<p>';
						if (strlen($listing_data['cur_data']['desc']) < 200) {
							echo $listing_data['cur_data']['desc'];
						} else {
							$position = strrpos( substr( $listing_data['cur_data']['desc'], 0, 200), ' ' );
							echo substr( $listing_data['cur_data']['desc'], 0, $position ) . '...';
						}
						echo '</p>';
					} ?>
					<p class="info"><span><?php echo $listing_data['cur_data']['beds']; ?></span> Bedrooms | <span><?php echo $listing_data['cur_data']['baths']; ?></span> Bathrooms 
						<?php if ($listing_data['cur_data']['sqft'] != null) { 
							echo '| <span>' . PLS_Format::number($listing_data['cur_data']['sqft'], array('abbreviate' => false, 'add_currency_sign' => false)) . '</span> sqft'; 
						} ?></p>
					<!-- <a class="fav" href="#">Add to Favorites</a> -->					
				<?php $api_whoami = PLS_Plugin_API::get_user_details(); ?>

				<?php if (pls_get_option('pls-user-email')) { ?>
					<a class="info-bt" href="mailto:<?php echo pls_get_option('pls-user-email'); ?>" target="_blank"><?php _e('Request Information', 'tampa'); ?></a>
				<?php } else { ?>
					<a class="info-bt" href="mailto:<?php echo $api_whoami['user']['email']; ?>" target="_blank"><?php _e('Request Information', 'tampa'); ?></a>
				<?php } ?>
					<a class="see-details-link details-bt" href="<?php echo $listing_data['cur_data']['url']; ?>"><?php _e('See Details', 'tampa'); ?></a>
				</div><!--lu-main-->
			</section><!--lu-right-->
    <?php PLS_Listing_Helper::get_compliance(array(
    											'context' => 'inline_search',
												'agent_name' => $listing_data['rets']['aname'],
												'office_name' => $listing_data['rets']['oname'],
												'office_phone' => PLS_Format::phone($listing_data['contact']['phone']),
												'agent_license' => ( isset( $listing_data['rets']['alicense'] ) ? $listing_data['rets']['alicense'] : false ),
												'co_agent_name' => ( isset( $listing_data['rets']['aconame'] ) ? $listing_data['rets']['aconame'] : false ),
												'co_office_name' => ( isset( $listing_data['rets']['oconame'] ) ? $listing_data['rets']['oconame'] : false )
    											)
    										);
    ?>
			<div class="clr"></div>

		</section><!--list-unit-->
     <?php
     $listing_html = ob_get_clean();

     return $listing_html;

}