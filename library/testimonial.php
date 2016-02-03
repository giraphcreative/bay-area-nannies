<?php


function the_testimonials() {

	// get the slides
	$testimonials = get_post_meta( get_the_ID(), CMB_PREFIX . "testimonial", 1 );

	// make sure the array isn't empty, and we'll display if not
	if ( !empty( $testimonials ) ) {
		?>
		<div class="testimonials">

			<div class="testimonials-column">
			<?php
			foreach ( $testimonials as $key => $testimonial ) {
				?>
				<div class="testimonial">
					<?php 
					// check if it's an image or video
					if ( p_is_image( $testimonial["image"] ) ) {
						// it's an image, so resize it and generate an img tag.
						?>
						<img src="<?php print $testimonial["image"] ?>" alt="<?php print ( !empty( $test ) ? $test : '' ) ?>" class="testimonial-image">
						<?php
					} else {
						print apply_filters('the_content', $testimonial["image"]);
					}
					?>
					<div class="testimonial-content">
						<?php print wpautop( $testimonial['testimonial'] ); ?>
						<?php if ( !empty( $testimonial['by'] ) ) { ?><p class="testimonial-by"><?php print $testimonial['by'] ?></p><?php } ?>
					</div>
				</div>
				<?php
			}
			?>
			</div>
			<div class="testimonials-column"></div>
			<div class="testimonials-column"></div>
			
		</div>
		<?php
	}

}



?>