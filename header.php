<?php
/**
 * Header file for the Bussines Starter Theme.
 *
 * @package WordPress
 * @subpackage businessthemestarter
 *
 * @version 1.0.0
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> >

	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<div class="header clearfix">
		<div class="container">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'depth'          => 2,
				'container'      => 'div',
				'menu_class'     => 'nav nav-pills pull-right',
				'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
				'walker'         => new WP_Bootstrap_Navwalker(),
			)
		);
		?>
		<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
		<a href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>" class="site-logo">
			<?php the_custom_logo(); ?>
		</a>
		<?php else : ?>
		<div class="site-identity">
			<a href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>" class="site-title-link">
				<h1 class="site-title"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></h1>
			</a>
			<p class="site-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></p>
		</div>
		<?php endif; ?>
		</div>
	</div>
