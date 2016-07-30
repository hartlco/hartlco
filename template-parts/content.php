<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hartlco
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			$linkMeta = get_post_meta(get_the_ID(), "link", true);
			$linkMetaNew = get_post_meta(get_the_ID(), "linked_list_url", true);
			if ( is_single() ) {
				if ($linkMeta || $linkMetaNew) {
					the_title( '<h1 class="entry-title"><a href="' . $linkMeta . '" rel="bookmark">', '</a></h1>' );
				} else {
					the_title( '<h1 class="entry-title">', '</h1>' );
				}
			} else {
				if ($linkMeta || $linkMetaNew) {
					the_title( '<h2 class="entry-title"><a href="' . $linkMeta . '" rel="bookmark">', '</a></h2>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );	
				}
			}

		if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'hartlco' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hartlco' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-meta">
		<?php hartlco_posted_on(); ?>
	</div><!-- .entry-meta -->
	<footer class="entry-footer">
		<?php hartlco_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
