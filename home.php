<?php /**
 * The Header template for our theme
 * Template Name: RCD Blog Index
 *
 * @package WordPress
 * @subpackage twentythirteen-child
 * @since twentythirteen-child 1.0
 */ ?>
<!-- Header -->
<?php get_header(); ?>
<!-- End Header -->

<div class="container">
    <div class="row row-no-padding">
        <div class="col-xs-12 col-sm-9">
            <div class="blog-content" style="padding-top: 20px;">
                <div class="padded-content">
            <!-- main content area -->
            <div id="mainhome">
            <a name="maincontent" id="maincontent"></a>
            <div class="row">
                <div class="col-sm-12">
                    <img src="/wp-content/uploads/2015/08/banner_whitebg.jpg" class="img-full-width" alt="Rebecca Cordingley Designs banner" title="Photo by Simon Cordingley">
                </div><!-- col-sm-12 -->
            </div><!-- row -->
    <!-- WordPress Loop -->
    <h2 class="page-title">LATEST POSTS</h2>
    <div class="blogpostwrapper">
    <?php $counter = 0;
    if (have_posts()) :
        while (have_posts()) : the_post();
        switch($counter) {
            case 0:
            case 5:
                $post_border = "rgba(51, 77, 92, 1)";
                $post_detail = "rgba(51, 77, 92, 0.6)";
                break;
            case 1:
            case 6:
                $post_border = "rgba(69, 178, 157, 1)";
                $post_detail = "rgba(69, 178, 157, 0.6)";
                break;
            case 2:
            case 7:
                $post_border = "rgba(239, 201, 76, 1)";
                $post_detail = "rgba(239, 201, 76, 0.6)";
                break;
            case 3:
            case 8:
                $post_border = "rgba(226, 122, 63, 1)";
                $post_detail = "rgba(226, 122, 63, 0.6)";
                break;
            case 4:
            case 9:
                $post_border = "rgba(223, 90, 73, 1)";
                $post_detail = "rgba(223, 90, 73, 0.6)";
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
            <div class="col-xs-12 col-sm-6">
                <a href="<?php the_permalink() ?>#more" class="more">
                  <i class="fa fa-comments-o"></i>Comment on this post</a>

            </div>
            <div class="col-xs-12 col-sm-6">
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
    <!-- </div> -->
    </div><!-- padded-content, content  -->
    </div><!-- col-xs-12 col-sm-9 -->
    <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
        <?php dynamic_sidebar('right-sidebar');
        get_sidebar(); ?>
    </div><!-- col-xs-12 col-sm-3 -->
</div><!-- row -->
</div><!-- container -->
<!-- Footer -->
<?php get_header(); ?>

<!-- end footer area -->
