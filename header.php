<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'mosaic-theme'); ?></a>

    <!--	<header id="masthead" class="site-header">-->
    <!--		<div class="site-branding">-->
    <!--			--><?php
    //			the_custom_logo();
    //			if ( is_front_page() && is_home() ) :
    //				?>
    <!--				<h1 class="site-title"><a href="-->
    <?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
    <!--				--><?php
    //			else :
    //				?>
    <!--				<p class="site-title"><a href="-->
    <?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
    <!--				--><?php
    //			endif;
    //			$mosaic_theme_description = get_bloginfo( 'description', 'display' );
    //			if ( $mosaic_theme_description || is_customize_preview() ) :
    //				?>
    <!--				<p class="site-description">-->
    <?php //echo $mosaic_theme_description; /* WPCS: xss ok. */ ?><!--</p>-->
    <!--			--><?php //endif; ?>
    <!--		</div><!-- .site-branding -->
    <!---->
    <!--		<nav id="site-navigation" class="main-navigation">-->
    <!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">-->
    <?php //esc_html_e( 'Primary Menu', 'mosaic-theme' ); ?><!--</button>-->
    <!--			--><?php
    //			wp_nav_menu( array(
    //				'theme_location' => 'menu-1',
    //				'menu_id'        => 'primary-menu',
    //			) );
    //			?>
    <!--		</nav><!-- #site-navigation -->
    <!--	</header><!-- #masthead -->


    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <?php the_custom_logo(); ?>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">


                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo get_site_url();?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_site_url();?>/how-works">HOW IT WORKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_site_url();?>/attaractions">ATTARACTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_site_url();?>/contact">CONTACT US</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </nav>
    </header>


    <div id="content" class="site-content">
