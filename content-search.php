<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
    <header class="entry-header" style="min-height: 200px;
 background-image: url('<?php echo $header_src; ?>');<?php if ($header_width > 873) echo "background-size: cover;"; ?>">       
    <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    
    <?php else :?>
    
        <header class="entry-header-textonly">
    <?php the_title( sprintf( '<h1 class="entry-title-textonly"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    <?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php commando_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
