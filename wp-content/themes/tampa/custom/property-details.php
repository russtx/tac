<?php 

add_filter('property_details_filter', 'custom_property_details_page', 10, 2);

function custom_property_details_page ($html, $listing) {

	ob_start();
	// pls_dump($listing);
	?>
<div id="main">
	
	<section class="property-banner">
		<?php if ($listing['images']): ?>
      <?php echo PLS_Image::load($listing['images'][0]['url'], array('resize' => array('w' => 625, 'h' => 292, 'method' => 'crop'), 'fancybox' => false, 'as_html' => true, 'html' => array('img_classes' => 'main-banner'))); ?>  
    <?php else: ?>
      <?php echo PLS_Image::load(null, array('resize' => array('w' => 625, 'h' => 292, 'method' => 'crop'), 'fancybox' => false, 'as_html' => true, 'html' => array('img_classes' => 'main-banner'))); ?>
    <?php endif ?>
  	<p class="state"><?php echo $listing['location']['full_address'] ?> <span class="rent"><?php echo PLS_Format::number($listing['cur_data']['price'], array('abbreviate' => false, 'add-currency-sign' => true)); ?><em></em></span><br><span class="details"><?php echo $listing['cur_data']['beds'] ?> <?php _e('Bedrooms', 'tampa'); ?> | <?php echo $listing['cur_data']['baths'] ?> <?php _e('Bathrooms', 'tampa'); ?></span></p>
  </section>

	<section class="user-generated">
		<h3><?php _e('Details', 'tampa'); ?></h3>
		<ul class="list-half">
			<li><?php _e('Listing Type', 'tampa'); ?> <span><?php echo ucwords($listing['purchase_types'][0]); ?></span></li>
			<li><?php _e('Bedrooms', 'tampa'); ?> <span><?php echo $listing['cur_data']['beds'] ?></span></li>
			<li><?php _e('Property Type', 'tampa'); ?>
				<span><?php echo PLS_Format::translate_property_type($listing); ?></span>
			</li>
			<li><?php _e('Bathrooms', 'tampa'); ?> <span><?php echo $listing['cur_data']['baths'] ?></span></li>
		  <?php if (isset($listing['rets']['mls_id'])) { ?>
		    <li><?php _e('MLS #', 'tampa'); ?>
    		<span><?php echo $listing['rets']['mls_id'] ?></span>
        </li>
    	<?php } ?>
			<li><?php _e('Half Baths', 'tampa'); ?> <span><?php echo $listing['cur_data']['half_baths'] ?></span></li>                                                            
		</ul><!--list-half-->
		<div class="clr"></div>
	</section><!--user-generated-->

	<?php if ($listing['cur_data']['desc']): ?>
		<section class="user-generated">
			<h3><?php _e('Description', 'tampa'); ?></h3>
			<p><?php echo $listing['cur_data']['desc'] ?></p>
		</section>
	<?php endif; ?>

	<?php $amenities = PLS_Format::amenities_but($listing, array('half_baths', 'beds', 'baths', 'url', 'sqft', 'avail_on', 'price', 'desc')); ?>

	<?php if ( isset($amenities['list']) && $amenities['list'] != null ): ?>
		<section class="user-generated">
			<h3><?php _e('Property Amenities', 'tampa'); ?></h3>
			<ul class="list-third">
				<?php $amenities['list'] = PLS_Format::translate_amenities($amenities['list']); ?>
				<?php foreach ($amenities['list'] as $amenity => $value): ?>
					<li><span><?php echo $amenity; ?></span> <?php echo $value ?></li>
				<?php endforeach; ?>
			</ul>
			<div class="clr"></div>
		</section>
	<?php endif; ?>

	<?php if (isset($amenities['ngb']) && $amenities['ngb'] != null ): ?>
		<section class="user-generated">
			<h3><?php _e('Neighborhood Amenities', 'tampa'); ?></h3>
			<ul class="list-third">
				<?php $amenities['ngb'] = PLS_Format::translate_amenities($amenities['ngb']); ?>
				<?php foreach ($amenities['ngb'] as $amenity => $value): ?>
					<li><span><?php echo $amenity; ?></span> <?php echo $value ?></li>
				<?php endforeach; ?>
			</ul>
			<div class="clr"></div>
		</section>
	<?php endif; ?>

	<?php if ( isset($amenities['uncur']) && $amenities['uncur'] != null ): ?>
		<section class="user-generated">
			<h3><?php _e('Property Amenities', 'tampa'); ?></h3>
			<ul class="list-third">
			<?php $amenities['uncur'] = PLS_Format::translate_amenities($amenities['uncur']); ?>
				<?php foreach ($amenities['uncur'] as $amenity => $value): ?>
					<li><span><?php echo $amenity; ?></span> <?php echo $value ?></li>
				<?php endforeach; ?>
			</ul>
			<div class="clr"></div>
		</section>
	<?php endif; ?>


</div><!--main-->
  
<aside>
	<section id="single-property-mini-map">
		<h3><php _e('Location', 'tampa'); ?></h3>
		<?php echo PLS_Map::dynamic($listing, array(
			'lat' => $listing['location']['coords'][0],
			'lng' => $listing['location']['coords'][1],
			'zoom' => '14',
			'width' => 288,
			'height' => 217,
			'canvas_id' => 'map_canvas',
			'class' => 'custom_google_map',
			'map_js_var' => 'pls_google_map',
			'ajax_form_class' => false,
		)); ?>

		<script type="text/javascript">
	      jQuery(document).ready(function( $ ) {
	        var map = new Map();
	        var listing = new Listings({
	          single_listing: <?php echo json_encode($listing) ?>,
	          map: map
	        });
	        map.init({
	          type: 'single_listing', 
	          listings: listing,
	          lat : <?php echo json_encode($listing['location']['coords'][0]) ?>,
	          lng : <?php echo json_encode($listing['location']['coords'][1]) ?>,
	          zoom : 14
	        });
	        listing.init();
	      });
    	</script>

	    <div class="map-bar">
	    	<!-- <a class="fav-org" href="#">Add to Favorites</a> -->
	      	<a class="info-org" href="mailto:<?php echo pls_get_option('pls-user-email'); ?>"><?php _e('Request More Info', 'tampa'); ?></a>
	      	<div class="clr"></div>
	    </div><!--map-bar-->
	</section>

	<?php if ($listing['images']): ?>
		<section id="gallery">
			<h3><?php _e('Photo Gallery', 'tampa'); ?></h3>    
			<?php foreach ($listing['images'] as $image): ?>
					<?php echo PLS_Image::load($image['url'], array('resize' => array('w' => 120, 'h' => 95, 'method' => 'crop'), 'fancybox' => true, 'as_html' => false)); ?> 
			<?php endforeach; ?>
		</section><!--gallery-->
	<?php endif; ?>

</aside>

<div class="clr"></div>

<section id="full">
  	<section class="user-generated">
	    <h3><?php _e('Neighborhood', 'tampa'); ?></h3>      
	    <?php echo PLS_Map::dynamic($listing, array(
			'lat' => $listing['location']['coords'][0],
			'lng' => $listing['location']['coords'][1],
			'zoom' => '14',
			'width' => 930,
			'height' => 260,
			'canvas_id' => 'map_canvas_nbr',
	    	'class' => 'custom_google_map_nbr',
	    	'map_js_var' => 'pls_google_map_nbr',
	    	'ajax_form_class' => false,
		)); ?>
  	</section>

  	<script type="text/javascript">
        jQuery(document).ready(function( $ ) {
          var map_nbr = new Map();
          var listing_nbr = new Listings({
            single_listing: <?php echo json_encode($listing) ?>,
            map: map_nbr
          });
          map_nbr.init({
            type: 'single_listing', 
            dom_id: 'map_canvas_nbr',
            listings: listing_nbr,
            lat: <?php echo json_encode($listing['location']['coords'][0]) ?>,
            lng: <?php echo json_encode($listing['location']['coords'][1]) ?>,
            zoom: 14
          });
          listing_nbr.init();
        });
	</script>
  
	<?php if (isset($listing['cur_data']['mls_number']) && isset($listing['mls_logo']) ): ?>
		<section class="user-generated">
		    <h3><?php _e('Listing Supply Source', 'tampa'); ?></h3>
				<p class="p-supply"><?php _e('MLS #', 'tampa'); ?>: <?php echo $listing['cur_data']['mls_number'] ?></p>
		    <div class="clr"></div>
	  	</section>
	<?php endif; ?>
	
	<?php PLS_Listing_Helper::get_compliance(array(
				'context' => 'listings',
				'agent_name' => $listing['rets']['aname'],
				'office_name' => $listing['rets']['oname'],
				'office_phone' => PLS_Format::phone($listing['contact']['phone']),
				'agent_license' => ( isset( $listing['rets']['alicense'] ) ? $listing['rets']['alicense'] : false ),
				'co_agent_name' => ( isset( $listing['rets']['aconame'] ) ? $listing['rets']['aconame'] : false ),
				'co_office_name' => ( isset( $listing['rets']['oconame'] ) ? $listing['rets']['oconame'] : false )
			)
		);
	?>
</section><!--full-->

<?php

	return ob_get_clean();
}
