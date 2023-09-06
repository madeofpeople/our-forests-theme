let activeItem = null;

const initScrollSpy = () => {
	const selectors = '.entry-content > section:not(.social)';
	const observedElements = document.querySelectorAll( selectors );
	// console.log( '»»»»»»»»', observedElements );
	initNav();

	const inViewCallback = ( entries ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'in-view' );
				entry.target.classList.remove( 'out-of-view' );
				updatePageNav( entry.target );
			} else {
				entry.target.classList.remove( 'in-view' );
				entry.target.classList.add( 'out-of-view' );
			}
		} );
	};

	const observer = new IntersectionObserver( inViewCallback, {} );

	observedElements.forEach( ( element ) => {
		const dataDelay = element.getAttribute( 'data-delay' );
		element.classList.add( 'out-of-view' );
		element.style.transitionDelay = dataDelay + 'ms';
		observer.observe( element );
	} );
};

const updatePageNav = ( activeSection ) => {
	const pageNav = document.querySelector( '.page-nav' );
	const heading = activeSection.querySelector( 'h2' );
	if ( activeItem ) activeItem.classList.remove( 'active' );
	if ( heading && heading.id ) {
		window.location.hash = '#' + heading.id;
		// console.log( 'updatePageNav', hash, heading, heading.id );
		activeItem = pageNav.querySelector( `a[href="/#${ heading.id }"]` );
		// console.log( '\t\t\t', activeItem );
		if ( activeItem ) activeItem.classList.add( 'active' );
	}
};

const highlightNav = ( pathEnd ) => {
	const navLinks = document.querySelectorAll( '.menu a' );
	// console.log( '» pathEnd » ', pathEnd );
	navLinks.forEach( ( link ) => {
		const linkArr = link.getAttribute( 'href' ).split( '/' );
		const linkEnd = linkArr[ linkArr.length - 1 ];
		// console.log( pathEnd, linkEnd );
		if ( linkEnd === pathEnd ) {
			link.classList.add( 'active' );
			// console.log( 'on page', pathEnd );
		}
	} );
};

const initNav = () => {
	const path = window.location.pathname;
	const hash = window.location.hash.split( '#' )[ 1 ];
	const navLinks = document.querySelectorAll( '.menu a' );
	const pathArr = path.split( '/' );
	let pathEnd = pathArr[ pathArr.length - 1 ];
	pathEnd = ''
		? pathArr[ pathArr.length - 1 ]
		: pathArr[ pathArr.length - 2 ];
	if ( hash ) pathEnd = hash;
	if ( path === '/' ) {
		// console.log( navLinks[ 0 ], '!' );
		navLinks[ 0 ].classList.add( 'active' );
		if ( hash ) {
			activeItem = document.querySelector(
				`.wp-block-button__link[href="#${ hash }"]`
			);
			if ( activeItem ) activeItem.classList.add( 'active' );
		}
	} else {
		highlightNav( pathEnd );
	}
};

if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	if ( ! document.body.classList.contains( 'is-mobile' ) ) {
		initScrollSpy();
	}
} else {
	document.addEventListener( 'DOMContentLoaded', function () {
		if ( ! document.body.classList.contains( 'is-mobile' ) ) {
			initScrollSpy();
		}
	} );
}
