<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * 
 * 
 */

get_header(); ?>
<div id="tacHeader"><img src="<?php bloginfo('template_url'); ?>/images/tac_logo_trans.png" /></div>
        <div class="homepageInfo">
            <ul>
                <li><a href="tel:8044238400"><i class="fa fa-phone"></i>804-423-8400</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i>11201 Midlothian Turnpike<br /> &nbsp; &nbsp; Midlothian, VA 23235</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i>Contact Us</a></li>
            </ul>    
        </div>

        <div class="slidingIcons flex-container">
            <ul>
                <li class="iconBox icon1 flex1"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/05/tools_256px.png'></li>
                <li class="iconBox icon2 flex1"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/05/tools_256px.png'></li>
                <li class="iconBox icon3 flex1"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/05/tools_256px.png'></li>
                <li class="iconBox icon4 flex1"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/05/tools_256px.png'></li>
                <li class="iconBox icon5 flex1"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/05/tools_256px.png'></li>
            </ul>
        </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


