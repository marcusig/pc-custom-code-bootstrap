( function( $ ) {

	wp.hooks.addAction( 'PC.fe.start', 'MKL/PC/Custom_Code', function( view ) {
		// Execute some code when the configurator starts. 
		// All the DOM has been added, and before showing it.
		// A good place to move or add dom elements, unless if they are related to choices or layers. 
		// In this case, do this using the appropriate hooks.

		// E.g. enable the +/- buttons in blocksy theme:
		// if ( ctFrontend && ctFrontend.handleEntryPoints ) ctFrontend.handleEntryPoints( ctFrontend.allFrontendEntryPoints );
	});

} )( jQuery );