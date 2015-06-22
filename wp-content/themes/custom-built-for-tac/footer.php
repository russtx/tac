<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Total Accessory Center
 */

?>

	</div><!-- #content -->
        
	<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="socialIcons"><ul class="">
                <li><a href="#"><i class="fa fa-2 fa-facebook"> </i></a></li>
                <li><a href="#"><i class="fa fa-2 fa-skype"> </i></a></li>
                <li><a href="#"><i class="fa fa-2 fa-twitter"> </i></a></li>
                <li><a href="#"><i class="fa fa-2 fa-linkedin"> </i></a></li>
                <li><a href="#"><i class="fa fa-2 fa-google-plus"> </i></a></li>
                <li><a href="#"><i class="fa fa-2 fa-rss"> </i></a></li>
</ul>       </div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://toplinemediateam.com/', 'custom-built-for-tac' ) ); ?>"><?php printf( esc_html__( 'Website built by %s', 'custom-built-for-tac' ), 'Topline Media Team' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'custom-built-for-tac' ), 'custom-built-for-tac', '<a href="http://toplinemediateam.com" rel="designer">Russ Berge</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
