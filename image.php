<?php
/*
Template Name: Full Width
*/
?>


<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package commando
 */

get_header(); ?>

		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
//                $photographer = get_post_meta($post->ID, 'be_photographer_name', true);
//                $photographerurl = get_post_meta($post->ID, 'be_photographer_url', true);
            ?>

            <header class="entry-header-textonly">
    <?php the_title( sprintf( '<h1 class="entry-title-textonly"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
            </header>

            <div class="entry-attachment">
                <?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "full"); ?>
                                        <p class="attachment"><a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0];?>" class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
                                            <?php
                                            /*width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>" */
                                            ?>
                                        </p>
                <?php else : ?>
                                        <a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo esc_html( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>
                <?php endif; ?>
            </div>

            <?php endwhile; ?>



            
		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

<?php get_footer(); ?>