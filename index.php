<?php
/**
 * The template for displaying Archive pages
 */

get_header(); 

?>
	<nav role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
	</nav>


	<div class="main-content">
		<div class="wrap group" role="main">
			<h1>Blog Posts</h1>
			<?php 

			if ( have_posts() ) : 
			
				// Start the Loop.
				while ( have_posts() ) : the_post(); 
					?>
			<article>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			</article>
					<?php
				endwhile;

				?>
			<div class="pagination">
				<?php pagination(); ?>
			</div>
				<?php

			else :
				// If no content, include the "No posts found" template.
				?>
				<?php
			endif;
			?>

		</div>
	</div>

<?php

get_footer();

?>