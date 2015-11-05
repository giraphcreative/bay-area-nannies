<?php

/*
Template Name: Page - Home
*/

get_header();

?>
		
	<?php the_showcase(); ?>

	<nav role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
	</nav>

	<div class="main-content">
		<div class="content-style wrap group">

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
	
		<div class="home-links">
			<div class="wrap">
				<ul>
					<li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/img/home-books.png"> Books 4 Babes</a></li>
					<li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/img/home-places.png"> Places to Go</a></li>
					<li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/img/home-teach-talk.png"> Teach Baby to Talk</a></li>
					<li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/img/home-music.png"> Music for Kids</a></li>
					<li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/img/home-separation.png"> Separation Strategies</a></li>
					<li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/img/home-needs.png"> Special Needs</a></li>
					<li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/img/home-toys.png"> Best Toys</a></li>
					<li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/img/home-store.png"> Baby Store</a></li>
				</ul>
			</div>
		</div>
	</div>

<?php 

get_footer();

?>