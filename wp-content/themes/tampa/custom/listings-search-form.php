<?php 

add_filter('pls_listings_search_form_outer_listings_search', 'custom_search_form_html', 10, 6);

function custom_search_form_html ($form, $form_html, $form_options, $section_title, $form_data) {

	ob_start();
	?>
<form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>listings" class="pls_search_form_listings">

	<div class="form-l">
		<h6><?php _e('Location', 'tampa'); ?></h6>
		<label><?php _e('City', 'tampa'); ?></label>
		<div class="slt-full">
		<?php echo $form_html['cities']; ?>
		</div>
		<label><?php _e('State', 'tampa'); ?></label>
		<div class="slt-full">
		<?php echo $form_html['states'] ?>  
		</div>
		<label><?php _e('Zip', 'tampa'); ?></label>
		<div class="slt-full">
		<?php echo $form_html['zips'] ?>  
		</div>
	</div><!--form-l-->

	<div class="form-m">
		<h6><?php _e('Listing Type', 'tampa'); ?></h6>
		<label><?php _e('Zoning Type', 'tampa'); ?></label>
		<div class="slt-full">
		<?php echo $form_html['zoning_types'] ?>
		</div>
		<label><?php _e('Transaction Type', 'tampa'); ?></label>
		<div class="slt-full">
		<?php echo $form_html['purchase_types'] ?>
		</div>
		<label><?php _e('Property Type', 'tampa'); ?></label>
		<div class="slt-full">
		<?php echo $form_html['property_type'] ?>
		</div>
	</div><!--form-m-->

	<div class="form-r">
		<div class="form-r-l">
		<h6><?php _e('Details', 'tampa'); ?></h6>
		<label><?php _e('Bed(s)', 'tampa'); ?></label>
		<div class="slt-sma">
		<?php echo $form_html['bedrooms'] ?>  
		</div>   	
		<label><?php _e('Bath(s)', 'tampa'); ?></label>
		<div class="slt-sma">
		<?php echo $form_html['bathrooms'] ?>  
		</div>                  	              
		</div><!--form-r-l-->
		<div class="form-r-r">
		<h6><?php _e('Price Range', 'tampa'); ?></h6>
		<label><?php _e('Price From', 'tampa'); ?></label>
		<div class="slt-half">
		<?php echo $form_html['min_price'] ?> 
		</div>
		<label><php _e('Price To', 'tampa'); ?></label>
		<div class="slt-half">
		<?php echo $form_html['max_price'] ?> 
		</div>
		</div><!--form-r-r-->
		<div class="clr"></div>
		<!--<label>Available On</label>
		<div class="slt-full">
		<?php //echo $form_html['available_on'] ?> 
		</div>-->
	</div><!--form-r-->
	
	<div class="clearfix"></div>                                                       
	
	<input type="submit" name="submit" value="<?php _e('Search Now!', 'tampa'); ?>" id="full-search">          
	
	<div class="clearfix"></div>
</form>

<?php

    $search_form = trim(ob_get_clean());
    return $search_form;

}  