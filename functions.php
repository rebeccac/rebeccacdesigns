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
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( '(more...)', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
/*---Move Product Title*/
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
// add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5 );
add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {

 unset($tabs['reviews']);

 return $tabs;
}
?>
