<?php
/**
 * The Header template for our theme
 * Template Name: RCD Index

 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage twentythirteen-child
 * @since twentythirteen-child 1.0
 */

            get_header(); ?>
            <div class="container">
                    <?php if ( have_posts() ) : while( have_posts() ) : the_post();
                        the_content();
                        endwhile; endif; ?>
            </div><!-- .container -->
        </div><!-- end of container-fluid -->
        <?php get_footer(); ?>
	</body>
</html>
