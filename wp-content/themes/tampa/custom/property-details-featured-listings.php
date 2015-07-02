<?php 

add_filter('pls_listing_property_details', 'tampa_custom_details_listing_list', 10, 2);

function tampa_custom_details_listing_list ($listing_html, $listing_data) {
	
	// pls_dump($listing_data);

	ob_start();
    ?>
  	<div class="featured-slot">
	  	<?php if ( isset($listing_data['images']) && is_array($listing_data['images']) ): ?>
      		<?php echo PLS_Image::load($listing_data['images'][0]['url'], array('resize' => array('w' => 90, 'h' => 90, 'method' => 'crop'), 'fancybox' => false, 'as_html' => true)); ?>
				<?php else: ?>
			<?php echo PLS_Image::load('', array('resize' => array('w' => 90, 'h' => 90, 'method' => 'crop'), 'fancybox' => false, 'as_html' => true)); ?>
      	<?php endif ?>
		<h4><?php echo $listing_data['location']['full_address'] ?></h4>
      <p><?php echo substr($listing_data['cur_data']['desc'], 0, 200); ?></p>
      <a href="<?php echo $listing_data['cur_data']['url']; ?>"><?php _e('See Details', 'tampa'); ?></a>
      <div class="clearfix"></div>
    </div><!--featured-slot-->
    
     <?php
     $listing_html = ob_get_clean();

     return $listing_html;

}