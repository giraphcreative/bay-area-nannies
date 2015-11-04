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
		<div class="wrap group" role="main">
			<?php 
			// do post loop
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 
					the_content();
				endwhile;
			endif;
			
			the_accordion();
			?>
		</div>
	</div>
<?php

get_footer();

?>