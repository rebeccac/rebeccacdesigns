<?php
if(function_exists('register_sidebar'))
register_sidebar( $args );
$args = array(
	'name'          => __( 'Right sidebar' ),
	'id'            => 'right-sidebar',
	'description'   => 'right',
    'class'         => 'widget-class',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></li>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title'  => '</h4><div class="widgetcontent">' );
if ( function_exists('register_sidebar') )
register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>',
));
// get all records from images table - front page images
function frontPageImages_function() {
    global $wpdb;
    $images = $wpdb->get_results("SELECT * FROM images ORDER BY images.id", OBJECT);
    return $images;
}
// get all records from photos table - gallery images
function galleryPhotos_function() {
    global $wpdb;
    $photos = $wpdb->get_results("SELECT * FROM photos", OBJECT);
    return $photos;
}
// Explanation in notes.txt
function addActive($title, $page) {
    if($page == $title) {
        $class = "class='active'";}
    else {
        $class = "";}
    return $class;
}
function getEtsyListings() {
    $item = new Etsy();
	$listings = $item->getListings();
    return $listings;
}
function truncate_paragraph($text, $length, $url, $class) {
        $text = substr( $text, 0, strpos($text, ' ', $length));
        $url = "<a href='".$url."' class='".$class."'>(more...)</a>";
        return "$text $url";
    }
// // Replaces the excerpt "more" text by a link
// function new_excerpt_more($more) {
//     global $post;
// 	return '<a class="more-link" href="'. get_permalink($post->ID) . '"> Read more...</a>';
// }
// add_filter('excerpt_more', 'new_excerpt_more');
?>
