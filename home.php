<?php /* Template Name: RCD Blog Index */ ?>
<!-- Header -->
<?php include (TEMPLATEPATH . '/header.php'); ?>

<!-- End Header -->
<?php dynamic_sidebar('right-sidebar'); ?>
<?php get_sidebar(); ?>
<div class="blog-content">
    <div class="padded-content">
<!-- main content area -->
<div id="mainhome">
<a name="maincontent" id="maincontent"></a>
<!-- WordPress Loop -->
<div class="blogpostwrapper">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="blogpost">
<h2 class="page-title" id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>: <span class="italic"><?php the_date(); ?></span></h2>
<h4><?php the_author(); ?></h4>
<?php the_content(); ?>
</div>
<hr class="blog-post-divider">
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
<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?>
<!-- end footer area -->
