<?php
if(in_category(32)) {
include 'single-32.php';
} else {
?>
<?php
/**
* @package WordPress
* @subpackage Default_Theme
*/
$border_colours = array("rgba(51, 77, 92, 1)", "rgba(69, 178, 157, 1)", "rgba(239, 201, 76, 1)", "rgba(226, 122, 63, 1)", "rgba(223, 90, 73, 1)");
$rand = rand (0, 4);

get_header();?>
<div class="container">
	<div class="row row-no-padding">
        <div class="col-xs-12 col-sm-9">

<div class="blog-content" id="content" role="main">
	<div class="padded-content">
<div class="blogpostwrapper">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="blogpost" style="border-top: 7px solid <?php echo  $border_colours[$rand]; ?>;">
	<div class="post-nav">
		<div><?php previous_post_link('&laquo; %link') ?></div>
		<div><?php next_post_link('%link &raquo;') ?></div>
	</div><!-- post-nav -->

	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

		<h2 class="page-title uppercase" style="padding: 5px 0;"><?php the_title(); ?></h2>
		<p class="bold"><?php the_author(); ?></p>
		<!-- <div> -->
		<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
		<div class="row interact">
			<!-- share icons - Simple Share Buttons Adder widget -->
			<div class="col-xs-12 col-sm-6">
				<?php echo do_shortcode('[ssba]'); ?>
			</div>
			<div class="col-xs-12 col-sm-6"><!-- You can follow responses to this post through the -->
				<a href="http://www.rebeccacordingleydesigns.com/blog/feed/"><i class="fa fa-rss rss-icon"></i>RSS feed</a>

			</div>
		</div>
		<div class="post-tags">
		    <p><?php the_tags('<span class="bold">Tags:</span> ', ' | '); ?></p>
		</div>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		<p>
		Posted
		<?php /* This is commented, because it requires a little adjusting sometimes.
		You'll need to download this plugin, and follow the instructions:
		http://binarybonsai.com/wordpress/time-since/ */
		/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
		on <?php the_time('l, F jS, Y') ?>, at <?php the_time() ?>.
		<br>
		Category: <?php the_category(', ') ?>.
		<br>

		<br>
	</div>


		<?php comments_template(); ?>
	</div><!-- blogpost -->

		<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
</div><!-- blogpostwrapper -->
</div><!-- padded-content -->
</div><!-- blog-content -->
</div><!-- col-xs-12 col-sm-9 -->

<div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0">
	<?php dynamic_sidebar('right-sidebar');
	get_sidebar(); ?>
</div><!-- col-xs-12 col-sm-3 -->
</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>
<?php } ?>
