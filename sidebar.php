<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sof_theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<div class="site-branding">
		<?php
		if ( is_front_page() && is_home() ) : ?>
			<h2 class="site-title-2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
		<?php else : ?>
			<p class="site-title-2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p class="site-description-2"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
		endif; ?>
	</div><!-- .site-branding -->

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
