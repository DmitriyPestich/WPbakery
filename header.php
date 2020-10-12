<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpbakery
 */
global $wpbakery;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>




    <header class="site-navbar py-1" role="banner">

        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2" data-aos="fade-down">
                    <h1 class="mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-black h2 mb-0"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
                <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                    <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header_menu',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'site-menu js-clone-nav mx-auto d-none d-lg-block',
                            'container'      => ''
                        ) );
                        ?>

                    </nav>
                </div>

                <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
                    <div class="d-none d-xl-inline-block">


                        <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                            <?php if($wpbakery['social_profiles']){
                                foreach ($wpbakery['social_profiles'] as $key => $value){
                                    $icon = '';
                                    if($key == 'Facebook Profile'){
                                        $icon = 'icon-facebook';
                                    } else if($key == 'Twiter Profile') {
                                        $icon = 'icon-twitter';
                                    } else if($key == 'Instagram Profile') {
                                        $icon = 'icon-instagram';
                                    } else if($key == 'Youtube Profile') {
                                        $icon = 'icon-youtube-play';
                                    } else {
                                        $icon = 'icon-home';
                                    }
                                    ?>

                                    <?php if($value){?>
                                        <li>
                                            <a href="<?php echo esc_url($value);?>" class="pl-0 pr-3 text-black"><span class="<?php echo esc_attr($icon);?>"></span></a>
                                        </li>
                                    <?php }?>

                               <?php }
                            }
                            ?>
                            <!--
                            <li>
                                <a href="#" class="pl-0 pr-3 text-black"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#" class="pl-3 pr-3 text-black"><span class="icon-youtube-play"></span></a>
                            </li>
                            -->

                        </ul>
                    </div>

                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                </div>

            </div>
        </div>

    </header>


    <?php if(is_front_page()) { ?>

        <div class="slide-one-item home-slider owl-carousel">

            <?php $slider = $wpbakery['header_slider'];

            if($slider){
                foreach($slider as $slide){?>
                    <div class="site-blocks-cover" style="background-image: url(<?php echo esc_attr(wp_get_attachment_url($slide['attachment_id']))?>);" data-aos="fade" data-stellar-background-ratio="0.5">
                        <div class="container">
                            <div class="row align-items-center justify-content-center text-center">

                                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                                    <h5 class="text-white font-weight-light text-uppercase"><?php echo esc_attr($slide['description'])?></h5>
                                    <h2 class="text-white font-weight-light mb-2 display-1"><?php echo esc_attr($slide['title'])?></h2>

                                    <p><a href="<?php echo esc_url($slide['url']);?>" class="btn btn-black py-3 px-5">Book Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            }
            ?>

        </div>
    <?php } else {?>
        <div class="slide-one-item home-slider owl-carousel">

            <div class="site-blocks-cover inner-page-cover" style="background-image: url(<?php echo esc_url($wpbakery['header_inner']['url']);?>);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">

                        <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                            <h2 class="text-white font-weight-light mb-2 display-1"><?php wp_title('');?></h2>

                            <p><a href="<?php echo esc_url($wpbakery['book_url']);?>" class="btn btn-black py-3 px-5"><?php esc_html_e('Book Now!', 'wpbakery');?></a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php }?>




<!--
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wpbakery' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$wpbakery_description = get_bloginfo( 'description', 'display' );
			if ( $wpbakery_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wpbakery_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wpbakery' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header>

	<div id="content" class="site-content">-->
