<?php
/**
 * Loop Entries Templates
 *
 * Loops over a list entries and displays them. It is include on the archive and blog pages.
 *
 * @package PlacesterBlueprint
 * @subpackage Template
 */
?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div class="post-slot<?php if (is_sticky()) { echo ' sticky'; } ?>">
			<div class="entry-header">
				<h4><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %1$s', 'tampa'), the_title_attribute( 'echo=false' ) ) ?>"><?php the_title(); ?></a></h4>
				<p class="post-info"><?php printf( __('Posted by %s on %s', 'tampa'), get_the_author(), get_the_time('F jS, Y') ); ?></p>
			</div>
			<p><?php the_excerpt(); ?></p>
			<a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read More', 'tampa'); ?></a>
			<p class="post-tags"><?php the_tags(); ?></p>
		</div>

	 <?php endwhile; ?>

	 <nav class="posts">
	     <div class="prev"><?php next_posts_link( '&laquo; ' . __( 'Older Entries', 'tampa') ) ?></div>
	     <div class="next"><?php previous_posts_link( __('Newer Entries', 'tampa') . ' &raquo;' ) ?></div>
	 </nav>
    
<?php else : ?>
    
	<?php get_template_part( 'loop-error' ); ?>
    
<?php endif; ?>
