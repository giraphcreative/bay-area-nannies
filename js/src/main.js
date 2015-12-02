

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
		twitter_widget = $( '.widget_multi_twitter' );


	// remove height and width from images inside
	fluid_images.removeAttr( 'width' ).removeAttr( 'height' );


	// fluid width videos that maintain aspect ratio
	$( '.main-content, .content-style' ).fitVids();
	
	
});

