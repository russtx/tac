<?php 

add_filter( 'pls_listings_list_ajax_item_html_custom_listings_search', 'custom_listings_search_list', 10, 3 );
function custom_listings_search_list($listing_item_html, $listing, $context_var  ) {

    // return $listing_item_html;

    /** Start output buffering. The buffered html will be returned to the filter. */
    ob_start();
    // pls_dump($listing);
    ?>

<section class="list-unit">

	<section class="lu-left">
		<?php if (!empty($listing['images'])): ?>
			<?php echo PLS_Image::load($listing['images'][0]['url'], array('resize' => array('w' => 149, 'h' => 90, 'method' => 'crop'), 'fancybox' => true, 'as_html' => true)); ?>
		<?php else: ?>
			<?php echo PLS_Image::load('', array('resize' => array('w' => 149, 'h' => 90, 'method' => 'crop'), 'fancybox' => true, 'as_html' => true)); ?>    	
		<?php endif; ?>	

		<?php if (isset($listing['rets']['mls_id'])) { ?>
  		<p class="mls"><span><?php _e('MLS #', 'tampa'); ?>:</span> <?php echo $listing['rets']['mls_id'] ?></p>
  	<?php } ?>

	</section><!--lu-left-->

	<section class="lu-right">
		<div class="lu-address">
			<h4><a href="<?php echo $listing['cur_data']['url']; ?>"><?php echo $listing['location']['address'] ?></a></h4>
			<p class="area"><?php echo $listing['location']['locality'] ?>, <?php echo $listing['location']['region'] ?></p>
		</div><!--lu-address-->

		<div class="lu-price">
			<p class="price"><?php echo PLS_Format::number($listing['cur_data']['price'], array('abbreviate' => false, 'add_currency_sign' => true)); ?></p>
			<p class="month"><?php echo ucwords($listing['purchase_types'][0]); ?></p>
		</div><!--LU PRICE-->

		<div class="lu-main">
			<p><?php echo substr($listing['cur_data']['desc'], 0, 300); ?></p>
			<p class="info"><span><?php echo $listing['cur_data']['beds']; ?></span> <?php _e('Bedrooms', 'tampa'); ?> | <span><?php echo $listing['cur_data']['baths']; ?></span> <?php _e('Bathrooms', 'tampa'); ?> <?php if ($listing['cur_data']['sqft'] != null) { 
				echo '| <span>' . PLS_Format::number($listing['cur_data']['sqft'], array('abbreviate' => false, 'add_currency_sign' => false)) . '</span> ' . __('sqft', 'tampa'); 
			} ?></p>
			<!-- <a class="fav" href="#"><?php _e('Add to Favorites', 'tampa'); ?></a> -->
			<a class="info-bt" href="mailto:<?php echo pls_get_option('pls-user-email'); ?>"><?php _e('Request Information', 'tampa'); ?></a>
			<a class="see-details-link details-bt" href="<?php echo $listing['cur_data']['url']; ?>"><?php _e('See Details', 'tampa'); ?></a>
		</div><!--lu-main-->
		
	</section><!--LU-RIGHT-->
	<?php
	PLS_Listing_Helper::get_compliance(array(
										'context' => 'inline_search',
										'agent_name' => $listing['rets']['aname'],
										'office_name' => $listing['rets']['oname'],
										'office_phone' => PLS_Format::phone($listing['contact']['phone']),
										'agent_license' => ( isset( $listing['rets']['alicense'] ) ? $listing['rets']['alicense'] : false ),
										'co_agent_name' => ( isset( $listing['rets']['aconame'] ) ? $listing['rets']['aconame'] : false ),
										'co_office_name' => ( isset( $listing['rets']['oconame'] ) ? $listing['rets']['oconame'] : false )
										)
									); ?>
	<div class="clearfix"></div>

</section><!--LIST UNIT-->

<?php

    $html = ob_get_clean();

    // current js build throws a fit when newlines are present
    // will need to strip them. 
    // added EMCA tag will solve in the future.
    $html = preg_replace('/[\n\r\t]/', ' ', $html);
    
    return $html;
}

add_filter('pls_listing_list_ajax_data_request', 'custom_listing_ajax_data_filter');
function custom_listing_ajax_data_filter ($listings) {
  
  foreach ($listings as $listing) {

    //format price
    $listing->price = PLS_Format::number($listing->price, array('add_currency_sign' => true, 'abbreviate' => false));
    
    //format images
    if (isset($listing->images) && is_array($listing->images) ) {
      foreach ($listing->images as $index => $image) {
        // pls_dump($image->url);
        // pls_dump(PLS_Image::load($image->url, array('resize' => array('w' => 149, 'h' => 90, 'method' => 'crop') ) ));
        // $listings->images[$index]->url = PLS_Image::load($image->url, array('resize' => array('w' => 149, 'h' => 90, 'method' => 'crop') ) );
      }
    }
  }
  
  return $listings;
}