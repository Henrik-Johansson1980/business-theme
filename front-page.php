<?php
/**
 * Front-Page for the Bussines Starter Theme.
 *
 * @package WordPress
 * @subpackage businessthemestarter
 *
 * @version 1.0.0
 */

get_header();
?>

<div class="jumbotron" style="background: url('<?php echo esc_url( get_theme_mod( 'banner_image', get_template_directory_uri() . '/img/showcase.jpg' ) ); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
	<div class="container">
		<h1><?php echo esc_html( get_theme_mod( 'banner_heading', 'Banner Heading' ) ); ?></h1>
		<p class="lead"><?php echo esc_html( get_theme_mod( 'banner_text', 'Banner Text' ) ); ?></p>
		<p><a class="btn btn-lg btn-primary" href="<?php echo esc_url( get_theme_mod( 'banner_button_url', '#' ) ); ?>" role="button"><?php echo esc_html( get_theme_mod( 'banner_button_text', 'Sign Up Today' ) ); ?></a></p>
	</div>
</div>

<section class="row marketing">
	<div class="container">
		<div class="col-lg-4">
			<div class="block">
			<i class="fas <?php echo esc_attr( get_theme_mod( 'box1_icon', 'fa-chart-bar' ) ); ?> fa-3x"></i>
			<h3><?php echo esc_html( get_theme_mod( 'box1_heading', 'Heading' ) ); ?></h3>
			<p><?php echo esc_html( get_theme_mod( 'box1_text', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, illo!' ) ); ?></p>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="block">
			<i class="fas <?php echo esc_attr( get_theme_mod( 'box2_icon', 'fa-code' ) ); ?> fa-3x"></i>
			<h3><?php echo esc_html( get_theme_mod( 'box2_heading', 'Heading' ) ); ?></h3>
			<p><?php echo esc_html( get_theme_mod( 'box2_text', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, illo!' ) ); ?></p>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="block">
			<i class="fas <?php echo esc_attr( get_theme_mod( 'box3_icon', 'fa-desktop' ) ); ?> fa-3x"></i>
			<h3><?php echo esc_html( get_theme_mod( 'box3_heading', 'Heading' ) ); ?></h3>
			<p><?php echo esc_html( get_theme_mod( 'box3_text', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, illo!' ) ); ?></p>
			</div>
		</div>
	</div>
</section>
<!-- Widget Area 1 -->
<?php if ( is_active_sidebar( 'content-region-1' ) ) : ?>
	<?php dynamic_sidebar( 'content-region-1' ); ?>
<?php endif; ?>

<!-- Widget Area 2 -->
<section class="row content-region-2 pt50 pb40">
	<div class="container">
		<?php if ( is_active_sidebar( 'content-region-2-left' ) ) : ?>
			<?php dynamic_sidebar( 'content-region-2-left' ); ?>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'content-region-2-right' ) ) : ?>
			<?php dynamic_sidebar( 'content-region-2-right' ); ?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
