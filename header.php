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
	                <?php if( has_custom_logo() ):  ?>
	                    <?php 
	                        // Get Custom Logo URL
	                        $custom_logo_id = get_theme_mod( 'custom_logo' );
	                        $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	                        $custom_logo_url = $custom_logo_data[0];
	                    ?>

	                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
	                       title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
	                       rel="home" target="_blank">

	                        <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
	                             alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

	                    </a>
	                <?php else: ?>
	                    <div class="site-name"><?php bloginfo( 'name' ); ?></div>
	                <?php endif; ?>
	            </div> <!-- End of Header Logo -->
	        </div> <!-- End of clearfix -->
	    </div> <!-- End of Center-wr -->
	</div> <!-- End of Header Class and Division -->