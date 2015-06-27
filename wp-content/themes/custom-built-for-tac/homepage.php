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
                <li><a href="http://localhost/totalacccenter/?page_id=92"><i class="fa fa-map-marker"></i>11201 Midlothian Turnpike<br /> &nbsp; &nbsp; Midlothian, VA 23235</a></li>
                <li><a href="http://localhost/totalacccenter/?page_id=49"><i class="fa fa-envelope"></i>Contact Us</a></li>
            </ul>    
        </div>

        

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    
          <div class="slidingIcons flex-container">
            <ul>
                <li class="iconBox icon1 flex1"><a href="#"><button class="homeButton"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/06/Interior-Icon_50.png'><h4>Interior</h4></button></a></li>
                <li class="iconBox icon2 flex1"><a href="#"><button class="homeButton"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/06/Exterior_50.png'><h4>Exterior</h4></button></a></li>
                <li class="iconBox icon3 flex1"><a href="#"><button class="homeButton"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/06/12-Volt_50.png'><h4>12 Volt</h4></button></a></li>
                <li class="iconBox icon4 flex1"><a href="#"><button class="homeButton"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/06/TowPackage_50.png'><h4>Tow Package</h4></button></a></li>
                <li class="iconBox icon5 flex1"><a href="#"><button class="homeButton"><img src='http://localhost/totalacccenter/wp-content/uploads/2015/06/SprayLiner_50.png'><h4>Spray Liner</h4></button></a></li>
            </ul>
        </div>

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


