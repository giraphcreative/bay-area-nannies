<?php
/**
 * The Template for displaying all single posts
 */

get_header();

?>
	<nav role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
	</nav>

	<div class="main-content">
		<div class="content-narrow group" role="main">

			<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 
					?>
					<h1><?php the_title(); ?></h1>
					<?php
					the_content();
				endwhile;
			endif;
			 ?>

		</div>
	</div>
<?php

get_footer();

?>