<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package commando
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( strlen( $img = get_the_post_thumbnail( get_the_ID(), 'single-post-thumbnail' ) ) ) : ?>
    <?php   $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail' );
            $header_src = $image_attributes[0];
            $header_width = $image_attributes[1];
    ?>
    <header class="entry-header" style="min-height: 500px;
 background-image: linear-gradient(to bottom, rgba(0,0,0,0) 75%, rgba(0,0,0,0.9) 100%), url('<?php echo $header_src; ?>');<?php if ($header_width > 873) echo "background-size: cover;"; ?>">
    <?php the_title( sprintf( '<h1 class="entry-title" data-sr="enter bottom after 0s over 1s"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

    <?php else :?>

        <header class="entry-header-textonly">
    <?php the_title( sprintf( '<h1 class="entry-title-textonly" data-sr="enter bottom after 0s over 1s"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    <?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'commando' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'commando' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
