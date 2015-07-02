<?php 
add_filter('pls_listing_get_listings_widget', 'custom_tampa_widget_html_filter', 11, 2);

function custom_tampa_widget_html_filter ($listing_html, $listing_data) {
	
// pls_dump($listing_data);

	ob_start();
    ?>

	<div class="featured-slot">
			<?php if ( isset($listing_data['images']) && is_array($listing_data['images']) ): ?>
				<?php echo PLS_Image::load($listing_data['images'][0]['url'], array('resize' => array('w' => 120, 'h' => 90, 'method' => 'crop'), 'fancybox' => true, 'as_html' => false)); ?>
			<?php else: ?>
				<?php echo PLS_Image::load('', array('resize' => array('w' => 120, 'h' => 90, 'method' => 'crop'), 'fancybox' => false, 'as_html' => true)); ?>    	
			<?php endif ?>
			<h4>
				<a href="<?php echo $listing_data['cur_data']['url']; ?>"><?php echo $listing_data['location']['full_address'] ?></a>
			</h4>
			<p class="rent-label">
				<span>
					<?php echo PLS_Format::number($listing_data['cur_data']['price'], array('abbreviate' => false, 'add_currency_sign' => true)); ?>
					<?php if ($listing_data['cur_data']['lse_trms'] != null) { 
							echo '<em>' . $listing_data['cur_data']['lse_trms'] . '</em>'; 
							} ?>
				</span>
					<?php echo ucwords($listing_data['purchase_types'][0]); ?>
			</p>
			<?php if (isset($listing_data['rets']['mls_id'])) { ?>
    		<p class="mls"><?php _e('MLS #', 'tampa'); ?>: <?php echo $listing_data['rets']['mls_id'] ?></p>
    	<?php } ?>
    <?php
    PLS_Listing_Helper::get_compliance(array(
											'context' => 'listings_widget',
											'agent_name' => $listing_data['rets']['aname'],
											'office_name' => $listing_data['rets']['oname'],
											'office_phone' => PLS_Format::phone($listing_data['contact']['phone']),
											'agent_license' => ( isset( $listing_data['rets']['alicense'] ) ? $listing_data['rets']['alicense'] : false ),
											'co_agent_name' => ( isset( $listing_data['rets']['aconame'] ) ? $listing_data['rets']['aconame'] : false ),
											'co_office_name' => ( isset( $listing_data['rets']['oconame'] ) ? $listing_data['rets']['oconame'] : false )
											)
										);
    ?>
  		
		<div class="clearfix"></div>
	</div><!--featured-slot-->
    
     <?php
     $listing_html = ob_get_clean();

     return $listing_html;
     
}