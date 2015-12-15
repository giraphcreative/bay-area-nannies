

// is integer boolean function
function isInt( n ) {
	return n % 1 === 0;
}


// onload responsive footer and menu stuff
jQuery(document).ready(function($){

	// select some things we'll use to make things responsive
	var menu = $( 'header nav' ),
		menu_toggle = menu.find( 'button.menu-toggle' ),
		menu_ul = menu.find( 'nav' ),
		fluid_images = $( '.main-content img, .content-style img' ),
		sidebar = $( '.sidebar' ),
		large_title = $( '.large-title' ),
		left_menu = $( '.sidebar .menu' ),
		twitter_widget = $( '.widget_multi_twitter' )
		testimonials = $( '.testimonials' );


	// remove height and width from images inside
	fluid_images.removeAttr( 'width' ).removeAttr( 'height' );


	// fluid width videos that maintain aspect ratio
	$( '.main-content, .content-style' ).fitVids();
	
	if ( testimonials.length ) {
		// store testimonials
		var testimonials = testimonials.find( '.testimonial' );

		// number of testimonials
		var number_of_testimonials = testimonials.length;

		// number of columns
		var columns = 1;
		if ( matchMedia('only screen and (min-width: 768px)').matches ) {
			columns = 3;
		} else if ( matchMedia('only screen and (min-width: 500px)').matches ) {
			columns = 2;
		}

		// number per column
		var number_per_column = Math.ceil( number_of_testimonials / columns );
		console.log( number_per_column );

		// loop through 'em!
		var test_count = 1;
		testimonials.each(function(){
			if ( test_count > number_per_column && test_count < ( number_per_column * 2 ) ) {
				console.log( $(this) );
				$( this ).detach().appendTo( '.testimonials-column:nth-child(2)' );
				//$( this ).remove();
			}
			if ( test_count > number_per_column ) {
				$( this ).detach().appendTo( '.testimonials-column:nth-child(2)' );
			}
			if ( test_count > ( number_per_column * 2 ) ) {
				$( this ).detach().appendTo( '.testimonials-column:nth-child(3)' );
			}
			test_count++;
		});
		
	}

});

