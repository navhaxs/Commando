<?php
/**
 * Template Name: Projects
 *
 * @package commando
 */

get_header(); ?>


<!--
https://davidwalsh.name/background-animation-css
-->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="grid-container">
				<div class="box a">Published projects</div>
				  <!-- <div class="box col-3 b">

						<h2>Latest blog posts</h2>

						<ul>
						<?php
							$args = array( 'numberposts' => '5' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
							}
						?>
						</ul>

					</div> -->
				  <div class="box col-3 d msd">
						<h2>Minecraft Server Dashboard</h2>

						<span>Minecraft server management, simplified.</span>

						<span>Start hosting your own Minecraft server now, from home.</span>

						<span>7,000+ downloads</span>

						<a href="http://navhaxs.au.eu.org/minecraft-dashboard/">Website</a>

					</div>
					<div class="box col-3 e wiimote">
						<h2>Wii Remote Presenter for PowerPoint</h2>

						<span>Use your wiimote to control PowerPoint with this addin written in C#</span>

						<a href="https://github.com/navhaxs/wiimote-presenter-powerpoint">Website</a>

					</div>
					<div class="box z">Coming soon</div>
					<div class="box col-3 c visionscreens">

						<h2>VisionScreens</h2>

						<span>Modern church worship software.</span>

						<span>Based on Qt technologies.</span>

						<span>Coming soon.</span>

						<a href="#">Read more</a>

					</div>

					<!-- <div class="box col-3 d">

					</div> -->

						<div class="box zz">More stuff</div>
						<div class="row">

				<!-- <div class="box e">E</div>
				<div class="box f">F</div> -->
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="entry-content">

					<?php the_content(); ?>

					</div>
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>


				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
