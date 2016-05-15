<?php
/**
 * @package commando
 */
?>

<article id="post-<?php the_ID(); ?>" class="excerpt-snippet">


	</header><!-- .entry-header -->

	<div class="entry-content">
		<h2><?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></h2>
        <?php if ( 'post' == get_post_type() ) : ?>
				<div class="list-entry-meta"><?php commando_posted_on(); ?></div>
		<?php endif; ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'commando' ),
				'after'  => '</div>',
			) );
		?>
</article><!-- #post-## -->
