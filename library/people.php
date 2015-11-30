<?php


function the_people() {

	// get the people
	$people = get_post_meta( get_the_ID(), CMB_PREFIX . "people", 1 );

	if ( !empty( $people ) ) {
		?>
		<div class="people">
		<?php
		foreach ( $people as $key => $person ) {
			if ( !empty( $person["photo"] ) ) {

				// store the name, title, and description
				$name = ( isset( $person["name"] ) ? $person["name"] : '' );
				$title = ( isset( $person["title"] ) ? $person["title"] : '' );
				$description = ( isset( $person["description"] ) ? $person["description"] : '' );

				// get the photo and resize it
				$photo = p_image_resize( $person["photo"], 300, 300, true );
				$photo = '<img src="' . $photo . '" alt="' . ( !empty( $person['name'] ) ? $person['name'] : '' ) . '">';

				?>
			<div class="person">
				<?php print $photo; ?>
				<h3><?php print $person["name"] ?></h3>
				<h4><?php print $person["title"] ?></h4>
				<?php print apply_filters( "the_content", $person["description"] ); ?>
			</div>
				<?php
			}
		}
		?>
		</div>
		<?php
	}
}



?>