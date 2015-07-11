<?php
/**
 * @package commando
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( strlen( $img = get_the_post_thumbnail( get_the_ID(), 'single-post-thumbnail' ) ) ) : ?>
    <?php   $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail' );
            $header_src = $image_attributes[0];
            $header_width = $image_attributes[1];
    ?>
    <header class="entry-header" style="background-image: url('<?php echo $header_src; ?>');<?php if ($header_width > 873) echo "background-size: cover;" ?>">       
    <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    <?php else :?>
    <header class="entry-header-textonly">
    <?php the_title( sprintf( '<h1 class="entry-title-textonly"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    <?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php commando_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'commando' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'commando' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    <footer class="entry-footer">
      <?php commando_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->