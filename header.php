<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage twentythirteen-child
 * @since twentythirteen-child 1.0
 */

// check if current page matches var and add active class to current menu item
// $active_index = addActive('index', $page);
// $active_about = addActive('about', $page);
// $active_contact = addActive('contact', $page);
// $active_gallery = addActive('gallery', $page);

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php the_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600|Halant:300,400|Martel:400,300|Lora:400,600,700|Marcellus|Open+Sans:300,400,600,800|Merriweather' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="/wp-content/uploads/2015/08/favico.png"
    type="image/x-icon" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/twentythirteen-child/js/menu_jquery.js"></script>



		<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<div class="container-fluid">
		<header class="header">
<!-- mobile menu visible < 768px -->
    <nav class="mobile visible-xs-block">
        <div class="row">
            <div class="col-xs-12">
                <ul class="mobile-menu">
                    <li>
                        <a href="#" id="dropdown-link">

                        <i class="fa fa-bars"></i>                             <span>Menu</span></a>
                        <ul class="s-m-i s-m-i-xs">
                            <li><a href="https://www.twitter.com/BecCDesigns" target="_blank">
                                <span aria-hidden="true">
                                    <i class="fa fa-twitter"></i>
                                </span>
                                <span class="sr-only">Twitter</span>

                            </a></li>
                            <li><a href="http://www.facebook.com" target="_blank"><span aria-hidden="true">
                                <i class="fa fa-facebook"></i>
                            </span>
                            <span class="sr-only">Facebook</span></a></li>
                            <li><a href="https://www.pinterest.com/beccordingley/" target="_blank"><span aria-hidden="true">
                                <i class="fa fa-pinterest"></i>
                            </span>
                            <span class="sr-only">Pinterest</span></a></li>
                            <li><a href="https://instagram.com/rebeccacdesigns/" target="_blank"><span aria-hidden="true">
                                <i class="fa fa-instagram"></i>
                            </span>
                            <span class="sr-only">Instagram</span></a></li>
                        </ul>
                        <ul class="drop" id="dropdown-menu">
                            <li class="menu-item"><a href="/">Home</a></li>
                            <li class="menu-item"><a href="/about">About Me</a></li>
							<li class="menu-item"><a href="/blog">Blog</a></li>
                            <li class="menu-item"><a $class href="http://www.etsy.com" target="_blank">Etsy</a></li>
                            <li class="menu-item">Shop</li>
                            <li class="menu-item"><a href="/gallery">Gallery</a></li>
                            <li class="menu-item"><a href="/contact">Contact</a></li>
                            <!-- <li class="menu-item">Web Development</li> -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="logo hidden-xs">
        <img src="/wp-content/uploads/2015/07/logo_small.png" width="40px" alt="Rebecca Cordingley Designs logo">
    </div> -->
	<!-- desktop menu visible >= 768px -->

    <ul class="s-m-i hidden-xs">
        <li><a href="https://www.twitter.com/BecCDesigns" target="_blank">
                <span aria-hidden="true">
                    <i class="fa fa-twitter"></i>
                </span>
                <span class="sr-only">Twitter</span>
            </a>
		</li>
        <li><a href="http://www.facebook.com" target="_blank">
                <span aria-hidden="true">
                    <i class="fa fa-facebook"></i>
                </span>
                <span class="sr-only">Facebook</span>
            </a>
		</li>
        <li><a href="https://www.pinterest.com/beccordingley/" target="_blank">
                <span aria-hidden="true">
                    <i class="fa fa-pinterest"></i>
                </span>
                <span class="sr-only">Pinterest</span>
            </a>
		</li>
        <li><a href="https://instagram.com/rebeccacdesigns/" target="_blank">
                <span aria-hidden="true">
                    <i class="fa fa-instagram"></i>
                </span>
                <span class="sr-only">Instagram</span>
            </a>
		</li>
		<li>
			<img src="/wp-content/uploads/2015/07/logo_small.png" width="35px" alt="Rebecca Cordingley Designs logo">
		</li>
    </ul>
    <div class="clear"></div>


    <nav class="nav hidden-xs">
        <div class="row">
            <div class="col-sm-12">
                <ul class="menu" role="menu">
                    <li class="menu-item" role="menuitem"><a <?php echo $active_index ?> href="/">HOME</a></li>
                    <li class="menu-item" role="menuitem"><a <?php echo $active_about ?> href="/about">ABOUT ME</a></li>
                    <li class="menu-item" role="menuitem"><a href="http://www.etsy.com/shop/rebeccacordingley" target="_blank">ETSY</a></li>
					<li class="menu-item" role="menuitem"><a href="/shop">SHOP</a></li>

                    <!-- <li class="menu-item" role="menuitem">SHOP</li> -->

                    <!-- <li class="title">
                        <h1 class="title"><span style="font-size: 1.5em;">REBECCA CORDINGLEY</span><br>
                            <span style="font-size: 1.1em;">DESIGNS</span></h1>
                    </li> -->

					<li class="title">
						<h1 class="title">
							<span class="title-top-bottom" style="background-color: #fdfdfd; color: #777;">REBECCA CORDINGLEY</span>
							<span class="title-top-bottom" style="background-color: #fdfdfd; color: #777;">DESIGNS</span>
						</h1>
					</li>
					<li class="menu-item" role="menuitem"><a href="/blog">BLOG</a></li>
                    <li class="menu-item" role="menuitem"><a <?php echo $active_gallery ?> href="/gallery">GALLERY</a></li>
                    <li class="menu-item" role="menuitem"><a <?php echo $active_contact ?> href="/contact">CONTACT</a></li>
                    <!-- <li class="menu-item" role="menuitem">WEB DEVELOPMENT</li> -->
                </ul>
            </div><!-- col-xs-12 -->
        </div><!-- row -->
    </nav>

</header>
