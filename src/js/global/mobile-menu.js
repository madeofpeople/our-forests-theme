const toggleNav = ( nav, ham ) => {
	if ( nav.classList.contains( 'open' ) ) {
		closeNav( nav, ham );
	} else {
		openNav( nav, ham );
	}
};

const openNav = ( nav, ham ) => {
	nav.classList.add( 'open' );
	ham.setAttribute( 'aria-expanded', 'true' );
	ham.querySelector( 'span' ).textContent = '×';
};

const closeNav = ( nav, ham ) => {
	nav.classList.remove( 'open' );
	ham.setAttribute( 'aria-expanded', 'false' );
	ham.querySelector( 'span' ).textContent = '☰';
};

const initMobileMenu = () => {
	const nav = document.querySelector( '.page-nav' );
	const hamburger = nav.querySelector( '.hamburger' );

	hamburger.addEventListener( 'click', ( event ) => {
		event.preventDefault();
		toggleNav( nav, hamburger );
	} );

	// handles clicks outside the menu
	document.body.addEventListener( 'click', ( event ) => {
		if (
			! event.target.classList.contains( 'hamburger' ) &&
			! event.target.closest( '.hamburger' ) &&
			! event.target.closest( '.menu' )
		) {
			closeNav( nav, hamburger );
		} else if (
			// closes the menu when clicking a link that doesnt navigate away from the current page eg: #amplify/#support
			event.target.classList.contains( 'menu-item' ) ||
			event.target.closest( '.menu-item' )
		) {
			closeNav( nav, hamburger );
		}
	} );
};

if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	initMobileMenu();
} else {
	document.addEventListener( 'DOMContentLoaded', function () {
		initMobileMenu();
	} );
}
