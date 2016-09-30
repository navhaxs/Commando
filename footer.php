<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package commando
 */
?>
	</div><!-- #content -->
</div><!-- #page -->
<footer id="colophon" class="site-footer-wrapper">
    <div class="site-footer" role="contentinfo">

        <div class="thirds footer-nav widget" style="float:right;">
            <?php if ( is_active_sidebar( 'footer-1' ) ): ?> 
                <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php else: ?>
            <h1 class="widget-title" style="text-align: left;">Where to next?</h2>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <?php endif; ?>
        </div>

        <div class="thirds" style="float:right;">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>

        <div class="thirds" style="float:right;">
            <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>

        <div class="site-info">
            <h2 class="special">:)</h2>
            <?php printf( __( 'Powered by %1$s', 'commando' ), '<a href="http://wordpress.org/">WordPress</a>' ); ?>
            <span class="sep"> &amp; </span>
            <?php printf( __( '%1$s.', 'commando' ), '<a href="http://github.com/navhaxs/commando/" rel="designer">Commando</a>' ); ?>
        </div><!-- .site-info -->

        <div class="arrow-down"></div>

    </div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/scrollreveal.js/2.3.2/scrollreveal.min.js"></script>
<script>

	 window.sr = new scrollReveal();

</script>
</body>
</html>
