<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty Thirteen Child 1.0
 */
 $query_args = array(
         'tag' => $tag,
         'post_type' => array('post')
     );

     $query = new WP_Query( $query_args );
get_header(); ?>
		<div class="container">
            <div class="row row-no-padding">
                <div class="col-xs-12 col-sm-9">

		<div class="blog-content" style="padding-top: 20px;">
		    <div class="padded-content">
		<!-- main content area -->
		<div id="mainhome">
		<a name="maincontent" id="maincontent"></a>
		<h2 class="page-title"><?php printf( __( 'Tag Archives: %s', 'twentythirteen' ), single_tag_title( '', false ) ); ?></h2>
		<!-- WordPress Loop -->
		<div class="blogpostwrapper">
			<?php $counter = 0;
			if (have_posts()) :
			    while (have_posts()) : the_post();
			    switch($counter) {
			        case 0:
			        case 4:
			        case 8:
			            $post_border = "rgba(153, 138, 47, 1)";
			            $post_detail = "rgba(153, 138, 47, 0.6)";
			            break;
			        case 1:
			        case 5:
			        case 9:
			            $post_border = "rgba(255, 166, 68, 1)";
			            $post_detail = "rgba(255, 166, 68, 0.7)";
			            break;
			        case 2:
			        case 6:
			            $post_border = "rgba(44, 89, 79, 1)";
			            $post_detail = "rgba(44, 89, 79, 0.7)";
			            break;
			        case 3:
			        case 7:
			            $post_border = "rgba(0, 45, 64, 1)";
			            $post_detail = "rgba(0, 45, 64, 0.6)";
			            break;
			    }
			?>
			<div class="blogpost" style="border-top: 7px solid <?php echo $post_border; ?>;">
			<div class="detail" style="background-color: <?php echo $post_detail; ?>;"><p class="post-details"><?php the_date(); ?> | <?php the_author(); ?></p></div>
			<h2 class="blog-post-title" id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<p><span class="bold">Category:</span> <?php the_category(' &gt; ', 'multiple'); ?></p>
			<?php the_content('<div class="more-link-box">Read more</div>'); ?>

			<div class="interact">
			    <div class="row">
			        <div class="col-sm-6">
			            <i class="fa fa-comments-o"></i>Comment on this post
			        </div>
			        <div class="col-sm-6">
			            <?php echo do_shortcode('[ssba]'); ?>
			        </div>
			    </div>
			</div><!-- /interact -->
			<div class="post-tags">
			    <p><?php the_tags('<span class="bold">Tags:</span> ', ' | '); ?></p>
			</div>
			</div>
			<?php
			$counter++;
			?>
			<?php endwhile; ?>
			<?php else : ?>
			<h6 class="center">Not Found</h6>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			<?php endif; ?>
			</div>
			<!-- End WordPress Loop -->
	</div>
	<!-- end main content area -->
	</div>
	<!-- end middle content area -->
	</div>
	</div><!-- padded-content, content  -->
        <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
            <?php dynamic_sidebar('right-sidebar');
            get_sidebar(); ?>
        </div><!-- col-xs-12 col-sm-3 -->
    </div><!-- row -->
	</div><!-- container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
