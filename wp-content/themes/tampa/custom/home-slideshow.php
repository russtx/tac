<?php 

// Hook into the slideshow extension
add_filter('pls_slideshow_data_home', 'tampa_custom_slideshow_captions', 10, 1);

function tampa_custom_slideshow_captions ($data) {
	// pls_dump($data);

	if (is_array($data) ) {
	
		unset($data['captions']);

		// each full represents a listing we need to work with.
		// their position in the array matches the other relavent
		// info.
		if(isset($data['listing'])) {
			foreach ($data['listing'] as $index => $listing) {
			
				// pls_dump($listing);
	            /** Get the listing caption. */
	            ob_start();
				?>
			
				<div id="caption-<?php echo $index ?>" class="orbit-html-caption">

					<a href="<?php echo $listing['cur_data']['url'] ?>"><p><?php echo $listing['location']['full_address'] ?></p></a><br />

					<p>
						<span class="price-ico"><?php echo PLS_Format::number($listing['cur_data']['price'], array('abbreviate' => false, 'add_currency_sign' => false)); ?><?php if (isset($listing['cur_data']['lse_trms'])) { echo $listing['cur_data']['lse_trms']; } ?></span>
						<span class="beds-ico"><?php echo $listing['cur_data']['beds']; ?> <?php _e('Beds', 'tampa'); ?></span> 
						<span class="baths-ico"><?php echo $listing['cur_data']['baths']; ?> <?php _e('Baths', 'tampa'); ?></span> 
						<?php if ($listing['cur_data']['sqft'] != null) { ?>
							<span class="area-ico"> <?php PLS_Format::number($listing['cur_data']['sqft'], array( 'abbreviate' => false, 'add_currency_sign' => false)); ?> <?php _e('sqft', 'tampa'); ?></span>
						<?php } ?>
					</p>
					<a class="details-bt" href="<?php echo $listing['cur_data']['url'] ?>"><span><?php _e('See Details', 'tampa'); ?></span></a>
				</div>

				<?php 
	            $data['captions'][] = trim( ob_get_clean() );
			}
		}
	}

	return $data;
	
}
