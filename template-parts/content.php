<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sof_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
//		if ( is_single() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
//		else :
//			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
//		endif;

		// affichage de l'image à la une
		if (has_post_thumbnail()) {
			the_post_thumbnail('large');
		}
        ?>

	</header><!-- .entry-header -->

    <?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
            <?php sof_theme_posted_on(); ?>
            <?php sof_theme_entry_footer(); ?>
        </div><!-- .entry-meta -->
        <?php
    endif; ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continuer la lecture %s <span class="meta-nav">-></span>', 'sof-theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sof-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
