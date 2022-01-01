<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<div class="header">
	    <div class="center-wr">
	        <div class="clearfix">
	            <div class="header-logo">
	                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
	                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" />
	                </a>
	                <?php // the_custom_logo(); ?>
	            </div> <!-- End of Header Logo -->
	        </div> <!-- End of clearfix -->
	    </div> <!-- End of Center-wr -->
	</div> <!-- End of Header Class and Division -->