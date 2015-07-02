<?php
/**
 * Template Name: Listings Search
 *
 * This is the template for "Listings" search results page.
 *
 * @package PlacesterBlueprint
 * @subpackage Template
 */
?>

<div class="inner">

	<!-- Search Form -->
	<section id="full-search">
		<h3><?php _e('Search Our Listings', 'tampa'); ?></h3>
		<div id="full-form">
		    <?php echo PLS_Partials::get_listings_search_form( 'context=listings_search&ajax=1'); ?>
		</div><!-- /#full-form -->
	</section><!-- /#full-search -->


	<div id="main" role="main">
		<section class="listing">
			<h3><?php _e('New Listings', 'tampa'); ?></h3>
	    <?php echo PLS_Partials::get_listings_list_ajax('crop_description=1&context=custom_listings_search'); ?>
		</section><!-- /.listing -->
			    <?php PLS_Listing_Helper::get_compliance(array('context' => 'search', 'agent_name' => false, 'office_name' => false)); ?>
	</div><!-- /#main -->

