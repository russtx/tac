<?php 
//hook into blueprints search wiget
add_filter('pls_widget_quick_search_context', 'custom_side_search_widget_context');

// set the context so we can modify the search widget without collisions 
function custom_side_search_widget_context () {
	return 'tampa_search_widget';
}


add_filter('pls_listings_search_form_outer_tampa_search_widget', 'custom_side_search_widget_html', 10, 5);

function custom_side_search_widget_html ($form, $form_html, $form_options, $section_title, $form_data) {
	ob_start();
	?>
	<section id="form">
	  <div id="form-container">
	  <form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>listings" id="simple-search">
	    <div class="col-01">
	        <label><?php _e('City', 'tampa'); ?></label>
					<?php echo $form_html['cities']; ?>
	        <label><?php _e('State', 'tampa'); ?></label>
					<?php echo $form_html['states']; ?>
	        <label><?php _e('Bedrooms', 'tampa'); ?></label>
					<?php echo $form_html['bedrooms']; ?>
	    </div><!--COL-01-->
	    <div class="col-02">
	      <div class="input-left">
	        <label><?php _e('Price from', 'tampa'); ?></label>
	       	<?php echo $form_html['min_price']; ?>
	      </div><!--input-left-->
	      <div class="input-right">
	        <label><?php _e('Price to', 'tampa'); ?></label>
					<?php echo $form_html['max_price']; ?>
	      </div><!--input-right-->
	      <label><?php _e('Available on', 'tampa'); ?></label>
				<?php echo $form_html['available_on']; ?>
	      <label><?php _e('Bathrooms', 'tampa'); ?></label>
				<?php echo $form_html['bathrooms']; ?>
	    </div><!--COL-02-->      
	    <input type="submit" name="submit" value="<?php _e('Search Now!', 'tampa'); ?>" id="search">
	    <!-- <p>*Required Fields</p> -->
	    <div class="clr"></div>
	  </form>
	  </div><!--form-container-->
	</section><!--form-->
	<?php
	return trim(ob_get_clean());

}