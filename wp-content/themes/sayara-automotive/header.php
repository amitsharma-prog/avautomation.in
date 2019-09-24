<?php
/**
 * The header for our theme 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'sayara-automotive' ) ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'sayara-automotive' ); ?></a>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="logo">
								<?php if( has_custom_logo() ){ the_custom_logo();
					             }else{ ?>
					            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					            <?php $description = get_bloginfo( 'description', 'display' );
					            if ( $description || is_customize_preview() ) : ?> 
					              <p class="site-description"><?php echo esc_html($description); ?></p>
					            <?php endif; }?>
					        </div>
						</div>
						<div class="col-lg-9 col-md-8">
							<?php if ( has_nav_menu( 'top' ) ) : ?>
								<div class="navigation-top">
									<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="topbar">
				<div class="container">
					<div class="top-bg">
						<div class="row">
							<div class="col-lg-3 col-md-6 contact-details">
								<div class="row">
									<?php if( get_theme_mod( 'sayara_automotive_location_head','' ) != '' || get_theme_mod( 'sayara_automotive_address','' ) != '') { ?>
										<div class="col-lg-2 col-md-2">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="col-lg-10 col-md-10">
											<p class="top-head"><?php echo esc_html( get_theme_mod('sayara_automotive_location_head','' )); ?></p>
											<p><?php echo esc_html( get_theme_mod('sayara_automotive_address','' )); ?></p>
										</div>
									<?php }?>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 contact-details">
								<div class="row">
									<?php if( get_theme_mod( 'sayara_automotive_contact_head','' ) != '' || get_theme_mod( 'sayara_automotive_contact','' ) != '') { ?>
										<div class="col-lg-2 col-md-2">
											<i class="fa fa-phone"></i>
										</div>
										<div class="col-lg-10 col-md-10">
											<p class="top-head"><?php echo esc_html( get_theme_mod('sayara_automotive_contact_head','' )); ?></p>
											<p><?php echo esc_html( get_theme_mod('sayara_automotive_contact','' )); ?></p>
										</div>
									<?php }?>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 contact-details">
								<div class="row">
									<?php if( get_theme_mod( 'sayara_automotive_time_head','' ) != '' || get_theme_mod( 'sayara_automotive_time','' ) != '') { ?>
										<div class="col-lg-2 col-md-2">
											<i class="far fa-clock"></i>
										</div>
										<div class="col-lg-10 col-md-10">
											<p class="top-head"><?php echo esc_html( get_theme_mod('sayara_automotive_time_head','' )); ?></p>
											<p><?php echo esc_html( get_theme_mod('sayara_automotive_time','' )); ?></p>
										</div>
									<?php }?>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="social-icon">
									<?php if( get_theme_mod( 'sayara_automotive_facebook_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'sayara_automotive_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
									<?php } ?>
									<?php if( get_theme_mod( 'sayara_automotive_twitter_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'sayara_automotive_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
									<?php } ?>
									<?php if( get_theme_mod( 'sayara_automotive_google_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'sayara_automotive_google_url','' ) ); ?>"><i class="fab fa-google"></i></a>
									<?php } ?>
									<?php if( get_theme_mod( 'sayara_automotive_youtube_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'sayara_automotive_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	<div class="site-content-contain">
		<div id="content">