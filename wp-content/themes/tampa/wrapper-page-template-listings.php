		<?php PLS_Route::handle_header(); ?>

		<?php
		// only load bootloader if plugin is active
		if (!pls_has_plugin_error()):
		?>
			<script type="text/javascript">
			  var search_bootloader;
			  jQuery(document).ready(function( $ ) {
			    search_bootloader = new SearchLoader ({
			      map: {
			        dom_id: 'map_canvas',
			        filter_by_bounds: false
			      },
			    	filter: {
			    		context: 'listings_search'
			    	},
			    	list: {
			    		context: 'custom_listings_search'
			      }
			    });
			  });
			</script>
		<?php endif; ?>

		<?php  PLS_Route::handle_dynamic(); ?>

			<!-- Floating Map -->
			<aside>

				<section id="floating-box">
					<section id="map">
						<h3><?php _e('MAP', 'tampa'); ?></h3>
						<?php echo PLS_Map::dynamic(null, array(
						  'zoom' => '10',
						  'width' => 290,
						  'height' => 314, 
						  'canvas_id' => 'map_canvas',
            	'class' => 'custom_google_map',
            	'map_js_var' => 'pls_google_map',
            	'ajax_form_class' => false,
              )); ?>
					</section>
				</section>

			</aside>

			<div class="clr"></div>

		</div> <!-- /#inner -->
 
		<?php PLS_Route::handle_footer(); ?>

	</div><!--TOP container-->
</div><!--TOP BACKGROUND-->
