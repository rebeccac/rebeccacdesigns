<?php /* Template Name: RCD Blog Index */ ?>
<!-- Header -->
<?php include (TEMPLATEPATH . '/header.php'); ?>
<!-- End Header -->

<div class="container">
<?php dynamic_sidebar('right-sidebar'); ?>
<?php get_sidebar(); ?>
<div class="blog-content">
    <div class="padded-content">
<!-- main content area -->
<div id="mainhome">
<a name="maincontent" id="maincontent"></a>
<!-- WordPress Loop -->
<div class="blogpostwrapper">
<?php $counter = 0;
if (have_posts()) :
    while (have_posts()) : the_post();
    switch($counter) {
        case 0:
        case 5:
            $post_border = "rgba(255, 166, 68, 1)";
            $post_detail = "rgba(255, 166, 68, 0.7)";
            break;
        case 1:
        case 6:
            $post_border = "rgba(229, 70, 97, 1)";
            $post_detail = "rgba(229, 70, 97, 0.7)";
            break;
        case 2:
        case 7:
            $post_border = "rgba(153, 138, 47, 1)";
            $post_detail = "rgba(153, 138, 47, 0.6)";
            break;
        case 3:
        case 8:
            $post_border = "rgba(44, 89, 79, 1)";
            $post_detail = "rgba(44, 89, 79, 0.7)";
            break;
        case 4:
        case 9:
            $post_border = "rgba(0, 45, 64, 1)";
            $post_detail = "rgba(0, 45, 64, 0.6)";
            break;
    }
?>
<div class="blogpost" style="border-top: 7px solid <?php echo $post_border; ?>;">
<div class="detail" style="background-color: <?php echo $post_detail; ?>;"><p class="post-details"><?php the_date(); ?> | <?php the_author(); ?></p></div>
<h2 class="post-title" id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<?php echo get_wp_user_avatar($user_id, 60, 'text-wrap-left'); ?><h3 class="post-author"><?php the_author(); ?></h3>
<?php echo do_shortcode('[ssba]'); ?>

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
</div><!-- container -->
<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?>
<!-- end footer area -->
