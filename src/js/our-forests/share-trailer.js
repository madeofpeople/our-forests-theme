const initShareTrailer = () => {
	const links = document.querySelectorAll( '.share-trailer a' );
	links.forEach( ( link ) => {
		link.setAttribute( 'target', '_blank' );
	} );
};

if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	initShareTrailer();
} else {
	document.addEventListener( 'DOMContentLoaded', function () {
		initShareTrailer();
	} );
}
