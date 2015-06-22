<?php
/***
 * Template Tags
 *
 * This file contains several template functions which are used to print out specific HTML markup
 * in the theme. You can override these template functions within your child theme.
 *
 */
	

// Display Custom Header
if ( ! function_exists( 'airballoon_display_custom_header' ) ):
	
	function airballoon_display_custom_header() {

		// Get Theme Options from Database
		$options = get_option('zeenoble_options'); 
		
		// Don't display header image on template-frontpage.php
		if( is_page_template('template-frontpage.php') )
			return;
			
		// Don't display header image when "display frontpage template automatically on home page" option is activated
		if( is_front_page() and isset($options['themeZee_frontpage_activate']) and $options['themeZee_frontpage_activate'] == 'true' )
			return;
			
		// Check if page is displayed and featured header image is used
		if( is_page() && has_post_thumbnail() ) :
		?>
			<div id="custom-header">
				<?php the_post_thumbnail('frontpage_slider_image'); ?>
			</div>
<?php
		// Check if there is a custom header image
		elseif( get_header_image() ) :
		?>
			<div id="custom-header">
				<img src="<?php echo get_header_image(); ?>" />
			</div>
<?php 
		endif;

	}
	
endif;


// Display Postmeta Data
if ( ! function_exists( 'airballoon_display_postmeta' ) ):
	
	function airballoon_display_postmeta() { ?>
		
		<span class="meta-date">
		<?php printf('<a href="%1$s" title="%2$s" rel="bookmark"><time datetime="%3$s">%4$s</time></a>', 
				esc_url( get_permalink() ),
				esc_attr( get_the_time() ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() )
			);
		?>
		</span>
		<span class="meta-author">
		<?php printf('<a href="%1$s" title="%2$s" rel="author">%3$s</a>', 
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_attr( sprintf( __( 'View all posts by %s', 'airballoon-lite' ), get_the_author() ) ),
				get_the_author()
			);
		?>
		</span>
		
	<?php if ( comments_open() ) : ?>
			<span class="meta-comments">
				<?php comments_popup_link( __('Leave a comment', 'airballoon-lite'),__('One comment','airballoon-lite'),__('% comments','airballoon-lite') ); ?>
			</span>
<?php endif;

		edit_post_link(__( 'Edit Post', 'airballoon-lite' ));
	}
	
endif;


// Display Post Thumbnail on Archive Pages
function airballoon_display_thumbnail_index() {
	
	// Get Theme Options from Database
	$theme_options = airballoon_theme_options();
	
	// Display Post Thumbnail if activated
	if ( isset($theme_options['post_thumbnails_index']) and $theme_options['post_thumbnails_index'] == true ) : ?>

		<a href="<?php esc_url(the_permalink()) ?>" rel="bookmark">
			<?php the_post_thumbnail('featured_image', array('class' => 'alignleft')); ?>
		</a>

<?php
	endif;

}


// Display Post Thumbnail on single posts
function airballoon_display_thumbnail_single() {
	
	// Get Theme Options from Database
	$theme_options = airballoon_theme_options();
	
	// Display Post Thumbnail if activated
	if ( isset($theme_options['post_thumbnails_single']) and $theme_options['post_thumbnails_single'] == true ) :

		the_post_thumbnail('featured_image', array('class' => 'alignleft'));

	endif;

}


// Display Postinfo Data
if ( ! function_exists( 'airballoon_display_postinfo' ) ):
	
	function airballoon_display_postinfo() { ?>
		
		<span class="meta-category">
			<?php printf('%1$s', get_the_category_list(', ')); ?>
		</span>
	
	<?php
		$tag_list = get_the_tag_list('', ', ');
		if ( $tag_list ) : ?>
			<span class="meta-tags">
				<?php echo $tag_list; ?>
			</span>
<?php endif; 	
	
	}
	
endif;

	
// Display Content Pagination
if ( ! function_exists( 'airballoon_display_pagination' ) ):
	
	function airballoon_display_pagination() { 
		
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		 $paginate_links = paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',				
				'current' => max( 1, get_query_var( 'paged' ) ),
				'total' => $wp_query->max_num_pages,
				'next_text' => '&raquo;',
				'prev_text' => '&laquo'
			) );

		// Display the pagination if more than one page is found
		if ( $paginate_links ) : ?>
				
			<div class="post-pagination clearfix">
				<?php echo $paginate_links; ?>
			</div>
		
		<?php
		endif;
		
	}
	
endif;


// Display Social Icons
function airballoon_display_social_icons() {

	// Check if there is a social_icons menu
	if( has_nav_menu( 'social' ) ) :

		// Display Social Icons Menu
		wp_nav_menu( array(
			'theme_location' => 'social',
			'container' => false,
			'menu_id' => 'social-icons-menu',
			'echo' => true,
			'fallback_cb' => '',
			'before' => '',
			'after' => '',
			'link_before' => '<span class="screen-reader-text">',
			'link_after' => '</span>',
			'depth' => 1
			)
		);

	else: // Display Hint how to configure Social Icons ?>

		<p class="social-icons-hint">
			<?php _e('Please go to WP-Admin-> Appearance-> Menus and create a new custom menu with custom links to all your social networks. Then click on "Manage Locations" tab and assign your created menu to the "Social Icons" theme location.', 'airballoon-lite'); ?>
		</p>
<?php
	endif;

}

?>