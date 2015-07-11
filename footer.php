<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package commando
 
 
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'commando' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'commando' ), 'WordPress' ); ?></a>

TODO
http://www.cssstickyfooter.com/using-sticky-footer-code.html
 
 */
?>
	</div><!-- #content -->
</div><!-- #page -->
<footer id="colophon" class="site-footer-wrapper">
    <div class="site-footer" role="contentinfo">

        <div class="thirds" style="float:left;">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>

        <div class="thirds" style="float:left;">        
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>


        <div class="site-info" style="float:right;">

            <?php printf( __( 'Proudly powered by %1$s', 'commando' ), '<a href="http://wordpress.org/">WordPress</a>' ); ?>
            <span class="sep"> | </span>
            <?php printf( __( 'Theme: %1$s by %2$s.', 'commando' ), 'Commando', '<a href="http://navhaxs.au.eu.org/" rel="designer">navhaxs</a>' ); ?>
        </div><!-- .site-info -->

        <div class="arrow-down"></div>

    </div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>