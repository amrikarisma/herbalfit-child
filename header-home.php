<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'bensemangat_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php bensemangat_body_attributes(); ?>>
<?php if( get_theme_mod( 'bensemangat_preloader' ) === 'on' )  : ?>
<div class="preloader">
  <div class="loading">
    <img class="img-fluid" src="https://www.jotconstructions.ca/wp-content/themes/jot-construction/images/loader.gif" width="400">
    <!-- <div class="text-center">Harap Tunggu</div> -->
  </div>
</div>
<?php endif; ?>

<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="navbar-layout-desktop-center-absolute inited">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'bensemangat' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">
            <div class="container">
                <div class="navbar-logo">
                        <!-- Your site title as branding in the menu -->
                        <?php if ( ! has_custom_logo() ) { ?>

                            <?php if ( is_front_page() && is_home() ) : ?>

                                <h1 class="navbar-brand d-none d-lg-block"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                            <?php else : ?>

                                <a class="navbar-brand d-none d-lg-block" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                            <?php endif; ?>

                        <?php
                        } else {
                            echo '<div class="d-block">';
                                the_custom_logo();
                            echo '</div>';
                        }
                        ?>
                </div>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'secondary',
                            'container_class' => 'navbar-collapse collapse navbar-desktop',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'secondary-menu',
                            'depth'           => 2,
                            'walker'          => new Bensemangat_WP_Bootstrap_Navwalker(),
                        )
                    );
                ?>
                <div class="navbar-controls">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

            </div>

		</nav>
		<!-- .site-navigation -->
        
    </div><!-- #wrapper-navbar end -->