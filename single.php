<?php
/**
 * The Singles file for the Bussines Starter Theme.
 *
 * @package WordPress
 * @subpackage businessthemestarter
 *
 * @version 1.0.0
 */

get_header();
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<section class="row">
			<div class="col-md-12 title-bar">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="container">
			<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
			<div class="col-md-8">
			<?php else : ?>
				<div class="col-md-12">
			<?php endif; ?>
			<article class="post">
					<div class="post-thumbnail">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>
						<br>
					</div>
					<ul class="meta">
						<li>By: <a href="<?php echo esc_html( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></li>
						<li>On: <?php the_date(); ?></li>
						<li>Category: 
							<?php
							$categories = get_the_category();
							$output     = '';

							if ( $categories ) {
								foreach ( $categories as $category ) {
									$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>, ';
								}
							}
							echo wp_kses(
								trim( $output, ', ' ),
								array(
									'a' => array(
										'href'  => array(),
										'title' => array(),
									),
								)
							);
							?>
						</li>
					</ul>
					<br>
					<?php the_content(); ?>
			</article>
			<div class="clr"></div>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php if ( have_comments() ) : ?>
			<?php comments_template(); ?>
		<?php endif; ?>
		</div>
		<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<div class="col-md-4">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		<div>
		<?php endif; ?>
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