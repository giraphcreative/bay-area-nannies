<?php

get_header();

$color = get_cmb_value( 'large-title-color' );
if ( empty( $color ) ) $color = 'forest';

?>

	<?php the_showcase(); ?>

	<nav role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
	</nav>

	<div class="main-content">
		<div class="content-narrow group" role="main">
			<?php 
			// do post loop
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					?>
					<h1><?php the_title(); ?></h1>
					<?php
					the_content();
				endwhile;
			endif;
			
			// output the people
			the_people();

			// output the testimonials if they're present
			the_testimonials()

			?>
		</div>
	</div>
<?php

get_footer();

?>